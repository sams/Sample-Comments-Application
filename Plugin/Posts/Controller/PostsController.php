<?php

/**
 * Sample Comments Application
 *
 * Copyright 2009 - 2010, Cake Development Corporation
 *                        1785 E. Sahara Avenue, Suite 490-423
 *                        Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright 2009 - 2010, Cake Development Corporation (http://cakedc.com)
 * @link      http://github.com/CakeDC/Sample-Comments-Application
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

class PostsController extends PostsAppController {

	var $name = 'Posts';

/**
 * Components List
 *
 * @var array $components
 * @access public
 */
	public $components = array(
		'Comments.Comments' => array('userModelClass' => 'Users.User'));

/**
 * 
 * 
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->passedArgs['comment_view_type'] = 'tree';
	}
		
	function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s'), 'post'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('post', $this->Post->read(null, $id));
	}

	function comments($id = null) {
		$post = $this->Post->read(null, $id);
		$this->set(compact('post', 'id'));
	}

	function add() {
		$this->set('isAjax', $this->RequestHandler->isAjax());
		if (!empty($this->data)) {
			$this->Post->create();
				if ($this->RequestHandler->isAjax()) {
					$this->Post->save($this->data);
					exit;
				}
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved'), 'post'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.'), 'post'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s'), 'post'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved'), 'post'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.'), 'post'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Post->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s'), 'post'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Post->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted'), 'Post'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted'), 'Post'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
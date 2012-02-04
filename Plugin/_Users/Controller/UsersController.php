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

class UsersController extends UsersAppController {

/**
 * Controller name
 *
 * @var string
 * @access public
 */
	public $name = 'Users';

/**
 * Helpers
 *
 * @var array
 * @access public
 */
	public $helpers = array('Html', 'Form', 'Session', 'Time', 'Text');

/**
 * Components
 *
 * @var array
 * @access public
 */
	public $components = array('Auth', 'Session');


/**
 * beforeFilter callback
 *
 * @return void
 * @access public
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('register', 'logout');

		if ($this->action == 'register') {
			$this->Auth->enabled = false;
		}

		if ($this->action == 'login') {
			$this->Auth->autoRedirect = false;
		}
	}

/**
 * User register action
 *
 * @todo refactor registration email in own method and create view files for it
 * @return void
 * @access public
 */
	public function register() {
		if ($this->Auth->user()) {
			$this->Session->setFlash(__d('users', 'You are already registered and logged in!'));
			$this->redirect('/');
		}

		if (!empty($this->data)) {
			$user = $this->User->register($this->data);
			if ($user !== false) {
				$this->set('user', $user);
				$this->Session->setFlash(__d('users', 'Your account has been created. You should receive an e-mail shortly to authenticate your account. Once validated you will be able to login.'));
				$this->redirect(array('action'=> 'login'));
			} else {
				unset($this->data['User']['passwd']);
				unset($this->data['User']['temppassword']);
				$this->Session->setFlash(__d('users', 'Your account could not be created. Please, try again.'), 'default', array('class' => 'message warning'));
			}
		}
	}

/**
 * Common login action
 *
 * @return void
 * @access public
 */
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Username or password is incorrect'));
			}
		}

		if (isset($this->params['named']['return_to'])) {
			$this->set('return_to', urldecode($this->params['named']['return_to']));
		} else {
			$this->set('return_to', false);
		}
		
		$this->set('title_for_layout', __('Login'));
	}
	
/**
 * Common logout action
 *
 * @return void
 * @access public
 */
	public function logout() {
		$this->Session->setFlash(sprintf(__d('users', '%s you have successfully logged out'), $this->Auth->user('username')));
		$this->Auth->logout();
		$this->Cookie->destroy();
		$this->redirect('/');
	}

}

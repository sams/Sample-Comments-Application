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
 
App::uses('Controller', 'Controller');
/**
 * Short description for class.
 *
 * @package		
 */
 
class AppController extends Controller {
/**
 * Components List
 *
 * @var array $components
 * @access public
 */
	public $components = array(
		'RequestHandler', 'Session', 'Auth', 'Paginator', 'DebugKit.Toolbar'
	);
/**
 * Helpers List
 *
 * @var array $helpers
 * @access public
 */
	public $helpers = array(
		'Session', 
		'Html', 
        'Form', 
        'Paginator', 
		'Js' => array('Jquery'));

	public function beforeFilter() {
		$this->Auth->authenticate = array(
	        	'Form' => array(
	        		'fields' => array('username' => 'email', 'password' => 'password'), 
					'userModel' => 'Users.User',
					'scope' => array('User.active' => 1)));
		$this->Auth->authorize = array('Controller');
		$this->Auth->loginAction = array('plugin' => 'users', 'controller' => 'users', 'action' => 'login', 'admin' => false);
		$this->Auth->loginRedirect = '/';
		$this->Auth->logoutRedirect = '/';
		$this->Auth->authError = __('Sorry, but you need to login to access this location.');
		$this->Auth->loginError = __('Invalid e-mail / password combination.  Please try again');
		$this->Auth->autoRedirect = true;

		if ($this->Auth->user()) {
			$this->set('userData', $this->Auth->user());
			$this->set('isAuthorized', ($this->Auth->user('id') != ''));
		}
			
	}
	
	public function isRequestedAction() {
		return array_key_exists('requested', $this->request->params);
	}
	
	public function isAuthorized() {
		return true;
	}


}
?>

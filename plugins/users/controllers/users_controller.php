<?php
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
			$this->Session->setFlash(__d('users', 'You are already registered and logged in!', true));
			$this->redirect('/');
		}

		if (!empty($this->data)) {
			$user = $this->User->register($this->data);
			if ($user !== false) {
				$this->set('user', $user);
				$this->Session->setFlash(__d('users', 'Your account has been created. You should receive an e-mail shortly to authenticate your account. Once validated you will be able to login.', true));
				$this->redirect(array('action'=> 'login'));
			} else {
				unset($this->data['User']['passwd']);
				unset($this->data['User']['temppassword']);
				$this->Session->setFlash(__d('users', 'Your account could not be created. Please, try again.', true), 'default', array('class' => 'message warning'));
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
		if ($this->Auth->user()) {
			$this->Session->setFlash(sprintf(__("%s you have successfully logged in", true), $this->Auth->user('username')));
			if (!empty($this->data)) {
				$data = $this->data[$this->modelClass];
			}

			if (!empty($data['return_to']) && $data['return_to']) {
				$this->redirect($data['return_to']);
			} else {
				$this->redirect($this->Auth->loginRedirect);
			}
		}

		if (isset($this->params['named']['return_to'])) {
			$this->set('return_to', urldecode($this->params['named']['return_to']));
		} else {
			$this->set('return_to', false);
		}
	}

/**
 * Common logout action
 *
 * @return void
 * @access public
 */
	public function logout() {
		$this->Session->setFlash(sprintf(__d('users', '%s you have successfully logged out', true), $this->Auth->user('username')));
		$this->Cookie->destroy();
		$this->redirect($this->Auth->logout());
	}

}
?>
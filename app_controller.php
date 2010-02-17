<?php
class AppController extends Controller {
/**
 * Components List
 *
 * @var array $components
 * @access public
 */
	public $components = array(
		'RequestHandler', 'Session', 'Auth'
	);
/**
 * Helpers List
 *
 * @var array $helpers
 * @access public
 */
	public $helpers = array('Session', 'Html', 'Form', 'Js' => array('Jquery'), 'Javascript');

	public function beforeFilter() {
		$this->Auth->authorize = 'controller';
		$this->Auth->fields = array('username' => 'email', 'password' => 'passwd');
		$this->Auth->loginAction = array('plugin' => 'users', 'controller' => 'users', 'action' => 'login', 'admin' => false);
		$this->Auth->loginRedirect = '/';
		$this->Auth->logoutRedirect = '/';
		$this->Auth->authError = __('Sorry, but you need to login to access this location.', true);
		$this->Auth->loginError = __('Invalid e-mail / password combination.  Please try again', true);
		$this->Auth->autoRedirect = true;
		$this->Auth->userModel = 'User';
		$this->Auth->userScope = array(
			'User.active' => 1);

		if ($this->Auth->user()) {
			$this->set('userData', $this->Auth->user());
			$this->set('isAuthorized', ($this->Auth->user('id') != ''));
		}
			
	}
	
	public function isRequestedAction() {
		return array_key_exists('requested', $this->params);
	}
	
	public function isAuthorized() {
		return true;
	}


}
?>
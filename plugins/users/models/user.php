<?php
class User extends UsersAppModel {

/**
 * Name
 *
 * @var string
 * @access public
 */
	public $name = 'User';

/**
 * display field
 *
 * @var string
 * @access public
 */
	public $displayField = 'username';

/**
 * Behaviors
 *
 * @var string $name
 * @access public
 */
	public $actsAs = array(
		'Comments.Sluggable' => array(
			'label' => 'username'));

/**
 * Registers a new user
 *
 * @param array Post data from controller
 * @return mixed
 * @access public
 */
	public function register($postData = array()) {
		$postData[$this->alias]['active'] = 1;

		$this->set($postData);
		if ($this->validates()) {
			App::import('Core', 'Security');
			$postData[$this->alias]['passwd'] = Security::hash($postData[$this->alias]['passwd'], 'sha1', true);
			$this->create();
			return $this->save($postData, false);
		}

		return false;
	}


}
?>
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

App::uses('UsersAppModel', 'Users.Model');
 
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
		'Utils.Sluggable' => array(
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
			App::uses('Security', 'Utility');
			$postData[$this->alias]['passwd'] = Security::hash($postData[$this->alias]['passwd'], 'sha1', true);
			$this->create();
			return $this->save($postData, false);
		}

		return false;
	}


}
?>
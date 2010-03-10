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
 
class M49c3417a54874a9d276811502cedc421 extends CakeMigration {
/**
 * Dependency array. Define what minimum version required for other part of db schema
 *
 * Migration defined like 'app.31' or 'plugin.PluginName.12'
 *
 * @var array $dependendOf
 * @access public
 */
	public $dependendOf = array();
/**
 * Migration array
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'users' => array(
					'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
					'username' => array('type'=>'string', 'null' => false, 'default' => NULL),
					'slug' => array('type'=>'string', 'null' => false, 'default' => NULL),
					'passwd' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
					'email' => array('type'=>'string', 'null' => true, 'default' => NULL),
					'active' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
					'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1))
				),
			),
		),
		'down' => array(
			'drop_table' => array('users'),
		)
	);
/**
 * before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @access public
 */
	public function before($direction) {
		return true;
	}
/**
 * after migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
?>
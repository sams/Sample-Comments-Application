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
?>
<h2><?php echo __d('users', 'Account registration'); ?></h2>
<fieldset>
	<legend><?php echo __d('users', 'Details');?></legend>
	<?php
		echo $this->Form->create('User', array('url' => array('action'=>'register')));
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('passwd', array(
					'label' => __d('users', 'Password'),
					'type' => 'password',
					'error' => __d('users', 'Must be at least 5 characters long')));
		echo $this->Form->input('temppassword', array(
					'label' => __d('users', 'Password (confirm)'),
					'type' => 'password',
					'error' => __d('users', 'Passwords must match')
					)
				);
		echo $this->Form->end(__d('users', 'Submit'));
?>
</fieldset>

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
<h2><?php echo __d('users', 'Login') ?></h2>
<fieldset>
	<legend><?php echo __d('users', 'Login') ?></legend>
	<?php
		echo $this->Form->create('User', array(
			'action' => 'login'));
		echo $this->Form->input('email', array(
			'label' => __d('users', 'Email')));
		echo $this->Form->input('passwd',  array(
			'label' => __d('users', 'Password')));
		echo $this->Form->hidden('User.return_to', array('value' => $return_to));
		echo $this->Form->end(__d('users', 'Submit'));
	?>
</fieldset>

<?php echo $this->Html->link(__('Register'), array('plugin' => 'users', 'controller' => 'users', 'action' => 'register'));?>
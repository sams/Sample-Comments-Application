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
<h2><?php __d('users', 'Login') ?></h2>
<fieldset>
	<legend><?php __d('users', 'Login') ?></legend>
	<?php
		echo $form->create('User', array(
			'action' => 'login'));
		echo $form->input('email', array(
			'label' => __d('users', 'Email', true)));
		echo $form->input('passwd',  array(
			'label' => __d('users', 'Password', true)));
		echo $form->hidden('User.return_to', array('value' => $return_to));
		echo $form->end(__d('users', 'Submit', true));
	?>
</fieldset>

<?php echo $html->link(__('Register', true), array('plugin' => 'users', 'controller' => 'users', 'action' => 'register'));?>
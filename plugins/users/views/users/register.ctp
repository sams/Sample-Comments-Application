<h2><?php __d('users', 'Account registration'); ?></h2>
<fieldset>
	<legend><?php __d('users', 'Details');?></legend>
	<?php
		echo $form->create('User', array('url' => array('action'=>'register')));
		echo $form->input('username');
		echo $form->input('email');
		echo $form->input('passwd', array(
					'label' => __d('users', 'Password',true),
					'type' => 'password',
					'error' => __d('users', 'Must be at least 5 characters long', true)));
		echo $form->input('temppassword', array(
					'label' => __d('users', 'Password (confirm)', true),
					'type' => 'password',
					'error' => __d('users', 'Passwords must match', true)
					)
				);
		echo $form->end(__d('users', 'Submit',true));
?>
</fieldset>

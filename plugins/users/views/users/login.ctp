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
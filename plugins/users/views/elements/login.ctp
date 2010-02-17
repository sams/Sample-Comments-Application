<?php
if (!$this->Session->check('Auth.Users')) {
	echo $this->Form->create('User', array(
		'url' => array(
			'admin' => false,
			'plugin' => 'users',
			'controller' => 'users',
			'action' => 'login'),
		'id' => 'LoginForm'));
	echo $this->Form->input('email', array(
		'label' => __('Email', true)));
	echo $this->Form->input('passwd', array(
		'label' => __('Password', true),
		'type' => 'password'));
	echo $this->Form->end(__('Login', true));
}
?>
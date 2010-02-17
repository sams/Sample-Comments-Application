<?php 
	$commentWidget->options(array(
	'allowAnonymousComment' => false,
	'target' => '#comments',
	'ajaxAction' => 'comments'));

	echo $this->element('ajax', array('plugin' => 'comments'));
?>
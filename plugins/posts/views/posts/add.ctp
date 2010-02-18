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
 * @link      http://github.com/CakeDC/Sample-Tags-Application
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="posts form">
<?php echo $this->Form->create('Post', array('id' => 'addPostForm'));?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Post', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
	
<?php 
	// if ($isAjax) {
		// echo $this->Js->submit(__('Submit', true), array('id' => 'addPostLink', 'update' => '#addPost'));
	// } else {
		echo $this->Form->submit(__('Submit', true));
	// }
	echo $this->Form->end();
?>
</div>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Posts', true)), array('action' => 'index'));?></li>
	</ul>
</div>
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
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
<div class="posts view">
	<?php __('Post');?>: <?php echo $post['Post']['name'];?>
</div>

<div id="comments">
	<?php $commentWidget->options(array(
		'allowAnonymousComment' => false,
		'target' => '#comments',
		'ajaxAction' => 'comments'));?>
	<?php echo $commentWidget->display();?>
</div>


<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $post['Post']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $post['Post']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $post['Post']['id'])); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Posts', true)), array('action' => 'index'));?></li>
	</ul>
</div>
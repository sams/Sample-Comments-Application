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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('Test app:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->script('jquery-1.4.packed');
		echo $scripts_for_layout;
	?>
	<script type="text/javascript" charset="utf-8">
		window.basePath = "<?php echo $this->webroot; ?>";
	</script>
</head>
<body>
	<div id="container">
		<div id="content">
			<?php echo $content_for_layout; ?>
			<?php echo $this->Js->writeBuffer(); ?>	
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>


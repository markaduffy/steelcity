<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Steel City Recycling App'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(
			array(
				'stickyfooter',
				'/bootstrap/css/bootstrap.min',
				'style'
			)
		);
		echo $this->Html->script(
			array(
				'jquery-1.8.2.min',
				'init'
			)
		);

		echo $scripts_for_layout;
	?>
</head>
<body>

<div id="wrap">

	<div id="main">

		<div class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>

	</div>

</div>

<div id="footer">
stickyfooter
</div>

</body>
</html>
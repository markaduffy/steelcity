<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset('utf-8'); ?>
	<title>
		<?php __('Steel City Recycling App'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(
			array(
				'cake.generic',
				'stickyfooter',
				'/bootstrap/css/bootstrap.min',
				'style'
			)
		);
		echo $this->Html->script(
			array(
				'jquery-1.8.2.min',
				'googlemap',
				'init'
			)
		);

		echo $scripts_for_layout;
	?>

</head>
<body>

<?php debug('this'); ?>

<div id="wrap">

	<div id="main">

		<div class="container">

			<div class="row">
				<div class="colspan12">
					<h1 class="logo">Redupp Recycle</h1>
				</div>
			</div>



			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>

	</div>

</div>

<div id="footer">
stickyfooter
</div>

<?php echo $this->Js->writeBuffer(); ?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoUlJoPDNIve-vBdO3R8w5q2ML4HdKdAw&sensor=false"></script>

</body>
</html>
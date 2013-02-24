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
				'jquery.autocomplete',
				'style'
			)
		);
		echo $this->Html->script(
			array(
				'jquery-1.8.2.min',
				'/bootstrap/js/bootstrap.min',
				'jquery.autocomplete',
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

			<div class="row">
				<div class="span12">
					<h1 class="logo">Redupp Recycle</h1>
				</div>
			</div>

			<div class="row">
				<div class="span6 search-box">
					<?php echo $form->create('Product', array('url' => '/products/search')); ?>
					<?php echo $form->input('search_product', array('label' => 'I have a...')) ?>
				</div>

				<div class="span6 search-box">
					<?php echo $form->input('search_zip', array('label' => 'I live...')) ?>
					<?php echo $form->end('Search')?>
				</div>
			</div>

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>

	</div>

</div>

<div id="footer" class="footer">
stickyfooter
</div>

<?php echo $this->Js->writeBuffer(); ?>

</body>
</html>
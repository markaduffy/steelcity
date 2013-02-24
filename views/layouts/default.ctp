<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset('utf-8'); ?>
	<title>
		<?php __('Steel City Recycling App'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
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
					<?php echo $form->create('Product', array('url' => '/products/search', 'class' => 'search-form', 'name' => 'theform')); ?>
					<?php echo $form->input('search_product', array('label' => 'I have a...', 'class' => 'search-box-input', 'value' => 'Material/Item', 'id' => 'search-product')) ?>
				</div>

				<div class="span6 search-box-live">
					<?php echo $form->input('search_zip', array('label' => 'I live...', 'class' => 'search-box-live', 'value' => 'Zip Code', 'id' => 'search-zip')) ?>
					<a href="javascript:theform.submit();" class="btn btn-large search-button">Search</a>
					<?php echo $form->end(); ?>
				</div>
			</div>

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>

	</div>

</div>

<div id="footer" class="footer">

	<p>&copy; 2013 GOBIAS INDUSTRIES</p>
	<span class="gobias-logo"></span>

</div>

<?php echo $this->Js->writeBuffer(); ?>

</body>
</html>
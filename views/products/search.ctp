<?php if (empty($products)){ ?>

Could not find anyone that recycles that item.

<?php } else { ?>

<div class="row">
	<div class="span7">

		<?php foreach($products as $key => $value){ ?>

		<div class="row">
			<div class="span7 product-box">

				<h4><?php echo $value['Product']['title']; ?></h4>

				<p><?php echo $value['Product']['description']; ?></p>

				<?php foreach($value['Company'] as $key => $value){ ?>

				<div class="row">
					<div class="span6 company-box">

						<h4><?php echo $value['title']; ?></h4>

						<p><?php echo $value['address']; ?></p>

					</div>
				</div>

				<?php } ?>

			</div>
		</div>

		<?php } ?>

	</div>

	<div class="span5">

		<iframe src="/webroot/map.html?search_product=<?php echo $this->data['Product']['search_product']; ?>&search_zip=<?php echo $this->data['Product']['search_zip'] ?>" width="400px" height="600px"></iframe>

	</div>
</div>

<?php } ?>
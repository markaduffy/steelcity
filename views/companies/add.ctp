<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
		<legend><?php __('Add Company'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('companytype_id');
		echo $this->Form->input('Product');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Companies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Companytypes', true), array('controller' => 'companytypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companytype', true), array('controller' => 'companytypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
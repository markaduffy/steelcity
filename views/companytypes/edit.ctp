<div class="companytypes form">
<?php echo $this->Form->create('Companytype');?>
	<fieldset>
		<legend><?php __('Edit Companytype'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Companytype.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Companytype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companytypes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
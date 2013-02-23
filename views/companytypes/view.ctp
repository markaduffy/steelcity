<div class="companytypes view">
<h2><?php  __('Companytype');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $companytype['Companytype']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $companytype['Companytype']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $companytype['Companytype']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $companytype['Companytype']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $companytype['Companytype']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companytype', true), array('action' => 'edit', $companytype['Companytype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Companytype', true), array('action' => 'delete', $companytype['Companytype']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $companytype['Companytype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companytypes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companytype', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Companies');?></h3>
	<?php if (!empty($companytype['Company'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Companytype Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($companytype['Company'] as $company):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $company['id'];?></td>
			<td><?php echo $company['title'];?></td>
			<td><?php echo $company['description'];?></td>
			<td><?php echo $company['companytype_id'];?></td>
			<td><?php echo $company['created'];?></td>
			<td><?php echo $company['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'companies', 'action' => 'view', $company['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'companies', 'action' => 'edit', $company['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'companies', 'action' => 'delete', $company['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $company['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

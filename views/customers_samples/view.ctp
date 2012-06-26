<div class="customersSamples view">
<h2><?php  __('Customers Sample');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customersSample['CustomersSample']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Customer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($customersSample['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $customersSample['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sample'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($customersSample['Sample']['id'], array('controller' => 'samples', 'action' => 'view', $customersSample['Sample']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customersSample['CustomersSample']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customers Sample', true), array('action' => 'edit', $customersSample['CustomersSample']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Customers Sample', true), array('action' => 'delete', $customersSample['CustomersSample']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customersSample['CustomersSample']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers Samples', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customers Sample', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Samples', true), array('controller' => 'samples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sample', true), array('controller' => 'samples', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="reviews view">
<h2><?php  __('Review');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $review['Review']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Customer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($review['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $review['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($review['Product']['name'], array('controller' => 'products', 'action' => 'view', $review['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Experienced'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $review['Review']['experienced']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $review['Review']['rating']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $review['Review']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review', true), array('action' => 'edit', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Review', true), array('action' => 'delete', $review['Review']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

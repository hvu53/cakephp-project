<div class="products view">
<h2><?php  __('Product');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($product['Company']['name'], array('controller' => 'companies', 'action' => 'view', $product['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Survey'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($product['Survey']['id'], array('controller' => 'surveys', 'action' => 'view', $product['Survey']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['category']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sample Quantity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['sample_quantity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['price']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product', true), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Surveys', true), array('controller' => 'surveys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey', true), array('controller' => 'surveys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders', true), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews', true), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review', true), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Samples', true), array('controller' => 'samples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sample', true), array('controller' => 'samples', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Orders');?></h3>
	<?php if (!empty($product['Order'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Unit Price'); ?></th>
		<th><?php __('Quantity'); ?></th>
		<th><?php __('Shipping'); ?></th>
		<th><?php __('Total Price'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Order'] as $order):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $order['id'];?></td>
			<td><?php echo $order['customer_id'];?></td>
			<td><?php echo $order['product_id'];?></td>
			<td><?php echo $order['unit_price'];?></td>
			<td><?php echo $order['quantity'];?></td>
			<td><?php echo $order['shipping'];?></td>
			<td><?php echo $order['total_price'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'orders', 'action' => 'delete', $order['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Reviews');?></h3>
	<?php if (!empty($product['Review'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Experienced'); ?></th>
		<th><?php __('Rating'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Review'] as $review):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $review['id'];?></td>
			<td><?php echo $review['customer_id'];?></td>
			<td><?php echo $review['product_id'];?></td>
			<td><?php echo $review['experienced'];?></td>
			<td><?php echo $review['rating'];?></td>
			<td><?php echo $review['comment'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'reviews', 'action' => 'view', $review['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'reviews', 'action' => 'edit', $review['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'reviews', 'action' => 'delete', $review['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $review['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Review', true), array('controller' => 'reviews', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Samples');?></h3>
	<?php if (!empty($product['Sample'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Sample'] as $sample):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sample['id'];?></td>
			<td><?php echo $sample['customer_id'];?></td>
			<td><?php echo $sample['product_id'];?></td>
			<td><?php echo $sample['status'];?></td>
			<td><?php echo $sample['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'samples', 'action' => 'view', $sample['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'samples', 'action' => 'edit', $sample['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'samples', 'action' => 'delete', $sample['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sample['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sample', true), array('controller' => 'samples', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

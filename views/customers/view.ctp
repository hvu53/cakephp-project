<div class="customers view">
<h2><?php  __('Customer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['points']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zipcode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['zipcode']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer', true), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Customer', true), array('action' => 'delete', $customer['Customer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders', true), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews', true), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review', true), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Samples', true), array('controller' => 'samples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sample', true), array('controller' => 'samples', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Searches', true), array('controller' => 'searches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Search', true), array('controller' => 'searches', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Orders');?></h3>
	<?php if (!empty($customer['Order'])):?>
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
		foreach ($customer['Order'] as $order):
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
	<?php if (!empty($customer['Review'])):?>
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
		foreach ($customer['Review'] as $review):
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
	<?php if (!empty($customer['Sample'])):?>
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
		foreach ($customer['Sample'] as $sample):
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
<div class="related">
	<h3><?php __('Related Searches');?></h3>
	<?php if (!empty($customer['Search'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Keywords'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Search Options'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customer['Search'] as $search):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $search['id'];?></td>
			<td><?php echo $search['customer_id'];?></td>
			<td><?php echo $search['keywords'];?></td>
			<td><?php echo $search['created'];?></td>
			<td><?php echo $search['search_options'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'searches', 'action' => 'view', $search['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'searches', 'action' => 'edit', $search['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'searches', 'action' => 'delete', $search['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $search['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Search', true), array('controller' => 'searches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

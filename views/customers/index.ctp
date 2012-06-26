<div class="customers index">
	<h2><?php __('Customers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('points');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('zipcode');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($customers as $customer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $customer['Customer']['id']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['first_name']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['last_name']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['email']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['password']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['points']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['phone']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['address']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['city']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['state']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['zipcode']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $customer['Customer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Customer', true), array('action' => 'add')); ?></li>
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
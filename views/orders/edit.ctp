<div class="orders form">
<?php echo $this->Form->create('Order');?>
	<fieldset>
 		<legend><?php __('Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('unit_price');
		echo $this->Form->input('quantity');
		echo $this->Form->input('shipping');
		echo $this->Form->input('total_price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Order.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Order.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orders', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
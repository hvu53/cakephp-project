<div class="samples form">
<?php echo $this->Form->create('Sample');?>
	<fieldset>
 		<legend><?php __('Edit Sample'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Sample.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Sample.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Samples', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
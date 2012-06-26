<div class="customersSamples form">
<?php echo $this->Form->create('CustomersSample');?>
	<fieldset>
		<legend><?php __('Edit Customers Sample'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('sample_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CustomersSample.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CustomersSample.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers Samples', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Samples', true), array('controller' => 'samples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sample', true), array('controller' => 'samples', 'action' => 'add')); ?> </li>
	</ul>
</div>
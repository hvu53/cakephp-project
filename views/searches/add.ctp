<div class="searches form">
<?php echo $this->Form->create('Search');?>
	<fieldset>
 		<legend><?php __('Add Search'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('keywords');
		echo $this->Form->input('search_options');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Searches', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="customers form">
<?php echo $this->Form->create('Customer');?>
	<fieldset>
 		<legend><?php __('Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('points');
		echo $this->Form->input('phone');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zipcode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Customer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Customer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('action' => 'index'));?></li>
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
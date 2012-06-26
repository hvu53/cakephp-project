<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
 		<legend><?php __('Add Company'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Companies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Surveys', true), array('controller' => 'surveys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey', true), array('controller' => 'surveys', 'action' => 'add')); ?> </li>
	</ul>
</div>
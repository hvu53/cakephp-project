<div class="surveys form">
<?php echo $this->Form->create('Survey');?>
	<fieldset>
 		<legend><?php __('Edit Survey'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('questions');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Survey.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Survey.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Surveys', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
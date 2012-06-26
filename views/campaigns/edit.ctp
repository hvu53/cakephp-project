<div class="campaigns form">
<?php echo $this->Form->create('Campaign');?>
	<fieldset>
		<legend><?php __('Edit Campaign'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('picture');
		echo $this->Form->input('company_id');
		echo $this->Form->input('description');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Campaign.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Campaign.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Campaigns', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
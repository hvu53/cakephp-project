<div class="answers form">
<?php echo $this->Form->create('Answer');?>
	<fieldset>
		<legend><?php __('Edit Answer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('survey_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Answer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Answer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Surveys', true), array('controller' => 'surveys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey', true), array('controller' => 'surveys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
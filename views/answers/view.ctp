<div class="answers view">
<h2><?php  __('Answer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $answer['Answer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Survey'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($answer['Survey']['id'], array('controller' => 'surveys', 'action' => 'view', $answer['Survey']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($answer['User']['id'], array('controller' => 'users', 'action' => 'view', $answer['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $answer['Answer']['data']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Answer', true), array('action' => 'edit', $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Answer', true), array('action' => 'delete', $answer['Answer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Surveys', true), array('controller' => 'surveys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey', true), array('controller' => 'surveys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

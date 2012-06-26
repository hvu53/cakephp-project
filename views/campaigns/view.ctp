<div class="campaigns view">
<h2><?php  __('Campaign');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campaign['Campaign']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campaign['Campaign']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Picture'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campaign['Campaign']['picture']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($campaign['Company']['name'], array('controller' => 'companies', 'action' => 'view', $campaign['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campaign['Campaign']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campaign['Campaign']['start_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campaign['Campaign']['end_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campaign['Campaign']['status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campaign', true), array('action' => 'edit', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Campaign', true), array('action' => 'delete', $campaign['Campaign']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>

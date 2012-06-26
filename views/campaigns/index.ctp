<div class="campaigns index">
	<h2><?php __('Campaigns');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('picture');?></th>
			<th><?php echo $this->Paginator->sort('company_id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('start_date');?></th>
			<th><?php echo $this->Paginator->sort('end_date');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($campaigns as $campaign):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $campaign['Campaign']['id']; ?>&nbsp;</td>
		<td><?php echo $campaign['Campaign']['name']; ?>&nbsp;</td>
		<td><?php echo $campaign['Campaign']['picture']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($campaign['Company']['name'], array('controller' => 'companies', 'action' => 'view', $campaign['Company']['id'])); ?>
		</td>
		<td><?php echo $campaign['Campaign']['description']; ?>&nbsp;</td>
		<td><?php echo $campaign['Campaign']['start_date']; ?>&nbsp;</td>
		<td><?php echo $campaign['Campaign']['end_date']; ?>&nbsp;</td>
		<td><?php echo $campaign['Campaign']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $campaign['Campaign']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $campaign['Campaign']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $campaign['Campaign']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $campaign['Campaign']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Campaign', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
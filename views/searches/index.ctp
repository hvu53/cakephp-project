<div class="searches index">
	<h2><?php __('Searches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('customer_id');?></th>
			<th><?php echo $this->Paginator->sort('keywords');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('search_options');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($searches as $search):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $search['Search']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($search['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $search['Customer']['id'])); ?>
		</td>
		<td><?php echo $search['Search']['keywords']; ?>&nbsp;</td>
		<td><?php echo $search['Search']['created']; ?>&nbsp;</td>
		<td><?php echo $search['Search']['search_options']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $search['Search']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $search['Search']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $search['Search']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $search['Search']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Search', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
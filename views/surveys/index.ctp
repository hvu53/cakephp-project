<div class="surveys index">
	<h2><?php __('Surveys');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('company_id');?></th>
			<th><?php echo $this->Paginator->sort('questions');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($surveys as $survey):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $survey['Survey']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($survey['Company']['name'], array('controller' => 'companies', 'action' => 'view', $survey['Company']['id'])); ?>
		</td>
		<td><?php echo $survey['Survey']['questions']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $survey['Survey']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $survey['Survey']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $survey['Survey']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $survey['Survey']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Survey', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
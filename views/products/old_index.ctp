<div class="products index">
	<h2><?php __('Products');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('company_id');?></th>
			<th><?php echo $this->Paginator->sort('survey_id');?></th>
			<th><?php echo $this->Paginator->sort('category');?></th>
			<th><?php echo $this->Paginator->sort('sample_quantity');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($products as $product):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $product['Product']['id']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Company']['name'], array('controller' => 'companies', 'action' => 'view', $product['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['Survey']['id'], array('controller' => 'surveys', 'action' => 'view', $product['Survey']['id'])); ?>
		</td>
		<td><?php echo $product['Product']['category']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['sample_quantity']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['price']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Surveys', true), array('controller' => 'surveys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey', true), array('controller' => 'surveys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders', true), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews', true), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review', true), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Samples', true), array('controller' => 'samples', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sample', true), array('controller' => 'samples', 'action' => 'add')); ?> </li>
	</ul>
</div>
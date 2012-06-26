<div class="main-container col2-left-layout">
	<div class="box clear-float">
		<div class="box col-main">
			<div class="page-title">
				<h3>Product list</h3>
			</div>

			<div class="padded">
				<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Name</th>
			<th>Sample Quantity</th>
			<th>Points</th>
			<th>Actions</th>
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
		<td><?php echo $product['Product']['name']; ?>&nbsp;</td>
		<td><?php echo $product['Sample']['quantity']; ?>&nbsp;</td>
		<td><?php echo $product['Sample']['point']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

			</div>

		</div>
		<div class="col-left box">

			<div class="page-title">
				<h3>Products</h3>
			</div>
			<div class="padded">
				<ul>
					<li class="current">All products</li>
					<li><?php echo $this->Html->link('New Product', array('action' => 'add')); ?></li>
					
				</ul>
			</div>

		</div>
	</div>

</div>
<style type="text/css">
	.padded li a{
		border-bottom: 1px solid #DDDDDD;
		color: #5F5D5C;
    display: block;
    padding: 3px 0;
    text-decoration: none !important;
    }
.padded li a:hover {
    color: #EA7900;
}
.padded li.current {
    border-bottom: 1px solid #DDDDDD;
    color: #EA7900;
    padding: 3px 0;
}
</style>
<script type="text/javascript">
	$(function(){
	});
</script>
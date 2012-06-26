<div class="main-container col2-left-layout">
	<div class="box clear-float">
		<div class="box col-main">
			<div class="page-title">
				<h3>Product list</h3>
			</div>

			<div class="products form padded">
				<?php echo $this->Form->create('Product', array('enctype'=> 'multipart/form-data'));?>
	<fieldset>
 		<legend><?php __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Html->image('products/'.$this->data['Product']['id'].'/'.$this->data['Product']['picture'],array('width'=>100));
		echo $this->Form->input('picture', array('type'=>'file'));
		echo $this->Form->input('url');
		echo $this->Form->input('Sample.id');
		echo $this->Form->input('Sample.quantity',array('label'=>'Sample Quantity'));
		echo $this->Form->input('Sample.point',array('label'=>'Sample Point'));
		
		echo $this->Form->input('company_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('price');
		echo $this->Form->input('overview');
		echo $this->Form->input('details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>

			</div>

		</div>
		<div class="col-left box">

			<div class="page-title">
				<h3>Products</h3>
			</div>
			<div class="padded">
				<ul>
					<li><?php echo $this->Html->link('All products', array('action' => 'index')); ?></li>
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
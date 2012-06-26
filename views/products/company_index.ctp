		<div class="main-container col2-left-layout">
			<?php $categories = array('cellphone'=>'cellphone','drink'=>'drink','cosmetics'=>'cosmetics','fragrance'=>'fragrance');?>
			<div class="box clear-float">
					<div class="box col-main">
								<div class="page-title">
									<h3>Manage your Products</h3>
								</div>
									
								<div class="padded">
									<table>
										<tr>
											<th>Product</th>
											<th>Category</th>
											<th>Product Quantity</th>
											<th>Unit Price</th>
											<th>Details</th>
										</tr>
										<?php foreach($products as $product){
											echo '<tr><td>'.$this->Html->image('products/' . $product['Product']['id'] . '/' . $product['Product']['picture'], array('height'=>'80', 'width'=>'80'));
											echo '<br /><div class="editable">'.$product['Product']['name'].'</div></td><td>';
											echo $this->Form->select('sks',$categories,$product['Product']['category'],array('empty'=>false));
											echo '</td><td><div class="editable">'.$product['Product']['quantity'].'</div>';
											echo '</td><td><div class="editable">'.$product['Product']['price'].'</div>';
											echo '</td><td><button>Edit details</button>';
											echo '</td></tr>';
										}?>
									</table>
								</div>
						
					</div>
					<div class="col-left box">
					
							<div class="page-title">
									<h3> My Account</h3>
							</div>
							<div class="padded">
								<ul>
									<li><?php echo $this->Html->link('Profile',array('controller'=>'users','action'=>'index'));?></li>
									<li class="current">Products</li>
									<li><?php echo $this->Html->link('Campaigns',array('controller'=>'campaigns','action'=>'index'));?></li>
									<li><?php echo $this->Html->link('Surveys',array('controller'=>'surveys','action'=>'index'));?></li>
									
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
#company_description{
	margin-left: 200px;
}
</style>
<?php echo $this->Html->script('jquery.jeditable.min');?>
<script type="text/javascript">
	$(function(){
		$('.editable').editable(function(value, settings){return(value);}, {
         indicator : 'Saving...',
         tooltip   : 'Click to edit...'
     });
	});
</script>
		<div class="main-container col2-right-layout">
			<div class="box clear-float">
				<div class="box col-main">
					<div class="page-title">
						<h3>Your Cart</h3>
					</div>
					<div class="padded">
						<?php 
							if(empty($samples) && empty($products)) echo 'Your cart is empty';
							else{
								echo $this->Form->create();
								?>
						<table>
							<tr>
								<th>Item</th>
								<th>Quantity</th>
								<th>Total Price</th>
								<th></th>
							</tr>
							<?php 
							$price = 0;
							   foreach($samples as $sample){
									echo '<tr><td><input type="hidden" name="data[Samples]['.$sample['Product']['id'].']" value="">';
									echo $this->Html->link($this->Html->image(
										'products/' . $sample['Product']['id'] . 
										'/' . $sample['Product']['picture'], array('width' => '100px')
										).' '.$sample['Product']['name'],
										array('controller'=>'products','action'=>'view',$sample['Product']['id']),
										array('escape'=>false));
									echo '</td><td>1';
									echo '</td><td><span class="price">'.$sample['Sample']['point'].'</span> points';
									echo '</td><td><button>Remove</button></td></tr>';
									$price += $sample['Sample']['point'];
								}
								foreach($products as $product){
									echo '<tr><td>';
									echo $this->Html->image(
										'products/' . $product['Product']['id'] . 
										'/' . $product['Product']['picture'], array('class' => 'f-left', 'width' => '100px')
										);
									$quantity = $this->Session->read('Cart.Products.'.$product['Product']['id']);
									echo '</td><td>'.$quantity.'</td><td><span class="price">'.($quantity*$product['Product']['price']).'</span> points';
									echo '</td><td><button>Remove<button>';
									echo '</td></tr>';
									$price += $quantity*$product['Product']['price'];
								}
							
							?>
							<tr>
								<th>TOTAL</th>
								<th></th>
								<th id="total_price"><?php echo $price;?> points</th>
								<th></th>
							</tr>
							<tr>
								<th>Your points after</th>
								<th></th>
								<th id="point_left"><?php echo $this->Session->read('Customer.point')-$price;?> points</th>
								<th></th>
							</tr>
						</table>
						<div class="submit f-right">
							<input type="submit" name="update" value="Update cart" />
							<input type="submit" name="send" value="Send them to me!!" /> 
						</div>
						<?php echo $this->Form->end();
						}?>
					</div>

				</div>
					<div class="col-right box">
					
							<div class="page-title">
									<h3>Checkout Process</h3>
							</div>
							<div class="padded">
								<ul>
									<li class="current">Step 1</li>
									<li class="current">Step 2</li>
									<li class="current">Step 3</li>
									<li class="current">Step 4</li>
									
								</ul>
							</div>
						
					</div>
				
			</div>
			
			
		</div>
<style type="text/css">

</style>
<script type="text/javascript">
	$(function() {

		$('#CustomerCustomerCartForm button').click(function(){
			$(this).parent().parent().remove();
			total = 0;
			$('.price').each(function(){
				total += parseInt($(this).html());
			});
			$('#total_price').html(total+' points');
			$('#point_left').html((<?php echo $this->Session->read('Customer.point');?>-total)+' points');
		});
	});
</script>
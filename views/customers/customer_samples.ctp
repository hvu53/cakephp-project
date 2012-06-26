<?php $statuses = array(0=>'Pending',1=>'Ordered',2=>'Out of order. Sorry:('); ?>
<div class="main-container col2-right-layout">
			<div class="box clear-float">
				<div class="box col-main">
					<div class="page-title">
						<h3>Your Orders</h3>
					</div>
					<div class="padded">
						<?php 
							if(empty($samples)) echo 'You haven\'t made any orders yet.';
							else{
								?>
						<table>
							<tr>
								<th>Sample</th>
								<th>Points</th>
								<th>Status</th>
								<th>Order Date</th>
							</tr>
							<?php 
							$price = 0;
							   foreach($samples as $sample){
									echo '<tr><td>';
									echo $this->Html->link($this->Html->image(
										'products/' . $sample['Sample']['Product']['id'] . 
										'/' . $sample['Sample']['Product']['picture'], array('width' => '100px')
										).' '.$sample['Sample']['Product']['name'],
										array('controller'=>'products','action'=>'view',$sample['Sample']['Product']['id']),
										array('escape'=>false));
									echo '</td><td>'.$sample['Sample']['point'];
									echo '</td><td>'.$statuses[$sample['CustomersSample']['status']];
									echo '</td><td>'.date('Y-M-d',  strtotime($sample['CustomersSample']['created'])).'</td></tr>';
								}
							
							?>
						</table>
						<?php }?>
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

	});
</script>
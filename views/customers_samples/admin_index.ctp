<?php 
$states = array('AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY');
$races = array('White','African American','American Indian and Alaska Native','Asian','Latino');
$sexes = array('female','male');
$statuses = array(0=>'Pending',1=>'Ordered',2=>'Out of order. Sorry:(');
$privacy_options = array('Spy Mode: use only my name and address to sign up for the samples', 
	'Relaxed: I want to receive other promotional emails for the samples I sign up.');

?>
<div class="main-container col2-left-layout">
	<div class="box clear-float">
		<div class="box col-main">
			<div class="page-title">
				<h3>Orders</h3>
			</div>

			<div class="products form padded">
				<table>
					<tr>
						<th>Sample</th><th>Customer</th><th>Status</th>
					</tr>
				
				<?php 
				foreach($customersSamples as $row){
					echo '<tr><td>';
					echo '<a href="'.$row['Sample']['Product']['url'].'" target="_blank">'.$row['Sample']['Product']['name'].'</a>';
					echo '</td><td>';
					echo $row['Customer']['first_name'].' '.$row['Customer']['last_name'];
					echo '<br />'.$row['Customer']['User']['username'].'<br />'.$row['Customer']['User']['phone'];
					echo '<br />'.$races[$row['Customer']['race']].' '.$sexes[$row['Customer']['sex']];
					echo '<br />'.$row['Customer']['User']['address'].'<br />';
					echo $row['Customer']['User']['city'].', '.$states[$row['Customer']['User']['state']];
					echo ' '.$row['Customer']['User']['zipcode'];
					echo '<br />'.$privacy_options[$row['Customer']['privacy']];
					echo '</td><td>';
					
					echo $this->Form->create('CustomersSample',array('url'=>'/admin/customers_samples'));
					echo $this->Form->input('id',array('value'=>$row['CustomersSample']['id']));
					echo $this->Form->input('status',array('options'=>$statuses,'value'=>$row['CustomersSample']['status']));
					 echo $this->Form->end('Update');
					 
					echo '</td></tr>';
				}
				?>
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

		</div>
		<div class="col-left box">

			<div class="page-title">
				<h3>Orders</h3>
			</div>
			<div class="padded">
				<ul>
					<li><?php echo $this->Html->link('All Orders', array()); ?></li>
					<li><?php echo $this->Html->link('Pending Orders', array('0')); ?></li>
					<li><?php echo $this->Html->link('Finished Orders', array('1')); ?></li>
					<li><?php echo $this->Html->link('Cancelled Orders', array('2')); ?></li>
					
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
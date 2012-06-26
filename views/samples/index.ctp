<div class="main-container col2-right-layout">
	<div class="clear-float">
		<div class="col-main">

			<div class="col3-set clear-float">
				<?php
				foreach ($samples as $sample):
					?>
					<div class="box col" style="position: relative;">
						<div class="padded" style="text-align: center;">
							<?php
							echo $this->Html->image(
								'products/' . $sample['Product']['id'] . '/' . $sample['Product']['picture'], array('style' => 'max-width: 100%; height:100px;display: block;margin: 5px auto 10px;')
							);
							//echo '<h3>'.$sample['Product']['name'].'</h3><span style="color:#BBBBBB;font-style:italic;">from '. $sample['Product']['category'].'</span><br /><br />';
							echo $this->Html->link($this->Html->image('pricetag.png'), '#', array('escape' => false));
							?>
							<div style="position:absolute;left:42px;top:145px;color:#eaebea;font-size: 12px;width: 40px;">$<?php echo $sample['Product']['price']; ?></div>
							<div style="position:absolute;left:85px;top:130px;color:#eaebea;font-size: 15px;width: 150px;"><?php echo $sample['Product']['name']; ?></div>
							<div style="position:absolute;left:105px;top:153px;color:#BBBBBB;font-size: 11px;font-style:italic;width: 110px;">
								<?php echo 'from ' . $sample['Product']['category']; ?>
							</div>
						</div>

					</div>
				<?php endforeach; ?>
			</div>
			<p>
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
				));
				?>	</p>

			<div class="paging">
				<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'disabled')); ?>
	 | 	<?php echo $this->Paginator->numbers(); ?>
		|
				<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')); ?>
			</div>
		</div>
		<div class="box col-right sidebar">
			<div class="page-title">
				<h3>Search</h3>
			</div>
			<div class="padded">
				<?php
				echo $this->Form->create('Sample', array('default'=>false,'inputDefaults' => array('after' => '<hr />')));
				echo $this->Form->input('type', array('options' => array('ssfsf', 'sdssf', 'sdfsf')));
				echo $this->Form->input('branch', array('options' => array('ssfsf', 'sdssf', 'sdfsf')));
				echo $this->Form->input('scale', array('options' => array('ssfsf', 'sdssf', 'sdfsf')));
				echo $this->Form->input('mood', array('options' => array('ssfsf', 'sdssf', 'sdfsf')));
				echo $this->Form->input('keyword');
				echo $this->Form->end('Search');
				?>
			</div>
		</div>
	</div>

</div>
<style type="text/css">
	input[type=text],select{
		margin-bottom: 20px;
		width: 160px;
		height: 25px;
	}
	hr {
		border: none;
		width: 90%;
		color: #7C7C7C;
		background-color: #CCCCCC;
		height: 1px;
	}
</style>
<?php
echo $this->Html->css('jquery.jgrowl');
echo $this->Html->script('jquery.jgrowl.min');
?>
<script type="text/javascript">
	$(function(){
		$('.add-to-cart').click(function(e){
			//$('#mini-cart').animate({opacity: 'show','top':'10px'});
			$('.add-to-cart').hide();
<?php if ($this->Session->read('Auth.User')) { ?>
				$.post(
				'<?php echo $this->Html->url(array('controller' => 'customers', 'action' => 'choosesample')); ?>',
				{'data[id]':<?php echo $product['Sample']['id'] ?>}, 
				function(data) {
					$.jGrowl('Your sample has been added to cart.',{position:'top-right'});
					$('#shoppingcart').replaceWith(data);
				},
				'html'
			);
<?php } else { ?>
				$.jGrowl('<br />Hey, if you like it, <?php echo $this->Html->link('sign up', array('controller' => 'users', 'action' => 'signup')); ?> or <?php echo $this->Html->link('sign in', array('controller' => 'users', 'action' => 'login')); ?> to get this sample for free!',{position:'center',sticky:true});
<?php } ?>
				
		});
	});
</script>
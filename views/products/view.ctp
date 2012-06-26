<div class="main-container col2-right-layout">
	<div class="box clear-float">
		<div class="box col-main">
			<div class="page-title">
				<h3><?php echo $product['Product']['name']; ?></h3>
			</div>
			<div class="product-view">
				<div class="clear-float">
					<?php
					echo $this->Html->image(
						'products/' . $product['Product']['id'] . '/' . $product['Product']['picture'], array('class' => 'f-left', 'style' => 'width: 265px;margin-right: 10px;')
					);
					?>
					<p><?php 
					echo '<h3>Points: '.$product['Sample']['point'].'</h3>';
					if(isset($product['Sample']['CustomersSample']['0']['id']))echo '<h4>You have already taken this sample.</h4>';
					else if($product['Sample']['quantity']==0)echo 'Sorry, we ran out of this sample :(';
					else echo '<a class="button-box add-to-cart">Take the sample</a>';
					echo '<br /><br />'.$this->Html->link('Company: '.$product['Company']['name'],array('controller'=>'companies','action'=>'view',$product['Company']['id']));
					?>
					</p>
					<?php echo $this->Html->link($this->Html->image('facebook.png', array('alt' => 'Facebook')), '#', array('escape' => false)); ?>
					<?php echo $this->Html->link($this->Html->image('twitter.png', array('alt' => 'Twitter')), '#', array('escape' => false)); ?>
					<p> Share with your friend</p>

					<div class="padded">
						<h3> Quick Overview</h3>
						<div><?php echo $product['Product']['overview']; ?></div>
					</div>
					
				</div>
				<div class="padded">
						<h3> Details</h3>
<?php echo $product['Product']['details']; ?>
					</div>
			</div>
		</div>
		<div class="box col-right sidebar">
			<div class="page-title">
					<h3>New Samples</h3>
				</div>
			<ul class="items clear-float">
				<?php
				echo $this->element('minicart-items', array('products' => $randproducts,'wishlist'=>true));
				?>
			</ul>
		</div>
	</div>
</div>
<style type="text/css">
	div.padded h3 {
		border-bottom: 1px solid #E5DCC3;
	}
	.sidebar li {
		margin: 10px;
	}
	a{
		color: #aa6699;
	}
</style>
<?php
echo $this->Html->css('jquery.jgrowl');
echo $this->Html->script('jquery.jgrowl.min');
?>
<script type="text/javascript">
	$(function(){
	<?php if(false){?>
			
			$.jGrowl('<a href="http://xamples.info/customer/answers/take/1">Hey, how\'s the Hugo BOSS sample?</a>',{position:'top-right',sticky:true});
		
		<?php }?>
		$('.add-to-cart').click(function(e){
			//$('#mini-cart').animate({opacity: 'show','top':'10px'});
			$('.add-to-cart').hide();
			<?php if($this->Session->read('Auth.User')){?>
			$.post(
				'<?php  echo $this->Html->url(array('controller'=>'customers','action'=>'choosesample'));?>',
				{'data[id]':<?php echo $product['Sample']['id']?>}, 
				function(data) {
					$.jGrowl('Your sample has been added to cart.',{position:'top-right'});
					$('#shoppingcart').replaceWith(data);
				},
				'html'
			);
			
			<?php }else{?>
				$.jGrowl('<br />Hey, if you like it, <?php echo $this->Html->link('sign up',array('controller'=>'users','action'=>'signup'));?> or <?php echo $this->Html->link('sign in',array('controller'=>'users','action'=>'login'));?> to get this sample for free!',{position:'center',sticky:true});
			<?php }?>
				
		});
	});
</script>
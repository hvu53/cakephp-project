<div class="main-container col1-layout">
	<div class="box col-main">
		
		<div class="padded clear-float">

			<?php
			echo $this->Html->image(
				'companies/' . $company['Company']['id'] . '/' . $company['Company']['picture'], array('class' => 'f-left', 'width' => '265px')
			);
			?>
			
			<div class="padded">
				<div><?php echo $company['Company']['overview']; ?></div><br />
				<?php echo $this->Html->link($this->Html->image('facebook.png', array('alt' => 'Facebook')), '#', array('escape' => false)); ?>
			  <?php echo $this->Html->link($this->Html->image('twitter.png', array('alt' => 'Twitter')), '#', array('escape' => false)); ?>
			</div>
			<div class="padded" style="clear:left;">
				<div><?php echo $company['Company']['description']; ?></div>
				
				<h3>Our latest products</h3>
				<?php foreach($company['Product'] as $product){?>
				<div style="float:left;width:160px;margin-right: 30px;">
					<?php
					echo $this->Html->image(
							'products/' . $product['id'] . '/' . $product['picture'], array('class' => '', 'style'=>'max-width:100px;margin:10px;')
						).'<br />';
					echo $this->Text->truncate($product['overview'], 200, array(
						'ending' => '...',
						'exact' => true,
						'html' => true));
					
					echo $this->Html->link('Read more', array('controller'=>'products','action'=>'view',$product['id']));
					
					?>
					
				</div>
				<?php }?>
			</div>

		</div>
	</div>
</div>
<style type="text/css">
	div.padded h3 {
		border-bottom: 1px solid #E5DCC3;
		margin-top: 15px;
	}
	.sidebar li {
		margin: 10px;
	}
	a{
		color: #aa6699;
	}
</style>
<?php
//echo $this->Html->css('jquery.jgrowl');
//echo $this->Html->script('jquery.jgrowl.min');
?>
<script type="text/javascript">
	$(function(){
		
	});
</script>
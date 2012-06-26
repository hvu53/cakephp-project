<div class="main-container col3-layout">			
	<div class="box clear-float" id="mainpagezigzag">
		<div class="padded">
			<div  id="howitworksbanner"><div id="videoholder"></div></div>
			<div class="padded">
				<div style="float:left;line-height: 180%;width:207px;height:202px;background-color: #E8F6FF;position:relative;padding: 5px;">
					<?php echo $this->Html->image('new.png', array('style' => 'position:absolute;right:-20px;top:10px;')); ?>
					<h4>Garnor Fructis Shampoo</h4>
						43% Xamplers got it<br />
					<?php
					echo $this->Html->link('Read our review >>>>', '#');
					echo $this->Html->image('garnier.jpg', array('width' => '120', 'height' => '120', 'style' => 'margin: 5px 0;float:left;'));
					?>
					<div style="margin: 65px 5px 0 130px;text-align: right;color:#BBBBBB;font-weight: normal;">offer ends 12/2011</div>
					<?php
					echo $this->Html->link('Share', '#', array('style' => 'margin-left: 40px;'));
					echo $this->Html->image('grab.png', array('style' => 'position:absolute;left:-10px;bottom:3px;'));
					?>
				</div>
				<div style="float:left;margin-left: 30px;">
					<div style="height:40px;">
						<?php if(Configure::read('debug')<2){?>
							<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=177888798938786&amp;xfbml=1"></script><fb:like href="http://www.xamples.com/" send="false" width="240" show_faces="false" font=""></fb:like>
							
							<g:plusone></g:plusone><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
							<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a>
							<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
						<?php }?>
					</div>
					<?php
					echo $this->Html->link(
						$this->Html->image('weblog.png'), 'http://blog.xamples.com', array('escape' => false)
					);
					?>
				</div>
				<div style="margin: 10px;">
					<?php
					echo $this->Html->link(
						$this->Html->image('joinnow.png'), array('controller' => 'users', 'action' => 'signup'), array('escape' => false, 'style' => 'position:absolute;right:-17px;margin-top:-10px;')
					);

					echo $this->Html->link(
						$this->Html->image('fbbig.png'), 'http://www.facebook.com/pages/Xamples/140885389319970', array('escape' => false, 'style' => 'position:absolute;right:177px;;margin-top:43px;')
					);

					echo $this->Html->link(
						$this->Html->image('we-reward.png'), '#', array('escape' => false, 'style' => 'position:absolute;right:7px;margin-top:43px;')
					);
					?>
				</div>

			</div>
		</div>
		<div class="col-wrapper">
			<div class="box col-main">
				<div class="page-title">
					<h3> New Samples </h3>
				</div>
				<ul class="products-grid">
					<?php foreach ($randproducts as $randproduct) { ?>
						<li class="item"> 
							<p class="product-image">
								<?php
								echo $this->Html->link(
									$this->Html->image('products/' . $randproduct['Product']['id'] . '/' . $randproduct['Product']['picture']), array('action' => 'preview', $randproduct['Product']['id']), array('escape' => false)
								);
								?>
							</p>
							<?php
							echo $this->Html->link(
								$randproduct['Product']['name'], array('action' => 'view', $randproduct['Product']['id']), array('class' => 'product-name')
							);
							?>
							<div class="pricebox"><?php echo $randproduct['Product']['price'] == 0 ? 'Free' : '$' . $randproduct['Product']['price'] ?></div>
							<!--<a class="button-box" href="#">Get me now</a>-->
						</li>
					<?php } ?>


				</ul>
			</div>
			<div class="col-left sidebar">
				<div class="box">
					<div class="page-title"> 
						<h3>Today's Sample</h3>
					</div>
					<?php /* echo $this->Html->link(
					  $this->Html->image('today.png', array('alt'=> 'Today\'s sample')),
					  '#', array('escape' => false)
					  ); */ ?>
					<p>Coming soon</p>

				</div>
				<?php /* echo $this->Html->link(
				  $this->Html->image('feed.png', array('alt'=> 'Earn rewards by giving feedbacks and doing surveys')),
				  '#', array('escape' => false)
				  ); */ ?>
			</div>
		</div>
		<div class="col-right sidebar">
			<div class="box">
				<div class="page-title"> 
					<h3>Xamples' Blog</h3>
				</div>
				<p>Coming soon</p>
			</div>


			<?php /* echo $this->Html->link(
			  $this->Html->image('rewards.png', array('alt'=> 'Refer Xamples to your friends and earn rewards')),
			  '#', array('escape' => false)
			  ); */ ?>

			<div class="separate"> 
				<?php /* echo $this->Html->link(
				  $this->Html->image('sign-up-back.png', array('alt'=> 'Xamples sign up')),
				  '#', array('escape' => false)
				  ); */ ?>

			</div>
		</div>
		
	</div>
	<div id="mainpagezigzagimg"></div>
	
	<div class="padded clear-float">
			<div class="padded">
				
				<div style="float:left;text-align: left;">
					<div class="clear-float">
					<h3>Request a sample</h3>
					<?php
					echo $this->Form->create('Request',array('default'=>false,'inputDefaults'=>array('label'=>false)));
					echo $this->Form->input('email',array('placeholder'=>'email'));
					echo $this->Form->input('sample',array('placeholder'=>'product name'));
					echo $this->Form->end('GO!');
					?>
					</div>
					<?php echo $this->Html->image('hr.png');?><br />
					<div class="clear-float">
					<h3>Join our mailing list</h3>
					<?php
					echo $this->Form->create('Mail',array('default'=>false,'inputDefaults'=>array('label'=>false)));
					echo $this->Form->input('name',array('placeholder'=>'name'));
					echo $this->Form->input('email',array('placeholder'=>'email'));
					echo $this->Form->end('GO!');
					?>
					</div>
				</div>
				<div style="float:right;">
					
					<div id="followbox">
						<h3>Let's keep in touch</h3>
					<ul>
						<li><?php echo $this->Html->link($this->Html->image('facebook.png'),'http://www.facebook.com/pages/Xamples/140885389319970',array('escape'=>false));?></li>
						<li><?php echo $this->Html->link($this->Html->image('twitter.png'),'http://twitter.com/#!/xamples11',array('escape'=>false));?></li>
						<li><?php echo $this->Html->link($this->Html->image('youtube.png'),'http://www.youtube.com/user/XamplesCorp',array('escape'=>false));?></li>
						<li><?php echo $this->Html->link($this->Html->image('rss.png'),'#',array('escape'=>false));?></li>
					</ul>
					</div>
					<?php //echo $this->Html->image('footerlogo.png',array('style'=>'float:right;'));?>
				</div>
				
			</div>
		</div>
</div>
<style type="text/css">
	#followbox {
		clear:right;
		float:right;
		text-align:left;
		/*padding: 10px;
		margin: 10px 0px;*/
		
		-moz-border-radius: 8px 8px 8px 8px;
		-webkit-border-radius: 8px 8px 8px 8px;
		border-radius: 8px 8px 8px 8px;
		
		/*gradient transparency
		background-image: -moz-linear-gradient(rgba(220, 220, 220, 0.5) 0%, rgba(220, 220, 220, 1) 100%);
		background-image: -webkit-gradient(
			linear, left top, left bottom, from(rgba(220, 220, 220,0.5)),
			to(rgba(220, 220, 220,1))
		);
		filter: progid:DXImageTransform.Microsoft.gradient(
			startColorstr=#80DCDCDC, endColorstr=#FFDCDCDC
		);
		-ms-filter: progid:DXImageTransform.Microsoft.gradient(
			startColorstr=#80DCDCDC, endColorstr=#FFDCDCDC
		);*/
	}
#followbox li,#followbox a{
    display: inline;
    padding: 3px;
}
<?php //------ show the form on one line ?>
form .input {
	float: left;
	margin: 3px 10px;
}
form div.submit{
	clear: none;
	float:left;
	margin-top: 5px;
}
<?php //------- style input ?>
input[type=text] {
	height: 25px;
    text-indent: 10px;
    width: 150px;
	background-color: rgba(0, 0, 0, 0.1);
    border: none;
    border-radius: 4px 4px 4px 4px;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5) inset, -1px -1px 1px rgba(255, 255, 255, 0.1) inset;
    color: #505050;
    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
    font-size: 14px;
}


	.products-grid {position: relative; line-height:1.35em;}
	.products-grid.last { border-bottom:0; }
	.products-grid li {text-align:center;}
	.products-grid li.item { float:left; height: 150px; padding: 12px 10px; width: 165px;}
	.products-grid a.product-name { margin:0 0 5px; font-weight:bold; font-size:13px; color:#203548;color:#007ed3; text-decoration: none; }
	.products-grid a.product-name:hover { text-decoration: underline; }
	.products-grid .pricebox { margin-bottom: 5px; color: #C76200;display: none;}
	.products-grid .link-wishlist a, .products-grid .link-compare a:hover {text-decoration:underline;}
	.product-image {height: 110px;}
	.product-image img {max-width: 110px; max-height: 110px;}
	
	/*--------------------------------*/
#howitworksbanner{
   width: 962px;
   height: 202px;
   background: transparent url("<?php echo $this->webroot;?>img/how-it-work.png") no-repeat;
}
#videoholder {width:325px;height:188px;float:right;margin-top:9px;margin-right:69px; overflow: hidden;cursor:pointer;}
#mainpagezigzag{
    margin-bottom: 0;
    border: none;
}
#mainpagezigzagimg{
    height: 25px;
    background: transparent url("<?php echo $this->webroot;?>img/footerzigzag.png") repeat-x;
}  
</style>
<?php
echo $this->Html->css('fancybox/jquery.fancybox-1.3.4');
echo $this->Html->script('jquery.fancybox-1.3.4.pack');
?>
<script type="text/javascript">
	$('#videoholder').click(function(){
		$(this).html('<iframe width="325" height="212" src="http://www.youtube.com/embed/PEUu6Mawo7E?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>');
	});
	$('.product-image a').fancybox({padding:0});
</script>
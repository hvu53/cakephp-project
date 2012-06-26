<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<?php echo $this->Html->charset(); ?>
<title>Xamples <?php echo $title_for_layout; ?></title> 
<meta name="description" content="XAMPLES provides free samples to consumers and another way of doing market research for businesses" /> 
<meta name="keywords" content="free, free samples, small size samples, rewards, surveys, fragrance, personal care" /> 
<meta name="robots" content="*" /> 

<?php
    echo $this->Html->meta('icon');
	
	echo $this->Html->css('cake.generic');
	echo $this->Html->css('xamples');
	echo $this->Html->css('layouts');
	echo $this->Html->css('jquery-ui-1.8.13.custom');
	if(Configure::read('debug')==0){
		echo '<link href="http://fonts.googleapis.com/css?family=Francois+One&v2" rel="stylesheet" type="text/css" />';
		echo '<link id="agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRiRrwoM" rel="stylesheet" type="text/css" href="http://www.webputty.net/css/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRiRrwoM" /><script type="text/javascript" src="http://www.webputty.net/js/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRiRrwoM"></script>';
	}
	echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js');
    echo $this->Html->script('jquery-ui-1.8.13.custom.min');
	echo $this->Html->script('jquery.lavalamp.min');
	echo $scripts_for_layout;
?>

</head>
<body>
	<div id="container">
		<div id="header">
			<div class="main-column">
				<div class="f-left"><?php echo $this->Html->link(
					$this->Html->image('new-logo.png', array('alt'=> 'xamples - cut the cost')),
					'/',
					array('escape' => false)
				); ?></div>
							<ul id="header-nav"> 
									<li>
										<?php echo $this->Html->link(
											'sign in',
											array('controller' => 'users', 'action' => 'login')
											); ?>
									</li>
									<li><?php echo $this->Html->link('for business',array('business'=>true,'controller'=>'pages','action'=>'display','introduction'));?>
										</li> 
							</ul>
			<ul id="nav">
				<li class="current"><?php echo $this->Html->link('Home', '/', array('title' => 'Xamples - free samples, professional survey, market testing')); ?></li>
				<li><?php echo $this->Html->link('Samples', array('controller'=>'samples','action'=>'index'), array('title' => 'All Samples')); ?></li>
				<li><?php echo $this->Html->link('Blog', '#', array('title' => 'All Samples')); ?></li>
				<li><?php echo $this->Html->link('Specials', '#', array('title' => 'All Samples')); ?></li>
		 </ul>
		 
		 <?php echo $this->element('cart');?>
		 
			</div>
							
		</div>
		<div id="content">
			<div  class="main-column">
<noscript>
	<p><strong>JavaScript is not enabled in your browser.</strong></p>
	<p>You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
</noscript>

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
			</div>
		</div>
		<div id="footer">
			<?php echo $this->Html->link('About Us',array('controller'=>'pages','action'=>'display','about_us'));?>
			<?php echo $this->Html->link('Terms of services',array('controller'=>'pages','action'=>'display','tos'));?>
			<br />
			<?php echo $this->Html->link('Privacy Policies',array('controller'=>'pages','action'=>'display','privacy'));?>
			<?php echo $this->Html->link('FAQ',array('controller'=>'pages','action'=>'display','faq'));?>
			<?php echo $this->Html->link('Contact Us',array('controller'=>'pages','action'=>'display','contact_us'));?>
			<br /><br />
			<?php echo $this->Html->image('hr.png');?>
			<br />
			&copy; copyright by XAMPLES 2011. All rights reserved.
	
		</div>
	</div>
	<script type="text/javascript">
    $(function() {
		$("#nav").lavaLamp({
			fx: "easeOutBack",
			speed: 700
		});
	});
</script>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
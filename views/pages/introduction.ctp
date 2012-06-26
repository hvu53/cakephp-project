<div class="main-container col1-layout">
<div class="box col-main" style="text-align: center;">
	<div class="padded"><?php echo $this->Html->image('discover.jpg');?></div>
	<div class="clear-float separate" style="text-align: center;">
		<div class="small-column f-left">
			<?php echo $this->Html->image('biz1.jpg');?>
		</div>
		<div class="small-column f-left">
			<?php echo $this->Html->image('biz2.jpg');?>
		</div>
		<div class="small-column f-left">
			<?php echo $this->Html->image('biz3.jpg');?>
		</div>
		<div class="small-column f-right">
			<?php echo $this->Html->image('biz4.jpg');?>
		</div>
	</div>
	<div class="padded">
		<?php echo $this->Html->image('video.jpg');
		echo $this->Html->link('',
			'#',array('escape'=>false,'id'=>'playbtn','width'=>'144','height'=>'142'));?>
	</div>
	
			
</div>
</div>
<style type="text/css">
	.small-column img{
		border: 1px solid black;
	}
	#playbtn{
		position: relative;
		top: -270px;
		left: 400px;
		display: block;
		width: 144px;
		height: 142px;
		background: url('<?php echo $this->webroot;?>img/videoplay.png') top;
	}
	#playbtn:hover{
		background-position: bottom;
	}
</style>

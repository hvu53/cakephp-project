<div class="main-container col1-layout">

	<div class="box" style="width:350px;">
		<div class="page-title">
			<h3>Contact Us</h3>
		</div>
		<div class="padded" style="padding: 20px;">
			<?php echo $this->Form->create('User', array('action' => 'contact', 'inputDefaults'=>array('label'=>false))); ?>
			
			<?php
			
			echo $this->Form->input('name',array('placeholder'=>'name'));
			echo $this->Form->input('email',array('placeholder'=>'email'));
				
			echo $this->Form->input('detail', array('type' => 'textarea','placeholder'=>'Your thoughts'));
			?>
			<?php echo $this->Form->end('Submit'); ?>
		</div>
	</div>
</div>
<style type="text/css">
	
	input[type=text] {
		height: 25px;
	}
	textarea{
		padding: 10px 0px;
	}
	input[type=text], textarea {
		width: 300px;
		text-indent: 10px;
		
		background-color: rgba(100, 100, 100, 0.1);
		border: none;
		border-radius: 4px 4px 4px 4px;
		box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5) inset, -1px -1px 1px rgba(255, 255, 255, 0.1) inset;
		color: #505050;
		font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
		font-size: 14px;
	}
</style>
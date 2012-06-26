	
		<div class="main-container col1-layout">
			<div class="box clear-float">
				<div class="page-title">
					<h3> Login or Create an Account</h3>
				</div>
				<?php echo $this->Session->flash('auth');?>
				<div class="col2-set padded">
					<div class="col-1">
						<h4>REGISTERED CUSTOMER</h4>
						<hr></hr>
						<p>If you have an account with us, please log in</p>
						<?php
						echo $this->Form->create('User', array('action' => 'login'));
						echo $this->Form->input('username');
						echo $this->Form->input('password');
						echo $this->Form->end('Login');?>
					</div>
					<div class="col-2">
						<h4>NEW CUSTOMER</h4>
						<hr></hr>
						<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping address, view and track your orders and more</p>
						<?php echo $this->Html->link('Create an Account',array('controller'=>'users','action'=>'signup'),array('class'=>'button-box'));?>
					</div>
				</div>
				
			</div>
		</div>
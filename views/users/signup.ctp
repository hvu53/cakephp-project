<?php 
$states = array('AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY');
$races = array('White','African American','American Indian and Alaska Native','Asian','Latino');
$sexes = array('female','male');
$privacy_options = array('Spy Mode: use only my name and address to sign up for the samples', 
	'Relaxed: I want to receive other promotional emails for the samples I sign up.');
?>
		<div class="main-container col1-layout">
			<div class="box clear-float">
				<div class="page-title">
					<h1> Create a Xamples Account</h1>
				</div>
							<?php echo $this->Form->create('User');?>
	<fieldset>
		<span class="step" id="step1">
			<h4>Personal Information</h4>
			<div class="clear-float">
				<div class="small-column f-left">
					<?php
					echo $this->Form->input('first_name',array('div'=>array('class'=>'required')));
					echo $this->Form->input('username',array('label'=>'Email Address'));
					?>
				</div>
				<div class="small-column f-left">
					<?php
					echo $this->Form->input('last_name',array('div'=>array('class'=>'required')));
					?>
				</div>
			</div>
			<h4>Login Information</h4>
			<div class="clear-float">
				<div class="small-column f-left">
					<?php
					echo $this->Form->input('password');
					?>
				</div>
				<div class="small-column f-left">
					<?php
					echo $this->Form->input('confirm_password',array('type'=>'password','div'=>array('class'=>'required')));
					?>
				</div>
			</div>
			
			<h4>Shipping Information</h4>
			<div class="clear-float">
				<div class="small-column f-left">
					<?php
					echo $this->Form->input('address',array('div'=>array('class'=>'required')));
					echo $this->Form->input('state',array('div'=>array('class'=>'required'),'options'=>$states));
					echo $this->Form->input('phone',array('div'=>array('class'=>'required'),'label'=>'Phone Number'));
					?>
				</div>
				<div class="small-column f-left">
					<?php
					echo $this->Form->input('city',array('div'=>array('class'=>'required')));
					echo $this->Form->input('zipcode',array('div'=>array('class'=>'required')));
					?>
				</div>
			</div>
		</span>
		<span class="step" id="step2">
			<h4>Demographic Information</h4>
			<div class="clear-float">
				<div class="small-column f-left">
					<?php
					
					echo $this->Form->input('birthday',array('div'=>array('class'=>'required'),'type'=>'date','minYear'=>date('Y') - 70,'maxYear'=>date('Y') - 10));
					echo $this->Form->input('race',array('div'=>array('class'=>'required'),'options'=>$races));
					echo $this->Form->hidden('income');
					?>
					<div style="color: #666666;font-weight: bold;">Income: <span id="amount" style="color:#f6931f;">$0</span></div>
					<div id="slider"></div>
				</div>
				<div class="small-column f-left">
					<?php
					echo $this->Form->input('sex',array('div'=>array('class'=>'required'),'options'=>$sexes));
					echo $this->Form->input('privacy',array('div'=>array('class'=>'required'),'options'=>$privacy_options));
					?>
				</div>
			</div>
		</span>
	</fieldset>
				<div class="submit">
					<input type="reset" />
<?php echo $this->Form->end(array('div'=>false,'value'=>'Sign Me Up!'));?>
				</div>
			</div>
		</div>
		<?php echo $this->Html->script('bbq');
    echo $this->Html->script('jquery.form');
	echo $this->Html->script('jquery.form.wizard-min');
	echo $this->Html->script('jquery.validate.min');
	echo $this->Html->script('additional-methods.min');
	?>
<style type="text/css">
form .required label.error {
	color:red;
	font-size: 0.8em;
}
form .required label.error:after {
	content: '';
}
#slider {
	padding: 0px;
}
</style>
<script type="text/javascript">
    $(function() {
		$( "#slider" ).slider({
			value:100,
			min: 0,
			max: 300000,
			step: 1000,
			slide: function( event, ui ) {
				$( "#amount" ).text( "$" + ui.value +"/year");
				$( "#UserIncome" ).val(ui.value );
				
			}
		});
		$( "#amount" ).text( "$" + $( "#slider" ).slider( "value" ) );
		$( "#UserIncome" ).val($( "#slider" ).slider( "value" ) );
		
		$("#UserSignupForm").css('border','0').formwizard({ 
				 	formPluginEnabled: false,
				 	validationEnabled: true,
				 	focusFirstInput : true,
					textSubmit:'Sign Me Up!',
				 	
				 	validationOptions : {
				 		rules: {
							'data[User][first_name]': "required",
							'data[User][last_name]': "required",
							'data[User][username]': {
								required: true,
								email: true
							},
							'data[User][password]': "required",
							'data[User][confirm_password]': { equalTo:'#UserPassword'},
							'data[User][address]': "required",
							'data[User][city]': "required",
							'data[User][phone]': {
								required: true,
								phoneUS: true
							},
							'data[User][zipcode]': "required"
						},
						messages: {
							'data[User][first_name]': "Please enter your first name",
							'data[User][last_name]': "Please enter your last name",
							'data[User][username]': {
								required: "Please specify your email",
								email: "Correct format is name@domain.com"
							},
							'data[User][password]': "Please enter your password",
							'data[User][confirm_password]': {
								equalTo:"Must be the same as password"
							},
							'data[User][address]': "Please enter your home address",
							'data[User][city]': "Please enter your city",
							'data[User][phone]': "Please enter your phone",
							'data[User][zipcode]': "Please enter your zipcode"
						}
				 	}
				 }
				);
	});
</script>
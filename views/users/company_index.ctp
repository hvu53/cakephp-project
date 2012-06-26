		<div class="main-container col2-left-layout">
			<?php 
			$states = array('AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY');
			?>
			
			<div class="box clear-float">
					<div class="box col-main">
								<div class="page-title">
									<h3> Manage your Xamples Account</h3>
								</div>
									
								<div class="padded">
									<h1 style="text-transform:uppercase;" class="editable"><?php echo $company['Company']['name'];?></h1>
									<div class="clear-float">
									<?php echo $this->Html->image('companies/'.$company['Company']['id'].'/'.$company['Company']['picture'],array('style'=>'width: 149px;height: 149px;margin:10px;float:left;'));
									echo '<p class="editable-area">'.$company['Company']['description'].'</p>';
									?>	
										
									</div>
									
									<div class="box-head">
										<h4> ACCOUNT INFORMATION </h4>
									</div>
									<div class="col2-set clear-float">
										<div class="col-1">
											<div>
												<div class="box-title">
													<h3> Contact Information</h3>
													<a> Edit</a>
												</div>
												<div class="box-content">
													<p>
														<?php echo $company['Company']['name'];?><br/>
														<?php echo $this->Session->read('Auth.User.phone');?><br/>
														<?php echo $this->Session->read('Auth.User.username');?><br/>
														<a> Change Password </a>
													</p>
												</div>
											</div>
										</div>
										<div class="col-2">
											<div>
												<div class="box-title">
													<h3> Company Address </h3>
													<a> Edit </a>
												</div>
												<div class="box-content">
													<p> <?php echo $this->Session->read('Auth.User.address').'<br />'.$this->Session->read('Auth.User.city').' '.
													$states[$this->Session->read('Auth.User.state')].', '.$this->Session->read('Auth.User.zipcode');?></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col2-set">
										<div>
											<div class="box-title"> 
												<h3>My Products</h3>
												<a> View All </a>
											</div>
											<div class="box-content">
											
											</div>
										</div>
									</div>
									
									<div class="col2-set">
										<div>
											<div class="box-title"> 
												<h3>My Campaigns</h3>
												<a> View All </a>
											</div>
											<div class="box-content">
											
											</div>
										</div>
									</div>
								</div>
						
					</div>
					<div class="col-left box">
					
							<div class="page-title">
									<h3> My Account</h3>
							</div>
							<div class="padded">
								<ul>
									<li class="current">Profile</li>
									<li><?php echo $this->Html->link('Products',array('controller'=>'products','action'=>'index'));?></li>
									<li><?php echo $this->Html->link('Campaigns',array('controller'=>'campaigns','action'=>'index'));?></li>
									<li><?php echo $this->Html->link('Surveys',array('controller'=>'surveys','action'=>'index'));?></li>
									
								</ul>
							</div>
						
					</div>
				
			</div>
			
			
		</div>
<style type="text/css">
.box-head { border-bottom:1px solid #d9dde3; padding-bottom: 20px; text-align:right; }
.box-head h4 { float:left; color:#e65505; }
.box-title { border-bottom:1px dashed #d9dde3; padding:2px 0px 5px 0px; margin:0 0 8px; text-align:right; }
.box-title h3 { float:left; color: #007ed3; }
.box-title a {color: #555452;}

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
.editable-area{
	margin-left: 170px;
	padding-right: 50px;
}
.editable-area:hover {
    background-image: url("http://papermashup.com/demos/inline-editing/images/edit.png");
    background-position: right center;
    background-repeat: no-repeat;
    cursor: pointer;
}
</style>
<?php echo $this->Html->script('jquery.jeditable.min');?>
<script type="text/javascript">
	$(function(){
		$('.editable-area').editable(function(value, settings){return(value);}, { 
			 type      : 'textarea',
			 cancel    : 'Cancel',
			 submit    : 'Save',
			 indicator : 'Saving...',
			 tooltip   : 'Click to edit'
		});
		$('.editable').editable(function(value, settings){return(value);}, { 
			 
			 indicator : 'Saving...',
			 tooltip   : 'Click to edit'
		});
	});
</script>
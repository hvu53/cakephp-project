		<div class="main-container col2-left-layout">
			<?php 
			$states = array('AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY');
			//echo $this->Html->image('summer.png');?>
			
			<div class="box clear-float">
					<div class="box col-main">
								<div class="page-title">
									<h3> Manage your Xamples Account</h3>
								</div>
								<p><b>Hello <?php echo $customer['Customer']['first_name'].' '.$customer['Customer']['last_name'];?></b><br />
								 Welcome to Xamples. From here, you will have the ability to view your recent xamples, update your account information, join our deals and survey panel </p>
									
								<div class="padded">
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
														<?php echo $customer['Customer']['first_name'].' '.$customer['Customer']['last_name'];?><br/>
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
													<h3> Shipping Address </h3>
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
												<h3> Samples you already tried</h3>
												<a> View All </a>
											</div>
											<div class="box-content">
											
											</div>
										</div>
									</div>
									
									<div class="col2-set">
										<div>
											<div class="box-title"> 
												<h3> Your Xamples Panel</h3>
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
									<li class="current"> <a> My Xamples </a></li>
									<li><a> Account Information </a></li>
									<li><a> My Xamples History </a></li>
									<li><?php echo $this->Html->link('My Surveys',array('controller'=>'surveys','action'=>'index'));?></li>
									<li><a> My Panel </a></li>
									<li><a> My Rewards </a></li>
									<li><a> My Wishlist</a></li>
									<li><a> My Downloadable Products</a></li>
									<li><a> My Product Reviews</a></li>
									<li><a> Deals Subscription</a></li>
									
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
</style>
		
		<div class="main-container col3-layout">
			<?php echo $this->Html->image('summer.png');?>
			
			<div class="box clear-float">
				<div class="col-wrapper">
					<div class="box col-main">
						<div class="page-title">
							<h3> Fragrance Samples </h3>
						</div>
						<div class="sorter">
							<form action="" method="">
								<select name="fragrance samples scents" class="sort-by">
									<option value="">sort by scent</option>
									<option value="flowery"> Florals </option>
									<option value="exotic"> Orientals</option>
									<option value="10">Fresh &amp; Clean</option>
									<option value="15">Citrus</option>
									<option value="25">Woody</option>
								</select>&nbsp;
								<select name="category" class="sort-by">
									<option value="">sort by season</option>
									<option value="springfragrance">Spring Scent </option>
									<option value="summerfragrance">Summer Scent</option>
									<option value="fallfragrance">Fall Scent</option>
									<option value="winterfragrance">Winter Scent</option>
								</select>
								<select name="category" class="sort-by">
									<option value="">sort by mood</option>
									<option value="sexysample"> Sexy </option>
									<option value="classysample">Classy</option>
									<option value="elegantsample">Elegance</option>
									<option value="youngsample">Young</option>
									<option value="playfulsample">Playful</option>
									<option value="sportysample">Sporty</option>
								</select>
							</form>
						</div>
						<div class="pager">
							<ul class="limiter">
								<li class="amount"> <a title="" href=""> 1 </a></li>
								<li class="amount"> <a title="" href=""> 2 </a></li>
								<li class="amount"> <a title="" href=""> 3</a></li>
								<li class="amount"> <a title="" href=""> 4 </a></li>
								<li class="amount"> <a title="" href=""> View All </a></li>
							</ul>
						</div>
						<ul class="products-grid">
							<li class="item first"> 
								<p class="product-image">
									<?php echo $this->Html->link(
									$this->Html->image('products/product2.png',array('height'=>'80', 'width'=>'80')),
									'product.php', array('escape' => false)
									); ?>
								</p>
								<a class="product-name" href="#"> Senseo Coffee  </a>
								<div class="pricebox">Free</div>
								<a class="button-box" href="#">Get me now</a>
							</li>
							<li class="item"> 
								<p class="product-image">
									<?php echo $this->Html->link(
									$this->Html->image('products/product1.png', array('height'=>'80', 'width'=>'80')),
									'#', array('escape' => false)
									); ?>
								</p>
								<a class="product-name" href="#"> Lacome Mascara  </a>
								<div class="pricebox">Free</div>
								<a class="button-box" href="#">Get me now</a>
							</li>
							<li class="item"> 
								<p class="product-image">
									<?php echo $this->Html->link(
									$this->Html->image('products/product5.png',array('height'=>'80', 'width'=>'80')),
									'#', array('escape' => false)
									); ?>
								</p>
								<a class="product-name" href="#"> Buberry Perfume  </a>
								<div class="pricebox">Free</div>
								<a class="button-box" href="#">Get me now</a>
							</li>
							<li class="item"> 
								<p class="product-image">
									<?php echo $this->Html->link(
									$this->Html->image('products/product6.png',array('height'=>'80', 'width'=>'80')),
									'#', array('escape' => false)
									); ?>
								</p>
								<a class="product-name" href="#"> Blah blah blah </a>
								<div class="pricebox">Free</div>
								<a class="button-box" href="#">Get me now</a>
							</li>
							<li class="item"> 
								<p class="product-image">
									<?php echo $this->Html->link(
									$this->Html->image('products/product3.png',array('height'=>'80', 'width'=>'80')),
									'#', array('escape' => false)
									); ?>
								</p>
								<a class="product-name" href="#"> Blah blah blah </a>
								<div class="pricebox">Free</div>
								<a class="button-box" href="#">Get me now</a>
							</li>
							<li class="item"> 
								<p class="product-image">
									<?php echo $this->Html->link(
									$this->Html->image('products/product4.png',array('height'=>'80', 'width'=>'80')),
									'#', array('escape' => false)
									); ?>
								</p>
								<a class="product-name" href="#"> Blah blah blah </a>
								<div class="pricebox">Free</div>
								<a class="button-box" href="#">Get me now</a>
							</li>
						</ul>
						<ul class="products-grid">
							<li class=""> </li>
							<li> </li>
							<li> </li>
						</ul>
					</div>
					<div class="col-left sidebar">
						<div class="box">
							<div class="page-title"> 
								<h3> Xamples Fragrance</h3>
							</div>
							<div class="padded">	
								<ul class="nav-sidebox">
									<li class="level0 nav-1 parent"> 
										<a title="Fragrance for women" href=""> 
											<span> For women </span>
										</a>
										<ul class="level0">
											<li class="level1 nav-1-1"> 
												<a title="" href="">
													<span> New Fragrances </span>
												</a>
						
											</li>
											<li class="level1 nav-1-2"> 
												<a title="Fragrance summer" href="">
													<span> Top picker </span>
												</a>
						
											</li>
											<li class="level1 nav-1-3"> 
												<a title="Fragrance fall" href="">
													<span> Limited time only </span>
												</a>
						
											</li>
											<li class="level1 nav-1-4"> 
												<a title="Fragrance Winter" href="">
													<span> Exclusives </span>
												</a>
						
											</li>
										</ul>
									</li>
									<li class="level0 nav-2 parent"> 
										<a title="Fragrance for men" href=""> 
											<span> For men </span>
										</a>
									</li>
									<li> <a title="Fragrance for both sexes" href=""> For both </a></li>
		
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-right sidebar">
					<div class="box">
						<div class="page-title"> 
								<h3> My Xamples Cart</h3>
						</div>
						<p> You have 0 item in your cart </p>
						
					</div>
				
						<?php echo $this->Html->link(
									$this->Html->image('rewards.png', array('alt'=> 'Refer Xamples to your friends and earn rewards')),
									'#', array('escape' => false)
									); ?>
					<div class="separate"> 
						<?php echo $this->Html->link(
									$this->Html->image('just-by-signing-up-2.png', array('alt'=> 'Xamples sign up')),
									'#', array('escape' => false)
									); ?>
					</div>
				</div>
			</div>
		</div>
		<style type="text/css">
		.products-grid {position: relative; line-height:1.35em;}
		.products-grid.last { border-bottom:0; }
		.products-grid li {text-align:center;}
		.products-grid li.item { float:left; padding:12px 10px; width:150px;}
		.products-grid a.product-name { margin:0 0 5px; font-weight:bold; font-size:13px; color:#203548;color:#007ed3; text-decoration: none; }
		.products-grid a.product-name:hover { text-decoration: underline; }
		.products-grid .pricebox { margin-bottom: 5px; color: #C76200;}
		.products-grid .link-wishlist a, .products-grid .link-compare a:hover {text-decoration:underline;}
		
		
		.nav-sidebox a {font: 12px/26px Verdana, Geneva, Arial, Helvetica, sans-serif; color: #777;}
		.nav-sidebox a:hover { color: #222;}
		.nav-sidebox ul { padding-left: 15px;}
		.nav-sidebox ul.level1 { display: none;}
		.nav-sidebox ul.level0 a{padding-left: 10px;}
	</style>
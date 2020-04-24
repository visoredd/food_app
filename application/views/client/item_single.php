<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Online Shopping Single Item - CakeFactory</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php require_once('includes/head.inc.php'); ?>
	</head>
	
	<body>
		<!-- Shopping cart Modal -->
		<?php require_once('includes/shopping_cart.inc.php'); ?>
		<!-- Model End -->
		
		<!-- Page Wrapper -->
		<div class="wrapper">
		
			<!-- Header Start -->
			
			<div class="header">
				<div class="container">
					<!-- Header top area content -->
					<?php require_once('includes/header_top.inc.php'); ?>
					<?php require_once('includes/menu.inc.php'); ?>
				</div> <!-- / .container -->
			</div>
			
			<!-- Header End -->
			
			<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="<?php echo base_url(); ?>img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">Order Now</h2>
					<ol class="breadcrumb">
						<li><a href="<?php echo base_url();?>user">Home</a></li>
						<li><a href="<?php echo base_url();?>shopping/">Shopping</a></li>
						<li class="active">Order Now</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Single Item Start -->
				
				<div class="single-item">
					<div class="container">
						<!-- Shopping single item contents -->
						<div class="single-item-content">
							<div class="row">
								<div class="col-md-4 col-sm-5">
									<!-- Product image -->
									<img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/shopping/shop-single.jpg" alt="" />
								</div>
								<div class="col-md-8 col-sm-7">
									<!-- Heading -->
									<h3>Plan Butter Cake</h3>
									<div class="row">
										<div class="col-md-7 col-sm-12">
											<!-- Single item details -->
											<div class="item-details">
												<!-- Paragraph -->
												<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												<!-- Heading -->
												<h5>Ingredients :-</h5>
												<!-- Recipe ingredients -->
												<ul class="list-unstyled">
													<li>
														<i class="fa fa-check"></i> Cream <span class="pull-right"> 100g</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Suger <span class="pull-right"> 250g</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Nam libero et <span class="pull-right"> 1/2 cup</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Lam hured ore <span class="pull-right"> 100ml</span>
														<div class="clearfix"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-5 col-sm-12"> 
											<!-- Form inside table wrapper -->
											<div class="table-responsive">
												<!-- Ordering form -->
												<form role="form">
													<!-- Table -->
													<table class="table table-bordered">
														<tr>
															<td>Price</td>
															<td>$49</td>
														</tr>
														<tr>
															<td>Shipping</td>
															<td>Free</td>
														</tr>
														<tr>
															<td>Delivery Time</td>
															<td>45 Min</td>
														</tr>
														<tr>
															<td>Quantity</td>
															<td><div class="form-group">
																<select class="form-control input-sm">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																</select>
															</div></td>
														</tr>
														<tr>
															<td>Payment Mode</td>
															<td><div class="form-group">
																<select class="form-control input-sm">
																	<option>Cash on delivery</option>
																	<option>Credit Card</option>
																	<option>Debit Card</option>
																</select>
															</div></td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td><div class="form-group">
																<button type="submit" class="btn btn-danger btn-sm">Payment</button>
															</div></td>
														</tr>
													</table>
												</form><!--/ Table End-->
											</div><!--/ Table responsive class end -->
										</div>
									</div><!--/ Inner row end  -->
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Single Item End -->
			
				<!-- Showcase Start -->
				
				<div class="showcase">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- Showcase section item -->
								<div class="showcase-item">
									<!-- Image -->
									<img class="img-responsive" src="<?php echo base_url(); ?>img/fruit2.png" alt="" />
									<!-- Heading -->
									<h3><a href="#">Equine Porno Sumos</a></h3>
									<!-- Paragraph -->
									<p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- Showcase section item -->
								<div class="showcase-item">
									<!-- Image -->
									<img class="img-responsive" src="<?php echo base_url(); ?>img/fruit3.png" alt="" />
									<!-- Heading -->
									<h3><a href="#">Equine Porno Sumos</a></h3>
									<!-- Paragraph -->
									<p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Showcase End -->
				
			</div><!-- / Inner Page Content End -->	
			
			<!-- Footer Start -->
			<?php require_once('includes/footer.inc.php'); ?>
			<!-- Footer End -->
			
		</div><!-- / Wrapper End -->
		
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span>
		
		<!-- Javascript files -->
		<?php require_once('includes/footer_js.inc.php'); ?>
		
		<!-- JS code for this page -->
		<script>
		
		</script>
	</body>	
</html>
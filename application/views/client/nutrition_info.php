<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Nutrition Info - CakeFactory</title>
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
					<h2 class="white">Nutrition Info</h2>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Nutrition Info</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Nutrition Start -->
				
				<div class="nutrition">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<!-- Nutrition Item -->
								<div class="nutrition-item">
									<!-- Heading -->
									<h4>Vegetable Salad</h4>
									<!-- Image -->
									<img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/dish/dish9.jpg" alt="" />
									<!-- Paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercise.</p>
									<!-- Nutrition information table -->
									<div class="table-responsive">
										<table class="table table-bordered">
											<tr>
												<th>Amount</th>
												<th>Value</th>
											</tr>
											<tbody>
												<tr>
													<td>Calories</td>
													<td>200</td>
												</tr>
												<tr>
													<td>Fat</td>
													<td>9g</td>
												</tr>
												<tr>
													<td>Carbohydrate</td>
													<td>33%</td>
												</tr>
												<tr>
													<td>Protein</td>
													<td>25g</td>
												</tr>
												<tr>
													<td>Consecrate</td>
													<td>2000kcal</td>
												</tr>
												<tr>
													<td>Ut enim</td>
													<td>10g</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div><!--/ Nutrition info end  -->
							</div><!--/ Column end  -->
							<div class="col-md-4 col-sm-4">
								<!-- Nutrition Item -->
								<div class="nutrition-item">
									<!-- Heading -->
									<h4>Vanilla Cake</h4>
									<!-- Image -->
									<img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/dish/dish10.jpg" alt="" />
									<!-- Paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercise.</p>
									<!-- Nutrition information table -->
									<div class="table-responsive">
										<table class="table table-bordered">
											<tr>
												<th>Amount</th>
												<th>Value</th>
											</tr>
											<tbody>
												<tr>
													<td>Calories</td>
													<td>200</td>
												</tr>
												<tr>
													<td>Fat</td>
													<td>9g</td>
												</tr>
												<tr>
													<td>Carbohydrate</td>
													<td>33%</td>
												</tr>
												<tr>
													<td>Protein</td>
													<td>25g</td>
												</tr>
												<tr>
													<td>Consecrate</td>
													<td>2000kcal</td>
												</tr>
												<tr>
													<td>Ut enim</td>
													<td>10g</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div><!--/ Nutrition info end  -->
							</div><!--/ Column end  -->
							<div class="col-md-4 col-sm-4">
								<!-- Nutrition Item -->
								<div class="nutrition-item">
									<!-- Heading -->
									<h4>Fried Fish</h4>
									<!-- Image -->
									<img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/dish/dish11.jpg" alt="" />
									<!-- Paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercise.</p>
									<!-- Nutrition information table -->
									<div class="table-responsive">
										<table class="table table-bordered">
											<tr>
												<th>Amount</th>
												<th>Value</th>
											</tr>
											<tbody>
												<tr>
													<td>Calories</td>
													<td>200</td>
												</tr>
												<tr>
													<td>Fat</td>
													<td>9g</td>
												</tr>
												<tr>
													<td>Carbohydrate</td>
													<td>33%</td>
												</tr>
												<tr>
													<td>Protein</td>
													<td>25g</td>
												</tr>
												<tr>
													<td>Consecrate</td>
													<td>2000kcal</td>
												</tr>
												<tr>
													<td>Ut enim</td>
													<td>10g</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div><!--/ Nutrition info end  -->
							</div><!--/ Column end  -->
						</div>
					</div>
				</div>
				
				<!-- Nutrition End -->
			
				<!-- Showcase Start -->
				<?php require_once('includes/showcase.inc.php'); ?>
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
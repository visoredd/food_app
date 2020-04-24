<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>About Us - CakeFactory</title>
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
					<h2 class="white">About Us</h2>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">About Us</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- About company -->
				<div class="about-company padd">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<!-- About Compnay Item -->
								<div class="about-company-item">
									<!-- About Company Image -->
									<img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/chef/about-1.jpg" alt="" />
								</div>
							</div>
							<div class="col-md-6">
								<!-- About Compnay Item -->
								<div class="about-company-item">
									<!-- Heading -->
									<h3>About Our <span class="lblue">Restaurant</span></h3>
									<!-- Paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut alio consequat.</p>
									<br /><!--/ Line break -->
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<!-- About company inner items -->
											<div class="about-company-inner">
												<!-- Paragraph with icon -->
												<span class="company-feature"><i class="fa fa-building-o br-red"></i> <b class="red">10</b> Locations</span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<!-- About company inner items -->
											<div class="about-company-inner">
												<!-- Paragraph with icon -->
												<span class="company-feature"><i class="fa fa-trophy br-lblue"></i> <b class="lblue">10</b> Awards</span>
											</div>
										</div>
										<div class="clearfix visible-xs"></div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<!-- About company inner items -->
											<div class="about-company-inner">
												<!-- Paragraph with icon -->
												<span class="company-feature"><i class="fa fa-users br-green"></i> <b class="green">15</b> Chefs</span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<!-- About company inner items -->
											<div class="about-company-inner">
												<!-- Paragraph with icon -->
												<span class="company-feature"><i class="fa fa-shopping-cart br-purple"></i> <b class="purple">50</b> Dishes.</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Chefs Start -->
				<?php require_once('includes/chefs.inc.php'); ?>
				<!-- Chefs End -->
			
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
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Reserve Seats - CakeFactory</title>
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
		</div><!-- /.modal -->
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
					<h2 class="white">Reserve Seats</h2>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Reserve Seats</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Booking Start -->
				
				<div class="booking">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<!-- Heading -->
								<h3>Awesome Decoration</h3>
								<!-- Paragraph -->
								<p>Loren gypsum dolour sit amet, conjecture listing elite, sed do eiusmod tempor incident ut laboured et magna onjecture listing elite, sed do eiusmod tempo aliqua.</p>
								<!-- Image Slider -->
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/booking/table1.jpg" alt="" />
										</div>
										<div class="item">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/booking/table2.jpg" alt="" />
										</div>
										<div class="item">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/booking/table3.jpg" alt="" />
										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<span class="fa fa-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<span class="fa fa-chevron-right"></span>
									</a>
								</div>
							</div>
							<div class="col-md-5">
								<!-- Booking form area -->
								<div class="booking-form">
									<!-- Heading -->
									<h3>Reservation</h3>
									<!-- Paragraph -->
									<p>Loren gypsum dolour sit amet, conjecture listing elite, sed do eiusmod tempor incident ut laboured et magna aliqua.</p>
									<!-- Booking form -->
									<form role="form">
										<!-- Form label -->
										<label>Full Name</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="text" placeholder="Name" />
										</div>
										<!-- Form label -->
										<label>Email</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="email" placeholder="Email" />
										</div>
										<!-- Form label -->
										<label>Contact</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="text" placeholder="Phone number" />
										</div>
										<!-- Form label -->
										<label>Booking Type</label>
										<div class="form-group">
											<!-- Form drop down -->
											<select class="form-control">
												<option>Single</option>
												<option>Couple</option>
												<option>Family</option>
												<option>Business</option>
											</select>
										</div>
										<!-- Form label -->
										<label>Extra Requirement</label>
										<div class="form-group">
											<!-- Form text area -->
											<textarea class="form-control" rows="3" placeholder="Requirement..."></textarea>
										</div>
										<!-- Form button -->
										<button class="btn btn-danger btn-sm" type="submit">Confirm</button>&nbsp;
										<button class="btn btn-default btn-sm" type="reset">Reset</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Booking End -->
			
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
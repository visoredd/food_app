<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Online Shopping - CakeFactory</title>
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
					<h2 class="white">Order Online</h2>
					<ol class="breadcrumb">
						<li><a href="<?php echo base_url();?>user">Home</a></li>
						<li class="active">Shopping</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
				
				<!-- Shopping Start -->
				
				<div class="shopping">
					<div class="container">
						<!-- Shopping items content -->
						<div class="shopping-content">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- Shopping items -->
									<div class="shopping-item">
										<!-- Image -->
										<a href="<?php echo base_url();?>shopping/order_now"><img class="img-responsive" src="<?php echo base_url(); ?>img/shopping/shop1.jpg" alt="" /></a>
										<!-- Shopping item name / Heading -->
										<h4 class="pull-left"><a href="<?php echo base_url();?>shopping/order_now">Quasi Architects</a></h4>
										<span class="item-price pull-right">$49</span>
										<div class="clearfix"></div>
										<!-- Paragraph -->
										<p>Lorem ipsum dolor sit amet, conse ctetur adipis cicing elit.</p>
										<!-- Buy now button -->
										<div class="visible-xs">
											<a class="btn btn-danger btn-sm" href="#">Buy Now</a>
										</div>
										<!-- Shopping item hover block & link -->
										<div class="item-hover br-red hidden-xs"></div>
										<a class="link hidden-xs" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<!-- Pagination -->
							<!-- <div class="shopping-pagination">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div> -->
							<!-- Pagination end-->
						</div>
					</div>
				</div>
				
				<!-- Shopping End -->
			
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
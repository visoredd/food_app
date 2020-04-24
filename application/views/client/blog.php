<!DOCTYPE html>
<html>
	<head>	
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Blog - CakeFactory</title>
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
					<h2 class="white">Blog</h2>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Blog</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Blog Start -->
					
				<div class="blog">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<!-- The new post done by user's all in the post block -->
								<div class="blog-post">
									<!-- Entry is the one post for each user -->
									<div class="entry">
										<!-- Post Images -->
										<div class="blog-img pull-left">
											<img src="<?php echo base_url(); ?>img/blog/blog1.jpg" class="img-responsive img-thumbnail" alt="" />
										</div>
										<!-- Meta for this block -->
										<div class="meta">
											<i class="fa fa-calendar"></i>&nbsp; Jan 13, 2014
											<span class="pull-right"><i class="fa fa-comment"></i> <a href="#">&nbsp;2 Comments</a></span>
										</div>
										<!-- Heading of the  post -->
										<h3><a href="blog-single.html">Contrary to popular belief horem purse</a></h3>
										<hr /><!-- Horizontal line -->
										<!-- Paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Ut <strong>commodo ullamcorper risus nec</strong> viverra, dignissim eget est.</p>
										<div class="clearfix"></div>
									</div>
									<!-- Entry is the one post for each user -->
									<div class="entry">
										<!-- Post Images -->
										<div class="blog-img pull-left">
											<img src="<?php echo base_url(); ?>img/blog/blog2.jpg" class="img-responsive img-thumbnail" alt="" />
										</div>
										<!-- Meta for this block -->
										<div class="meta">
											<i class="fa fa-calendar"></i>&nbsp; Jan 29, 2014
											<span class="pull-right"><i class="fa fa-comment"></i> <a href="#">&nbsp;0 Comments</a></span>
										</div>
										<!-- Heading of the  post -->
										<h3><a href="blog-single.html">Suspended portrait cretinous perimeter</a></h3>
										<hr /><!-- Horizontal line -->
										<!-- Paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Ut <strong>commodo ullamcorper risus nec</strong> viverra, dignissim eget est.</p>
										<div class="clearfix"></div>
									</div>
									<!-- Entry is the one post for each user -->
									<div class="entry">
										<!-- Post Images -->
										<div class="blog-img pull-left">
											<img src="<?php echo base_url(); ?>img/blog/blog3.jpg" class="img-responsive img-thumbnail" alt="" />
										</div>
										<!-- Meta for this block -->
										<div class="meta">
											<i class="fa fa-calendar"></i>&nbsp; Feb 14, 2014
											<span class="pull-right"><i class="fa fa-comment"></i> <a href="#">&nbsp;0 Comments</a></span>
										</div>
										<!-- Heading of the  post -->
										<h3><a href="blog-single.html">Placerat semper quis in urna risus</a></h3>
										<hr /><!-- Horizontal line -->
										<!-- Paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Ut <strong>commodo ullamcorper risus nec</strong> viverra, dignissim eget est.</p>
										<div class="clearfix"></div>
									</div>
									<!-- Pagination -->
									<ul class="pagination">
										<li class="disabled"><a href="#">&laquo;</a></li>
										<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">&raquo;</a></li>
									</ul>
									<!-- Pagination end-->
								</div>
							</div> <!--/ Main blog column end -->
							<div class="col-md-4">
								<!-- Blog page sidebar -->
								<div class="blog-sidebar">
									<div class="row">
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Search</h4>
												<!-- search button and input box -->
												<form role="form" class="form-inline">
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Type to search">
														<span class="input-group-btn">
															<button class="btn btn-danger" type="button"><i class="fa fa-search"></i></button>
														</span>
													</div>
												</form><!--/ Form end -->
											</div><!--/ Widget end -->
										</div>
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Recent Post</h4>
												<!-- Recent post list -->
												<ul class="list-unstyled">
													<li><i class="fa fa-angle-double-right"></i> <a href="#">Delicious Pizza recipe, soluta nobqual blame betum rutrum allongs to this est eligend.</a></li>
													<li><i class="fa fa-angle-double-right"></i> <a href="#">Chicken recipe, luta nobisest hyelqual bltum rutrum alame belongs to thigend.</a></li>
													<li><i class="fa fa-angle-double-right"></i> <a href="#">Hot Cake recipe, jueilqual blame belongs to thuta ntum rutrum alobist hyeleniurd.</a></li>
													<li><i class="fa fa-angle-double-right"></i> <a href="#">French Food recipe, rsiqual blame belongs to thlutum rutrum alta nobniurd.</a></li>
												</ul>
											</div><!--/ Widget end -->
										</div>
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Tags</h4>
												<a href="#" class="btn btn-warning btn-sm">Dessert</a>
												<a href="#" class="btn btn-danger btn-sm">Spicy Non-Veg</a>
												<a href="#" class="btn btn-default btn-sm">Drinks</a>
												<a href="#" class="btn btn-success btn-sm">Seafood</a>
												<a href="#" class="btn btn-info btn-sm">Globalist</a>
												<a href="#" class="btn btn-warning btn-sm">Cake</a>
												<a href="#" class="btn btn-success btn-sm">French</a>
												<a href="#" class="btn btn-info btn-sm">Indigent</a>
												<a href="#" class="btn btn-success btn-sm">Strum</a>
												<a href="#" class="btn btn-default btn-sm">Squalor</a>
												<a href="#" class="btn btn-warning btn-sm">Nobelium</a>
											</div><!--/ Widget end -->
										</div>
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>About Us</h4>
												<!-- Paragraph -->
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna consequat.</p>
												<!-- Social media icon -->
												<div class="social">
													<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
													<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
													<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
													<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
												</div>
											</div><!--/ Widget end -->
										</div>
									</div><!--/ Inner row end -->
								</div><!--/ Page sidebar end -->
							</div>
						</div><!--/ Row end -->
					</div>
				</div>
				
				<!-- Blog End -->
			
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
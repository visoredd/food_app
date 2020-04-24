<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>CakeFactory</title>
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
			
			<!-- Slider Start 
			#################################
				- THEMEPUNCH BANNER -
			#################################	-->

			<?php require_once('includes/slider.inc.php'); ?>
			<!-- Slider End -->
			
			<!-- Main Content -->
			<div class="main-content">
			
				<!-- Showcase Start -->
				<?php require_once('includes/showcase.inc.php'); ?>
				<!-- Showcase End -->
				
				<!-- Dishes Start -->
					
				<div class="dishes padd">
					<div class="container">
						<!-- Default Heading -->
						<div class="default-heading">
							<!-- Crown image -->
							<img class="img-responsive" src="img/crown.png" alt="" />
							<!-- Heading -->
							<h2>New Dishes</h2>
							<!-- Paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<!-- Border -->
							<div class="border"></div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6">	
								<div class="dishes-item-container">
									<!-- Image Frame -->
									<div class="img-frame">
										<!-- Image -->
										<img src="img/dish/dish5.jpg" class="img-responsive" alt="" />
										<!-- Block for on hover effect to image -->
										<div class="img-frame-hover">
											<!-- Hover Icon -->
											<a href="#"><i class="fa fa-cutlery"></i></a>
										</div>
									</div>
									<!-- Dish Details -->
									<div class="dish-details">
										<!-- Heading -->
										<h3>Delicious Chinese</h3>
										<!-- Paragraph -->
										<p>At vero eos et accusal gusto for ides residuum lores.</p>
										<!-- Button -->
										<a href="#" class="btn btn-danger btn-sm">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="dishes-item-container">
									<!-- Image Frame -->
									<div class="img-frame">
										<!-- Image -->
										<img src="img/dish/dish6.jpg" class="img-responsive" alt="" />
										<!-- Block for on hover effect to image -->
										<div class="img-frame-hover">
											<!-- Hover Icon -->
											<a href="#"><i class="fa fa-cutlery"></i></a>
										</div>
									</div>
									<!-- Dish Details -->
									<div class="dish-details">
										<!-- Heading -->
										<h3>Spicy Onion Rings</h3>
										<!-- Paragraph -->
										<p>At vero eos et accusal gusto for ides residuum lores.</p>
										<!-- Button -->
										<a href="#" class="btn btn-danger btn-sm">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="dishes-item-container">
									<!-- Image Frame -->
									<div class="img-frame">
										<!-- Image -->
										<img src="img/dish/dish7.jpg" class="img-responsive" alt="" />
										<!-- Block for on hover effect to image -->
										<div class="img-frame-hover">
											<!-- Hover Icon -->
											<a href="#"><i class="fa fa-cutlery"></i></a>
										</div>
									</div>
									<!-- Dish Details -->
									<div class="dish-details">
										<!-- Heading -->
										<h3>Cream Cheese Cup</h3>
										<!-- Paragraph -->
										<p>At vero eos et accusal gusto for ides residuum lores.</p>
										<!-- Button -->
										<a href="#" class="btn btn-danger btn-sm">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="dishes-item-container">
									<!-- Image Frame -->
									<div class="img-frame">
										<!-- Image -->
										<img src="img/dish/dish8.jpg" class="img-responsive" alt="" />
										<!-- Block for on hover effect to image -->
										<div class="img-frame-hover">
											<!-- Hover Icon -->
											<a href="#"><i class="fa fa-cutlery"></i></a>
										</div>
									</div>
									<!-- Dish Details -->
									<div class="dish-details">
										<!-- Heading -->
										<h3>Spicy Cheese Pizza</h3>
										<!-- Paragraph -->
										<p>At vero eos et accusal gusto for ides residuum lores.</p>
										<!-- Button -->
										<a href="#" class="btn btn-danger btn-sm">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				
				<!-- Dishes End -->
				
				<!-- menu Start -->
				
				<div class="menu padd">
					<div class="container">
						<!-- Default Heading -->
						<div class="default-heading">
							<!-- Crown image -->
							<img class="img-responsive" src="img/crown.png" alt="" />
							<!-- Heading -->
							<h2>Menu</h2>
							<!-- Paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<!-- Border -->
							<div class="border"></div>
						</div>
						<!-- Menu content container -->
						<div class="menu-container">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<!-- Menu header -->
									<div class="menu-head">
										<!-- Image for menu item -->
										<img class="menu-img img-responsive img-thumbnail" src="img/menu/menu1.jpg" alt="" />
										<!-- Menu title / Heading -->
										<h3>Seafood</h3>
										<!-- Border for above heading -->
										<div class="title-border br-red"></div>
									</div>
									<!-- Menu item details -->
									<div class="menu-details br-red">
										<!-- Menu list -->
										<ul class="list-unstyled">
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Fish</a> 
													<!-- Price badge -->
													<span class="pull-right">$12</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Consequent</a>
													<!-- Price badge -->
													<span class="pull-right">$9</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Praising Pain</a>
													<!-- Price badge -->
													<span class="pull-right">$19</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Exception Tint</a>
													<!-- Price badge -->
													<span class="pull-right">$6</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Laborious Rhys</a>
													<!-- Price badge -->
													<span class="pull-right">$29</span>
													<div class="clearfix"></div>
												</div>
											</li>
										</ul>
									</div><!-- / Menu details end -->
								</div>
								<div class="col-md-4 col-sm-4">
									<!-- Menu header -->
									<div class="menu-head">
										<!-- Image for menu item -->
										<img class="menu-img img-responsive img-thumbnail" src="img/menu/menu2.jpg" alt="" />
										<!-- Menu title / Heading -->
										<h3>Chicken</h3>
										<!-- Border for above heading -->
										<div class="title-border br-green"></div>
									</div>
									<!-- Menu item details -->
									<div class="menu-details br-green">
										<!-- Menu list -->
										<ul class="list-unstyled">
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Fried Chicken</a>
													<!-- Price badge -->
													<span class="pull-right">$29</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Chicken Curie</a>
													<!-- Price badge -->
													<span class="pull-right">$49</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Praising Pain</a>
													<!-- Price badge -->
													<span class="pull-right">$19</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Exception Tint</a>
													<!-- Price badge -->
													<span class="pull-right">$6</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Laborious Rhys</a>
													<!-- Price badge -->
													<span class="pull-right">$29</span>
													<div class="clearfix"></div>
												</div>
											</li>
										</ul>
									</div><!-- / Menu details end -->
								</div>
								<div class="col-md-4 col-sm-4">
									<!-- Menu header -->
									<div class="menu-head">
										<!-- Image for menu item -->
										<img class="menu-img img-responsive img-thumbnail" src="img/menu/menu3.jpg" alt="" />
										<!-- Menu title / Heading -->
										<h3>Dessert</h3>
										<!-- Border for above heading -->
										<div class="title-border br-lblue"></div>
									</div>
									<!-- Menu item details -->
									<div class="menu-details br-lblue">
										<!-- Menu list -->
										<ul class="list-unstyled">
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Choco Nuts</a>
													<!-- Price badge -->
													<span class="pull-right">$2</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Venial Cup</a>
													<!-- Price badge -->
													<span class="pull-right">$4</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Praising Pain</a>
													<!-- Price badge -->
													<span class="pull-right">$9</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Exception Tint</a>
													<!-- Price badge -->
													<span class="pull-right">$6</span>
													<div class="clearfix"></div>
												</div>
											</li>
											<li>
												<div class="menu-list-item">
													<!-- Icon -->
													<i class="fa fa-angle-right"></i> <a href="#">Laborious Rhys</a>
													<!-- Price badge -->
													<span class="pull-right">$5</span>
													<div class="clearfix"></div>
												</div>
											</li>
										</ul>
									</div><!-- / Menu details end -->
								</div>
							</div>
						</div> <!-- /Menu container end -->
					</div>
				</div>
				
				<!-- Menu End -->
				
				<!-- Pricing Start -->
				
				<div class="pricing padd">
					<div class="container">
						<!-- Default Heading -->
						<div class="default-heading">
							<!-- Crown image -->
							<img class="img-responsive" src="img/crown.png" alt="" />
							<!-- Heading -->
							<h2>Offer Price</h2>
							<!-- Paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<!-- Border -->
							<div class="border"></div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- Pricing list Item -->
								<div class="pricing-item">
									<!-- Image -->
									<a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish3.jpg" alt="" /></a>
									<!-- Pricing item details -->
									<div class="pricing-item-details">
										<!-- Heading -->
										<h3><a href="#">Mix-Veg Fried Rice</a></h3>
										<!-- Paragraph -->
										<p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
										<!-- Buy link -->
										<a class="btn btn-danger pull-right" href="#">Order now</a>
										<div class="clearfix"></div>
									</div>
									<!-- Tag -->
									<span class="hot-tag br-red">$45</span>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- Pricing list Item -->
								<div class="pricing-item">
									<!-- Image -->
									<a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish2.jpg" alt="" /></a>
									<!-- Pricing item details -->
									<div class="pricing-item-details">
										<!-- Heading -->
										<h3><a href="#">Spicy Fried Chicken</a></h3>
										<!-- Paragraph -->
										<p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
										<!-- Buy link -->
										<a class="btn btn-danger pull-right" href="#">Order now</a>
										<div class="clearfix"></div>
									</div>
									<!-- Tag -->
									<span class="hot-tag br-lblue">$19</span>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix visible-md"></div>
							<div class="col-md-6 col-sm-6">
								<!-- Pricing list Item -->
								<div class="pricing-item">
									<!-- Image -->
									<a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish4.jpg" alt="" /></a>
									<!-- Pricing item details -->
									<div class="pricing-item-details">
										<!-- Heading -->
										<h3><a href="#">Chinese Chicken Momo</a></h3>
										<!-- Paragraph -->
										<p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
										<!-- Buy link -->
										<a class="btn btn-danger pull-right" href="#">Order now</a>
										<div class="clearfix"></div>
									</div>
									<!-- Tag -->
									<span class="hot-tag br-green">$49</span>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- Pricing list Item -->
								<div class="pricing-item">
									<!-- Image -->
									<a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish1.jpg" alt="" /></a>
									<!-- Pricing item details -->
									<div class="pricing-item-details">
										<!-- Heading -->
										<h3><a href="#">Sushi</a></h3>
										<!-- Paragraph -->
										<p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
										<!-- Buy link -->
										<a class="btn btn-danger pull-right" href="#">Order now</a>
										<div class="clearfix"></div>
									</div>
									<!-- Tag -->
									<span class="hot-tag br-red">$29</span>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Pricing End -->
				
				<!-- Chefs Start -->
				
				<div class="chefs padd">
					<div class="container">
						<!-- Default Heading -->
						<div class="default-heading">
							<!-- Crown image -->
							<img class="img-responsive" src="img/crown.png" alt="" />
							<!-- Heading -->
							<h2>Our Chefs</h2>
							<!-- Paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<!-- Border -->
							<div class="border"></div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<!-- Chef Member -->
								<div class="chefs-member">
									<!-- Chefs member header -->
									<div class="chefs-head">
										<!-- Member background image -->
										<img class="chefs-back img-responsive" src="img/chef/c-back2.jpg" alt="" />
										<!-- chef member image -->
										<img class="chefs-img img-responsive" src="img/chef/4.jpg" alt="" />
									</div>
									<!--Name / Heading -->
									<h3><a href="#">Venison Gorky</a></h3>
									<!-- Member designation -->
									<span>Chefs Incharge</span>
									<!-- Social media links -->
									<div class="social">
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Chef Member -->
								<div class="chefs-member">
									<!-- Chefs member header -->
									<div class="chefs-head">
										<!-- Member background image -->
										<img class="chefs-back img-responsive" src="img/chef/c-back1.jpg" alt="" />
										<!-- chef member image -->
										<img class="chefs-img img-responsive" src="img/chef/7.jpg" alt="" />
									</div>
									<!--Name / Heading -->
									<h3><a href="#">Million Carey</a></h3>
									<!-- Member designation -->
									<span>Chefs Incharge</span>
									<!-- Social media links -->
									<div class="social">
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Chef Member -->
								<div class="chefs-member">
									<!-- Chefs member header -->
									<div class="chefs-head">
										<!-- Member background image -->
										<img class="chefs-back img-responsive" src="img/chef/c-back3.jpg" alt="" />
										<!-- chef member image -->
										<img class="chefs-img img-responsive" src="img/chef/2.jpg" alt="" />
									</div>
									<!--Name / Heading -->
									<h3><a href="#">Juliet Watson</a></h3>
									<!-- Member designation -->
									<span>Chefs Incharge</span>
									<!-- Social media links -->
									<div class="social">
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Chefs End -->
				
				<!-- Testimonial Start -->
				
				<div class="testimonial padd">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<!-- BLock heading -->
								<h3>Recent Dishes</h3>
								<!-- Flex slider Content -->
								<div class="flexslider-recent flexslider">
									<ul class="slides">
										<li>
											<!-- Image for background -->
											<img class="img-responsive" src="img/dish/dish9.jpg" alt="" />
											<!-- Slide content -->
											<div class="slider-content">
												<!-- Heading -->
												<h4>Healthy Salad</h4>
												<!-- Paragraph -->
												<p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
											</div>
										</li>
										<li>
											<!-- Image for background -->
											<img class="img-responsive" src="img/dish/dish10.jpg" alt="" />
											<!-- Slide content -->
											<div class="slider-content">
												<!-- Heading -->
												<h4>White Vanilla Cake</h4>
												<!-- Paragraph -->
												<p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
											</div>
										</li>
										<li>
											<!-- Image for background -->
											<img class="img-responsive" src="img/dish/dish11.jpg" alt="" />
											<!-- Slide content -->
											<div class="slider-content">
												<!-- Heading -->
												<h4>Tasty Fried Fish</h4>
												<!-- Paragraph -->
												<p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<!-- BLock heading -->
								<h3>Our Client Says</h3>
								<!-- Flex slider Content -->
								<div class="flexslider-testimonial flexslider">
									<ul class="slides">
										<li>
											<!-- Testimonial Content -->
											<div class="testimonial-item">
												<!-- Quote -->
												<span class="quote lblue">&#8220;</span> 
												<!-- Your comments -->
												<blockquote>
													<!-- Paragraph -->
													<p>Sed ut perspiciatis unde omnis iste natus error sitvolu accusative ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
												</blockquote>
												<!-- Heading with image -->
												<h4><img class="img-responsive img-circle" src="img/user.jpg" alt="" /> Jhon Doe<span>, your designation</span></h4>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Testimonial Content -->
											<div class="testimonial-item">
												<!-- Quote -->
												<span class="quote lblue">&#8220;</span> 
												<!-- Your comments -->
												<blockquote>
													<!-- Paragraph -->
													<p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the dislikes.</p>
												</blockquote>
												<!-- Heading with image -->
												<h4><img class="img-responsive img-circle" src="img/user.jpg" alt="" /> Marten<span>, your designation</span></h4>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Testimonial Content -->
											<div class="testimonial-item">
												<!-- Quote -->
												<span class="quote lblue">&#8220;</span> 
												<!-- Your comments -->
												<blockquote>
													<!-- Paragraph -->
													<p>At vero eos et accusamus et iusto odio dignis simos ducimus qui bland itiis praes entium volup tatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non laboratory.</p>
												</blockquote>
												<!-- Heading with image -->
												<h4><img class="img-responsive img-circle" src="img/user.jpg" alt="" /> Katrina Doe<span>, your designation</span></h4>
												<div class="clearfix"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial End -->
				
				
			</div><!-- / Main Content End -->	
			
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
		/* ******************************************** */
		/*  JS for SLIDER REVOLUTION  */
		/* ******************************************** */
				jQuery(document).ready(function() {
					   jQuery('.tp-banner').revolution(
						{
							delay:9000,
							startheight:500,
							
							hideThumbs:10,
							
							navigationType:"bullet",	
														
							hideArrowsOnMobile:"on",
							
							touchenabled:"on",
							onHoverStop:"on",
							
							navOffsetHorizontal:0,
							navOffsetVertical:20,
							
							stopAtSlide:-1,
							stopAfterLoops:-1,

							shadow:0,
							
							fullWidth:"on",
							fullScreen:"off"
						});
				});
		/* ******************************************** */
		/*  JS for FlexSlider  */
		/* ******************************************** */
		
			$(window).load(function(){
				$('.flexslider-recent').flexslider({
					animation:		"fade",
					animationSpeed:	1000,
					controlNav:		true,
					directionNav:	false
				});
				$('.flexslider-testimonial').flexslider({
					animation: 		"fade",
					slideshowSpeed:	5000,
					animationSpeed:	1000,
					controlNav:		true,
					directionNav:	false
				});
			});
		
		/* Gallery */

		jQuery(".gallery-img-link").prettyPhoto({
		   overlay_gallery: false, social_tools: false
		});
		
		</script>
	</body>	
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Components - CakeFactory</title>
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
					<h2 class="white">Components</h2>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Components</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Components Start -->
				
				<div class="component">
					<div class="container">
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Heading</h3>
							<!-- Components -->
							<h1>Heading</h1>
							<h2>Heading</h2>
							<h4>Heading</h4>
							<h5>Heading</h5>
							<h6>Heading</h6>
						</div>
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Paragraph</h3>
							<!-- Components -->
							<p><u>Normal Paragraph</u> - sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Labels</h3>
							<!-- Labels -->
							<span class="label label-default">Default</span>
							<span class="label label-success">Success</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-info">Info</span>
							<span class="label label-danger">Danger</span>
							<span class="label label-primary">Primary</span>
						</div>
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Buttons</h3>
							<!-- Buttons -->
							<button class="btn btn-default" type="button">Button</button>
							<button class="btn btn-danger" type="button">Button</button>
							<button class="btn btn-info" type="button">Button</button>
							<button class="btn btn-warning" type="button">Button</button>
							<button class="btn btn-primary" type="button">Button</button>
							<button class="btn btn-success" type="button">Button</button>
						</div>
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Buttons Group</h3>
							<!-- Buttons -->
							<div class="btn-group">
								<button type="button" class="btn btn-danger">Left</button>
								<button type="button" class="btn btn-danger">Middle</button>
								<button type="button" class="btn btn-danger">Right</button>
							</div>
						</div>
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Button Dropdown</h3>
							<!-- Buttons -->
							<div class="btn-group">
							  <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Dropdown &nbsp;<span class="caret"></span></button>
							  <ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
							  </ul>
							</div>
						</div>	
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Progress Bar</h3>
							<!-- Progress Bar -->
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									<span class="sr-only">80% Complete (success)</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									<span class="sr-only">100% Complete (success)</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
									<span class="sr-only">70% Complete (success)</span>
							  </div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
									<span class="sr-only">90% Complete (success)</span>
							  </div>
							</div>
						</div>
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Tabs</h3>
							<!-- tabs -->
							<ul id="myTab" class="nav nav-tabs">
							  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
							  <li><a href="#profile" data-toggle="tab">Profile</a></li>
							  <li><a href="#cont" data-toggle="tab">Content</a></li>
							</ul>
							<div id="myTabContent" class="tab-content">
							  <div class="tab-pane fade in active" id="home">
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
							  </div>
							  <div class="tab-pane fade" id="profile">
								<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
							  </div>
							  <div class="tab-pane fade" id="cont">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							  </div>
							</div>
						</div>
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Pagination</h3>
							<!-- Pagination list -->
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">6</a></li>
								<li><a href="#">7</a></li>
								<li><a href="#">8</a></li>
								<li><a href="#">9</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Pager</h3>
							<ul class="pager">
								<li><a href="#">Previous</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
						<!-- Components content -->
						<div class="component-content">
							<!-- Heading -->
							<h3>Model</h3>
							<!-- Button to trigger modal -->
							<a data-toggle="modal" href="#shoppingcart1" class="btn btn-danger">Launch demo modal</a>
						</div>
					</div>
				</div>
				
				<!-- Components End -->
			
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
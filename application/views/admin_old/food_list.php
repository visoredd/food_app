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
					<h2 class="white">Place</h2>
					<ol class="breadcrumb">
						<li><a href="<?php echo base_url();?>admin">Home</a></li>
						<li class="active">Rows</li>
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
								<?php require_once('includes/alert_message.inc.php'); ?>
						    	<table class="table">
						    		<tbody>
						    			<tr>
						    				<td>Location</td>
						    				<td>Theater</td>
						    				<td>Category</td>
						    				<td>Food Name</td>
						    				<td></td>
						    			</tr>
						    			<tr>
						    				<td>
						    					<input type="text" name="search_item_location" class="form-control"/>
						    				</td>
						    				<td>
						    					<input type="text" name="search_item_theater" class="form-control"/>
						    				</td>
						    				<td>
						    					<input type="text" name="search_item_category" class="form-control"/>
						    				</td>
						    				<td>
						    					<input type="text" name="search_item_name" class="form-control"/>
						    				</td>
						    				<td>
						    					<button type="submit" class="btn btn-default">Search</button>
						    				</td>
						    			</tr>
						    		</tbody>
						    	</table>
								<div class="panel panel-danger">
								    <div class="panel-heading app_heading_bg app_panel_heading"><i class="fa fa-angle-double-right"></i> Food List</div>
								    <div class="panel-body">
								    	<table class="table table-bordered">
								    		<thead class="my_table_default">
								    			<tr>
								    				<th>No.</th>
								    				<th>Name</th>
								    				<th>Category</th>
								    				<th>Description</th>
								    				<th>Price</th>
								    				<th>Theater</th>
								    				<th>Location</th>
								    				<th class="text_center">Action</th>
								    			</tr>
								    		</thead>
								    		<tbody>
							    				<?php
							    					if(! empty($food_list)){
								    					$i = 1;
								    					foreach ($food_list as $food) {
								    						echo '
								    							<tr>
								    								<td>'.$i.'</td>
												    				<td>'.ucfirst($food['item_name']).'</td>
												    				<td>'.$food['category_name'].'</td>
												    				<td>'.$food['item_desc'].'</td>
												    				<td>Rs. '.$food['item_price'].'</td>
												    				<td>'.$food['theater_name'].'</td>
												    				<td>'.$food['location_name'].'</td>
												    				<td align="center">
												    					<button class="btn btn-default">Edit</button>
												    					<button class="btn btn-danger">Delete</button>
												    				</td>
								    							</tr>
								    						';
								    						$i++;
								    					}
							    					} else {
							    						echo '
							    							<tr><td colspan="4" align = "center">No Food found !</td></tr>
							    						';
							    					}
							    				?>
								    		</tbody>
								    	</table>
								    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Shopping End -->
				
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
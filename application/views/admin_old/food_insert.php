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
						<li class="active">Food Insert</li>
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
								<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				            		<div class="panel panel-danger" >
				                    	<div class="panel-heading app_heading_bg">
				                        	<div class="panel-title">Insert Food</div>
				                    	</div> 
				                    	<div style="padding-top:30px;" class="panel-body">
				                            <form id="insert_food_form" action="<?php echo base_url().'product/process_insert_food'; ?>" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
				                                <div style="min-height:250px;">
						                            <div style="margin-bottom: 25px" class="input-group col-md-12">
						                            	<div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Select Theater:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<select id="dates-field2" class="multiselect-ui form-control" multiple="multiple">
														           <?php
							                                			foreach ($theater_list as $theater) {
							                                				echo '<option value="'.$theater->th_id.'">'.$theater->th_name.'</option>';
							                                			}
							                                		?>
														        </select>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Food Name:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="food_name" id="food_name" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Description:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="food_desc" id="food_desc" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Price:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="food_price" id="food_price" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Image:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="file" name="food_image" id="food_image" class="form-control">
							                                </div>
							                            </div>
						                            </div>
				                            	</div>
				                                <div class="form-group">
				                                    <div class="col-md-12 control">
				                                        <div style="border-top: 1px solid#888; padding:15px 60px 0 60px; font-size:85%" >
				                                      		<center><button id="btn-login" type="submit" class="btn btn-danger">Add</button></center>
				                                        </div>
				                                    </div>
				                                </div>    
				                            </form>
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
		$(function() {
		    $('.multiselect-ui').multiselect({
		        includeSelectAllOption: true
		    });
		});

		$("#insert_food_form").validate({
			rules: {
		    	food_location: "required",
		    	food_theater: "required",
		    	food_name: {
		      		required: true,
		      		// lettersonly: true
		    	}
		  	},
		  	messages: {
		  		food_location: "Select Location!",
		  		food_theater: "Select Theater!",
		  		food_name: {
			        required: "Enter Auditorium Name!",
			        // lettersonly: "Letters only please!"
			    }
			}
		});
		</script>
	</body>	
</html>
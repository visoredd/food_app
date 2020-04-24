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
						<li class="active">All</li>
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
				                        	<div class="panel-title">Create Theatre</div>
				                    	</div> 
				                    	<div style="padding-top:30px;" class="panel-body">
				                            <form id="insert_theter_form" action="<?php echo base_url().'place/ctreate_theatre'; ?>" method="post" class="form-horizontal" role="form">
				                                <div style="min-height:250px;">
						                            <div style="margin-bottom: 25px" class="input-group col-md-12">
						                            	<!-- <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Select Location:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<select id="location" name="location" class="form-control">
							                                		<option value ="" >----------------------Select---------------------</option>
							                                		<?php
							                                			foreach ($location_list as $location) {
							                                				echo '<option value="'.$location->location_id.'">'.$location->address.'</option>';
							                                			}
							                                		?>
							                                	</select>
							                                </div>
							                            </div> -->
						                            	<div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Theatre Name:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="theatre_name" id="theatre_name" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Address Line 1:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<textarea name="theatre_address_line_1" id="theatre_address_line_1" class="form-control"></textarea>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Address Line 2:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<textarea name="theatre_address_line_2" id="theatre_address_line_2" class="form-control"></textarea>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">City:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="theatre_city" id="theatre_city" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Pincode:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="theatre_pincode" id="theatre_pincode" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Latitude:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="theatre_latitude" id="theatre_latitude" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Longitude:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="theatre_longitude" id="theatre_longitude" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Email:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="theatre_email" id="theatre_email" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Telephone:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="theatre_telephone" id="theatre_telephone" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Mobile:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="theatre_mobile" id="theatre_mobile" class="form-control">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Contact Person:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="theatre_person" id="theatre_person" class="form-control">
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
		// jQuery.validator.addMethod("lettersonly", function(value, element) {
		//   return this.optional(element) || /^[a-z]+$/i.test(value);
		// }, "Letters only please!"); 

		$("#insert_theter_form").validate({
			rules: {
		    	// location: "required",
		    	theatre_name: "required",
		    	theatre_address_line_1: "required",
		    	// theatre_address_line_2: "required",
		    	theatre_city: "required",
		    	theatre_pincode: {
		      		required: true,
		      		number: true
		    	},
		    	theatre_latitude: {
		      		required: true,
		      		number: true
		    	},
		    	theatre_longitude: {
		      		required: true,
		      		number: true
		    	},
		    	theatre_email: {
		      		required: true,
		      		email: true
		    	},
		    	theatre_mobile: {
		      		required: true,
		      		number: true
		    	},
		    	theatre_person: {
		      		required: true,
		      		// lettersonly: true
		    	},
		  	},
		  	messages: {
		  		// location: "Select Location!",
		  		theatre_name: "Enter Theater Name!",
		  		theatre_address_line_1: "Enter Theater Address!",
		  		// theatre_address_line_2: "Enter Theater Address!",
		  		theatre_city: "Enter City!",
		  		theatre_pincode: {
			        required: "Enter Pincode!",
			        number: "Decimal Numbers Only!"
			    },
			    theatre_latitude: {
			        required: "Enter Latitude!",
			        number: "Decimal Numbers Only!"
			    },
			    theatre_longitude: {
			        required: "Enter Longituted!",
			        number: "Decimal Numbers Only!"
			    },
			    theatre_email: {
			        required: "Enter Email!",
			        email: "Enter valid Email!"
			    },
			    theatre_mobile: {
			        required: "Enter Mobile Number!",
			        // lettersonly: "Letters only please!"
			    }
			}
		});
		</script>
	</body>	
</html>
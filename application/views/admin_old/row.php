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
						<li class="active">Row</li>
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
				                        	<div class="panel-title">Create Row</div>
				                    	</div> 
				                    	<div style="padding-top:30px;" class="panel-body">
				                            <form id="insert_row_form" action="<?php echo base_url().'place/ctreate_row'; ?>" method="post" class="form-horizontal" role="form">
				                                <div style="min-height:250px;">
						                            <div style="margin-bottom: 25px" class="input-group col-md-12">
						                            	<div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Select Location:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<select id="row_location" name="row_location" class="form-control">
							                                		<option value ="" >----------------------Select---------------------</option>
							                                		<?php
							                                			foreach ($location_list as $location) {
							                                				echo '<option value="'.$location->location_id.'">'.$location->address.'</option>';
							                                			}
							                                		?>
							                                	</select>
							                                </div>
							                            </div>
						                            	<div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Select Theater:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<select id="row_theater" name="row_theater" class="form-control">
							                                		<option value ="" >----------------------Select---------------------</option>
							                                	</select>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Select Auditorium:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<select id="row_auditorium" name="row_auditorium" class="form-control">
							                                		<option value ="" >----------------------Select---------------------</option>
							                                	</select>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Row Name:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" id="row_name" name="row_name" class="form-control"/>
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
		$(function(){
		    $("#row_location").change(function(){
		        var location_id  =   $("#row_location").val();
		        $.ajax({
		            url: "<?php echo base_url().'place/get_theater_by_location_id' ?>",
		            type: 'POST',
		            async : false,
		            dataType: "json",
		            data: {location_id : location_id},
		                success: function(data) {
		                    $("#row_theater").html(data);
		                }
		        });
		    });
		});

		$(function(){
		    $("#row_theater").change(function(){
		        var theater_id  =   $("#row_theater").val();
		        $.ajax({
		            url: "<?php echo base_url().'place/get_auditorium_by_theater_id' ?>",
		            type: 'POST',
		            async : false,
		            dataType: "json",
		            data: {theater_id : theater_id},
		                success: function(data) {
		                    $("#row_auditorium").html(data);
		                }
		        });
		    });
		});

		// jQuery.validator.addMethod("lettersonly", function(value, element) {
		//   return this.optional(element) || /^[a-z]+$/i.test(value);
		// }, "Letters only please"); 

		$("#insert_row_form").validate({
			rules: {
		    	row_location: "required",
		    	row_theater: "required",
		    	row_auditorium: "required",
		    	row_name: {
		      		required: true,
		      		// lettersonly: true
		    	}
		  	},
		  	messages: {
		  		row_location: "Select Location!",
		  		row_theater: "Select Theater!",
		  		row_auditorium: "Select Auditorium!",
		  		row_name: {
			        required: "Enter Row Name!",
			        // lettersonly: "Letters only please!"
			    }
			}
		});
		</script>
	</body>	
</html>
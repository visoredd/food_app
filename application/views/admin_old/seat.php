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
						<li class="active">Seat</li>
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
				                        	<div class="panel-title">Create Seat</div>
				                    	</div> 
				                    	<div style="padding-top:30px;" class="panel-body">
				                            <form id="insert_seat_form" action="<?php echo base_url().'place/ctreate_seat'; ?>" method="post" class="form-horizontal" role="form">
				                                <div style="min-height:250px;">
						                            <div style="margin-bottom: 25px" class="input-group col-md-12">
						                            	<div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Select Location:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<select id="seat_location" name="seat_location" class="form-control">
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
							                                	<select id="seat_theater" name="seat_theater" class="form-control">
							                                		<option value ="" >----------------------Select---------------------</option>
							                                	</select>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Select Auditorium:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<select id="seat_auditorium" name="seat_auditorium" class="form-control">
							                                		<option value ="" >----------------------Select---------------------</option>
							                                	</select>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Select Row:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<select id="seat_row" name="seat_row" class="form-control">
							                                		<option value ="" >----------------------Select---------------------</option>
							                                	</select>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Seat Name (or) No:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" id="seat_name" name="seat_name" class="form-control"/>
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
		    $("#seat_location").change(function(){
		        var location_id  =   $("#seat_location").val();
		        $.ajax({
		            url: "<?php echo base_url().'place/get_theater_by_location_id' ?>",
		            type: 'POST',
		            async : false,
		            dataType: "json",
		            data: {location_id : location_id},
		                success: function(data) {
		                    $("#seat_theater").html(data);
		                }
		        });
		    });
		});

		$(function(){
		    $("#seat_theater").change(function(){
		        var theater_id  =   $("#seat_theater").val();
		        $.ajax({
		            url: "<?php echo base_url().'place/get_auditorium_by_theater_id' ?>",
		            type: 'POST',
		            async : false,
		            dataType: "json",
		            data: {theater_id : theater_id},
		                success: function(data) {
		                    $("#seat_auditorium").html(data);
		                }
		        });
		    });
		});

		$(function(){
		    $("#seat_auditorium").change(function(){
		        var auditorium_id  =   $("#seat_auditorium").val();
		        $.ajax({
		            url: "<?php echo base_url().'place/get_row_by_auditorium_id' ?>",
		            type: 'POST',
		            async : false,
		            dataType: "json",
		            data: {auditorium_id : auditorium_id},
		                success: function(data) {
		                    $("#seat_row").html(data);
		                }
		        });
		    });
		});

		// jQuery.validator.addMethod("lettersonly", function(value, element) {
		//   return this.optional(element) || /^[a-z]+$/i.test(value);
		// }, "Letters only please"); 

		$("#insert_seat_form").validate({
			rules: {
		    	seat_location: "required",
		    	seat_theater: "required",
		    	seat_auditorium: "required",
		    	seat_row: "required",
		    	seat_name: {
		      		required: true,
		      		// lettersonly: true
		    	}
		  	},
		  	messages: {
		  		seat_location: "Select Location!",
		  		seat_theater: "Select Theater!",
		  		seat_auditorium: "Select Auditorium!",
		  		seat_row: "Select Row!",
		  		seat_name: {
			        required: "Enter Seat Name (or) No!",
			        // lettersonly: "Letters only please!"
			    }
			}
		});
		</script>
	</body>	
</html>
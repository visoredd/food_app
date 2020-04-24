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
						<li class="active">Generate Coupon Code </li>
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
				                        	<div class="panel-title">Generate Coupon Code</div>
				                    	</div> 
				                    	<div style="padding-top:30px;" class="panel-body">
				                            <form id="generate_coupon_code_form" action="<?php echo base_url().'product/process_generate_coupon_code'; ?>" method="post" class="form-horizontal" role="form">
				                                <div style="min-height:250px;">
						                            <div style="margin-bottom: 25px" class="input-group col-md-12">
						                            	<div class="form-group">
							                                <div class="col-md-12">
							                                	<center>
								                                	
								                                </center>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-md-6">
							                                	<label class="control-label font_red app_title">Coupon Code:</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<div class="input-group">
																	<input type="text" name="coupon_code" id="coupon_code" value="<?php echo $coupon_code; ?>" disabled class="form-control"/>
																  	<span class="input-group-btn">
																  		<button type="button" id="generate_code" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i></button>
																  	</span>
																</div>
							                                	<input type="hidden" name="coupon_code_h" id="coupon_code_h" value="<?php echo $coupon_code; ?>" class="form-control"/>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                            	<div class="col-md-6">
							                                	<label class="control-label font_red app_title">Discount Type:</label>
							                                </div>
							                                <div class="col-md-6">
								                                <select id="discount_type" name="discount_type" class="form-control">
								                                	<option value=""> - - - - - - - - - - - SELECT - - - - - - - - - - - </option>
								                                	<option value="flat_amount">Flat Amount</option>
								                                	<option value="percentage">Percentage</option>
								                                </select>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                            	<div class="col-md-6">
							                                	<label class="control-label font_red app_title">Discount:</label>
							                                </div>
							                                <div class="col-md-6">
								                                <input type="text" name="discount" placeholder="0.00" class="form-control"/>
							                                </div>
							                            </div>
							                            <div class="form-group">
							                            	<div class="col-md-6">
							                                	<label class="control-label font_red app_title">Maximum Discount (Rs.):</label>
							                                </div>
							                                <div class="col-md-6">
								                                <input type="text" name="max_discount" placeholder="0.00" class="form-control"/>
							                                </div>
							                            </div>
							                             <div class="form-group">
							                            	<div class="col-md-6">
							                                	<label class="control-label font_red app_title">On order & Above (Rs.):</label>
							                                </div>
							                                <div class="col-md-6">
							                                	<input type="text" name="on_order_rs" placeholder="0.00" class="form-control"/>	
							                                </div>
							                            </div>
							                            <div class="form-group">
							                            	<div class="col-md-6">
							                                	<label class="control-label font_red app_title">Description:</label>
							                                </div>
							                                <div class="col-md-6">
								                                	<textarea name="coupon_code_desc" placeholder="Write description here..." class="form-control"></textarea>
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
		$("#generate_code").click(function () {
			$.ajax({
	            url: "<?php echo base_url().'product/regenerate_coupon_code' ?>",
	            // type: 'POST',
	            async : false,
	            dataType: "json",
	            // data: {},
                success: function(data) {
                    $("#coupon_code").val(data);
                    $("#coupon_code_h").val(data);
                }
	        });
		});

		$("#generate_coupon_code_form").validate({
			rules: {
		    	discount_type: "required",
		    	discount: {
		      		required: true,
		      		number: true
		    	},
				max_discount: {
		      		required: true,
		      		number: true
		    	},
		    	on_order_rs: {
		      		required: true,
		      		number: true
		    	},
		  	},
		  	messages: {
		  		discount_type: "Select Discount Type !",		  		
		  		discount: {
		  			required: "Enter Discount!",
			        number: "Decimal Numbers Only!"
			    },		  		
		  		on_order_rs: {
		  			required: "Enter Maximum Discount Amount !",
			        number: "Decimal Numbers Only!"
			    },
			    max_discount: {
		  			required: "Enter On Order Amount !",
			        number: "Decimal Numbers Only!"
			    },	  		
			}
		});
		</script>
	</body>	
</html>
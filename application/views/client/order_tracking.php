<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Checkout - CakeFactory</title>
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
					<h2 class="white">Order</h2>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="items.html">Shopping</a></li>
						<li><a href="item-single.html">Order</a></li>
						<li class="active">Track</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->

			<!-- Inner Content -->
			<div class="inner-page padd">
				<!-- Checkout Start -->
				<div class="checkout">
					<div class="container">
					<!-- Heading -->
					<div class="row">
						<div class="col-md-12">
							<h4>My Order</h4>
							<div class="row msd-col-6">
								<table id="mytable" class="table table-bordred table-striped my_table_red">
				                   <thead>
										 <th>Order ID: #<?php echo $order_deail[0]->order_id;?></th>
				                   </thead>
				                   <tbody>
				                   		<tr>
				                   			<td>
				                   				<div class="container">
													 <div class="row bs-wizard" style="border-bottom:0;">
										                <div class="col-xs-3 bs-wizard-step complete">
										                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
										                  <div class="progress"><div class="progress-bar"></div></div>
										                  <a href="#" class="bs-wizard-dot"></a>
										                  <div class="bs-wizard-info text-center">Order</div>
										                </div>
										                
										                <div class="col-xs-3 bs-wizard-step <?php if((ucfirst($order_deail[0]->order_status) == 'Taken') || (ucfirst($order_deail[0]->order_status) == 'Delivered')){ echo 'complete';} else { echo 'disabled';}?>"><!-- complete -->
										                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
										                  <div class="progress"><div class="progress-bar"></div></div>
										                  <a href="#" class="bs-wizard-dot"></a>
										                  <div class="bs-wizard-info text-center">Order Taken</div>
										                </div>
										                
										                <div class="col-xs-3 bs-wizard-step <?php if(ucfirst($order_deail[0]->order_status) == 'Delivered'){ echo 'complete';} else { echo 'disabled';}?>"><!-- active -->
										                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
										                  <div class="progress"><div class="progress-bar"></div></div>
										                  <a href="#" class="bs-wizard-dot"></a>
										                  <div class="bs-wizard-info text-center">Out of delivery</div>
										                </div>
										            </div>
										        </div>
				                   			</td>
					                   	</tr>
				                   </tbody>
				                </table>
							</div>
						</div>
					</div>
					<div class="row form-group">
							<div class="col-md-6">
								<form action ="<?php echo base_url().'shopping/change_order_status'; ?>" method="post">
									<table id="mytable" class="table table-bordred table-striped">
					                   <thead class="font_red">
					                   		<tr align="center">
												<th colspan="2" align="center">Have you recieved you order?</th>
					                   		</tr>
					                   </thead>
					                   <tbody>
					                   		<tr class="recived_order_table">
					                   			<td>
					                   				<button type="submit" class="btn btn-default" name="yes" value="yes">YES</button>
					                   			</td>
					                   			<td>
					                   				<button type="submit" class="btn btn-default button_font_red" name="no" value="no">NO</button>
					                   			</td>
						                   	</tr>
					                   </tbody>
					                </table>
								</form>
							</div>
						</div>
				</div>
			</div>
				
				<!-- Checkout End -->
			
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
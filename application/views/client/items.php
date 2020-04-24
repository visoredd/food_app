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
								<?php
									$i = 0;
									$cart_session = @$this->session->userdata('cart_session');
									if(!empty($items)){
										foreach ($items as $item) {
											echo '
												<div class="col-md-6 col-sm-6">
												<div class="shopping-item">
														<div class="col-md-4">
															<img class="img-responsive" src="'.$item["item_image"].'" alt="" />
														</div>
														<div class="col-md-8">
															<p class="item_title"><a href="<?php echo base_url();?>shopping/order_now">'.$item["item_name"].'</a></p>
															<p>'.$item["item_desc"].'</p>
															<p>Rs. '.$item["item_price"].'</p>
															<div id="add_button_group">
																<div id="add_button_group_1" class="btn-group">
																	<button type="button" class="btn btn-default" onclick ="add_qty_1(this);">Add</button>
																	<button type="button" class="btn btn-danger" onclick="add_qty_1(this);">+</button>
																</div>
																<div id="add_button_group_2" style="display:none" class="input-group qty_div_size">
																  <span class="input-group-btn">
																    <button class="btn btn-danger less_qty" type="button" position="'.$i.'" ">-</button>
																  </span>
																  <input type="text" class="form-control qty_text_size qty'.$item["item_id"].'" name="qty" id="qty['.$i.']" value="1" onkeypress="return numberOnly(event)">
																  <span class="input-group-btn">
																        <button class="btn btn-danger add_qty" type="button" position="'.$i.'"">+</button>
																   </span>
																</div>
															</div>
														</div>
														<!-- Shopping item hover block & link -->
														<div class="item-hover br-red hidden-xs"></div>
														<a class="link hidden-xs" href="#"><input type="button" class="add_to_cart_btn add_to_cart" id="add_to_cart" product_id="'.$item["item_id"].'"value="Add to cart"/></a>
												</div>
											</div>
											';
											$i++;
										}
									} else {
										echo 'No result found !';
									}

								?>
							</div>
							<!-- Pagination -->
							<div class="shopping-pagination">
								<?php
									if($page_links != ''){
										echo $page_links;
									}
								?>

								<!-- <ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul> -->
							</div>
							<!-- Pagination end-->
						</div>
					</div>
				</div>
				
				<!-- Shopping End -->
			
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
		function add_qty_1(el) {
			 $(el).closest('#add_button_group').find('#add_button_group_1').hide();
			 $(el).closest('#add_button_group').find('#add_button_group_2').show();
		}
		function numberOnly(numb) {
	        var numbInput = (numb.which) ? numb.which : event.keyCode
				if (numbInput > 31 && (numbInput < 48 || numbInput > 57))
	                  return false;
	 
	            return true;
	    }
		$(".add_qty").click(function(){
			var position = $(this).attr('position');
			var qty = $("#qty\\["+position+"\\]").val();
			qty++;
			$("#qty\\["+position+"\\]").val(qty);
			
		});
		
		$(".less_qty").click(function(){
			var position = $(this).attr('position');
			var qty = $("#qty\\["+position+"\\]").val();
			qty--;
			if(qty >= 0){
				$("#qty\\["+position+"\\]").val(qty);
			}
			
		});
		$(".add_to_cart").click(function(){
			var product_id = $(this).attr('product_id');
			var qty = $('.qty'+product_id).val();
			var total_harga = $("#total").val();
			
			if(qty == 0){
				alert('Minumum quantity 1');
				return false;
			} else {
				var dataString  = { product_id  : product_id , qty : qty };
				$.ajax({
	
					type: "POST",
					url: "<?php echo base_url();?>cart",
					data: dataString,
					dataType: "json",
					cache		: false,
					success: function(data){
						$("#update_cart").html(data.update_cart);
						alert('Success add to cart...');
					} ,error: function(xhr, status, error) {
						alert(status);
					},
				});
			}
			
		});
		
		</script>
	</body>	
</html>
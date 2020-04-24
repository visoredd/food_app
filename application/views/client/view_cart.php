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
					<h2 class="white">Checkout</h2>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="items.html">Shopping</a></li>
						<li><a href="item-single.html">Order Now</a></li>
						<li class="active">Checkout</li>
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
					
					<?php 
						if ($this->session->userdata('success_message')){
							echo '<div class="alert alert-success">
								  	<strong>Success! </strong>'.$this->session->userdata('success_message').'
								</div>';
							$this->session->unset_userdata('success_message');
						} else{ ?>
							<h4>Your Cart Summary</h4>
							<div class="row">
								<div class="table-responsive">
		              				<table id="mytable" class="table table-bordred table-striped my_table_red">
					                   <thead>
											 <th>Product</th>
						                     <th>Photo</th>
											 <th>Price</th>
											 <th>Quantity</th>
											 <th>Total</th>
										     <th>Delete</th>
					                   </thead>
					                   <tbody id="tb_checkout">
						   				<?php
											if($cart_session){
												$i = 0;
												$total =0;
												foreach($cart_session as $cs=>$value){
													$row = $this->cart_model->product_detail_by_id($cs);
													$total += $row->item_price*$value;
										?>
										<tr id="tr<?php echo $cs;?>">
										  <td><?php echo $row->item_name;?></td>
										  <td><img src="<?php if($row->item_image){echo $row->item_image;} else {echo 'no_image.png';}?>" width="100" ></td>
										  <td>Rs. <?php echo $row->item_price;?></td>
										  <td>
												<div class="input-group" style="width:120px">
													<span class="input-group-btn">
														<button type="button" class="btn btn-danger btn-number less_qty" position="<?php echo $i;?>">
														<span class="glyphicon glyphicon-minus">-</span>
														</button>
													</span>
													
														<input type="text" class="form-control qty" value="<?php echo $value;?>" style="text-align:right" onkeypress="return numbOnly(event)" id="qty[<?php echo $i;?>]">
														
														
													<span class="input-group-btn">
														<button type="button" class="btn btn-danger btn-number add_qty" position="<?php echo $i;?>">
														<span class="glyphicon glyphicon-plus">+</span>
														</button>
													</span>
												</div>
											
									
										  
										  <input type="hidden" class="product_id"  id="product_id[<?php echo $i;?>]" value="<?php echo $cs;?>">
										  <input type="hidden" class="product_price"  id="product_price[<?php echo $i;?>]" value="<?php echo $row->item_price;?>">
										  
										  
										  </td>
										  <td>Rs. <span id="span_total<?php echo $cs;?>"><?php echo $row->item_price*$value;?></span></td>
										  <td>
											<a class="delete_cart btn btn-danger btn-xs" title="Delete" style="cursor:pointer" product_id="<?php echo $cs;?>" position="<?php echo $i;?>"><span class="fa fa-trash-o"></span></a>		
										  </td>
										</tr>
							
									<?php
									$i++;
									}?>
									<input type="hidden" id="total" value="<?php echo $total;?>">
									<tr id="tr_total">
									  <td colspan="4" align="right">Total &nbsp;</td>
									  <td>Rs. <span id="span_all_total"><?php echo $total;?></span></td>
									  <td>&nbsp;</td>
									</tr>
									<?php
									
									} else {
									
									?>
									
									<tr>
									  <td colspan="6" align="center">Cart empty</td>
									</tr>
									
									<?php
									}
									?>
		    
		                   </tbody>
						</table>
					</div>
					<?php if($cart_session){ ?>
						<div class="row form-group pull-right">
							<span id="button_bottom">
							<button class="btn btn-danger update_cart" type="button" >Update Cart</button>
							<a href="<?php echo base_url().'checkout' ?>"><button class="btn btn-danger RbtnMargin" type="button">Checkout</button></a>
							</span>
						</div>
					<?php } ?>
					<?php } ?>
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
		$(".update_cart").click(function(){
			
			
			var total = $("#total").val();
			
			if(!total){
				alert('Cart empty');
				return false;
			} 
			
			if(total == 0){
				alert('Cart empty');
				return false;
			} 
			
			var notif = false;
			var qty = new Array();
			var product_id = new Array();
			var product_price = new Array();
			var i = 0;
			var new_total = 0;
			
			$(".qty").each(function(){
				if($(this).val() == 0){
					notif = true;
				}
				qty.push($(this).val());
			});
			
			$(".product_price").each(function(){
				product_price.push($(this).val());
			});
			
			
			
							
			
			
			if(notif == true){
				alert('Minumum quantity 1');
				return false;
			} else {
				
				
				$(".product_id").each(function(){
								product_id.push($(this).val());
								$('#span_total'+$(this).val()).html(product_price[i]*qty[i]);
								new_total += product_price[i]*qty[i];
								i++;
							});
							
							$('#span_all_total').html(new_total);
							$('#total').val(new_total);
			

				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait...</div>');
				
				var dataString  = { product_id  : product_id , qty : qty };
					
	
					$.ajax({
		
						type: "POST",
						url: "<?php echo base_url();?>cart/update",
						data: dataString,
						dataType: "json",
						cache: false,
						success: function(data){
	
					
							$("#notification_div").html('<div class="alert alert-success" role="alert">Success update cart...</div>');
							$("#update_cart").html(data.update_cart);
							
							
	
				  
						} ,error: function(xhr, status, error) {
							alert(status);
						},
					});
					
					
					
			}
			
		});
$("#submit").click(function(){
			$('.modal-alert').modal('show');
		});
		
		
		
			
		$(".delete_cart").click(function(){
			
	
			var x = confirm("Delete item ?");
			var product_id = $(this).attr('product_id');
			var total = $("#total").val();
			var position = $(this).attr('position');
			
			var product_price = $("#product_price\\["+position+"\\]").val();
			var qty = $("#qty\\["+position+"\\]").val();
			
			var price_delete = product_price*qty;
			var new_total = eval(total - price_delete);
			
			
			if(x == true){
			
			
				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait ...</div>');
				
				var dataString  = { product_id  : product_id };
				$.ajax({
		
						type: "POST",
						url: "<?php echo base_url();?>cart/delete",
						data: dataString,
						dataType: "json",
						cache		: false,
						success: function(data){
	
							$("#tr"+product_id).remove();
							$("#notification_div").html('<div class="alert alert-success" role="alert">Success delete item ...</div>');
							
							
							$('#total').val(new_total);
							$('#span_all_total').html(new_total);
					
							if(new_total == 0){
								$('#tr_total').remove();
								$('#tb_checkout').append(' <td colspan="6" align="center">Cart empty</td>');
								$('#button_bottom').hide();
							}
							
							$("#update_cart").html(data.update_cart);
				  
						} ,error: function(xhr, status, error) {
							alert(status);
						},
					});
					
					
				
			} else {
				return false;
			}
			
		});
		
		
		$(".empty_cart").click(function(){
			
			var total = $("#total").val();
			
			if(!total){
				alert('Cart empty');
				return false;
			} 
			
			if(total == 0){
				alert('Cart empty');
				return false;
			} 
	
			var x = confirm("Empty cart ?");

			if(x == true){
			
			
				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait ...</div>');
				
				var dataString  = { send  : true };
				$.ajax({
		
						type: "POST",
						url: "<?php echo base_url();?>cart/empty-cart",
						data: dataString,
						dataType: "json",
						cache		: false,
						success: function(data){
	
						
							$("#notification_div").html('<div class="alert alert-success" role="alert">Success empty cart ...</div>');
							$('#tr_total').remove();
							$('#tb_checkout').html(' <td colspan="6" align="center">Cart empty</td>');
							$('#button_bottom').hide();
							$("#update_cart").html(data.update_cart);
				  
						} ,error: function(xhr, status, error) {
							alert(status);
						},
					});
					
					
				
			} else {
				return false;
			}
			
		});
		
		</script>
	</body>	
</html>
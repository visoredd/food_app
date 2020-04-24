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
					<div class="row">
					<div class="col-md-12">
						<h4>Let us know where to deliver</h4>
						<div class="row col-md-8">
							<table id="mytable" class="table table-bordred table-striped my_table_red">
			                   <thead>
									 <!-- <th>Location</th>
									 <th>Theater</th> -->
									 <th>Auditorium</th>
				                     <th>Row no</th>
									 <th>Seat No.</th>
			                   </thead>
			                   <tbody>
			                   		<tr>
			                   			<!-- <td>
			                   				<select id="checkout_location" name="checkout_location" class="form-control">
		                                		<option value ="" >----------------------Select---------------------</option>
		                                		<?php
		                                			foreach ($location_list as $location) {
		                                				echo '<option value="'.$location->location_id.'">'.$location->address.'</option>';
		                                			}
		                                		?>
		                                	</select>
		                                </td>
					                    <td>
					                    	<select id="checkout_theater" name="checkout_theater" class="form-control">
		                                		<option value ="" >----------------------Select---------------------</option>
		                                	</select>
					                    </td> -->
										<td>
											<select id="checkout_auditorium" name="checkout_auditorium" class="form-control">
		                                		<option value ="" >----------------------Select---------------------</option>
		                                		<?php
		                                			foreach ($auditorium_list as $auditorium) {
		                                				echo '<option value="'.$auditorium->auditorium_id.'">'.$auditorium->auditorium_name.'</option>';
		                                			}
		                                		?>
		                                	</select>
										</td>
										<td>
											<select id="checkout_row" name="checkout_row" class="form-control">
		                                		<option value ="" >----------------------Select---------------------</option>
		                                	</select>
										</td>
										<td>
											<select id="checkout_seat" name="checkout_seat" class="form-control">
		                                		<option value ="" >----------------------Select---------------------</option>
		                                	</select>
										</td>
				                   	</tr>
			                   </tbody>
			                </table>
						</div>
					</div>
					</div>
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
										  	<?php echo $value;?>
										  </td>
										  <td>
										  	Rs. <span id="span_total<?php echo $cs;?>"><?php echo $row->item_price*$value;?></span>
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
						<form id="pay_form" action ="<?php echo base_url().'checkout/do_paymnt';?>" method="post">
						<div class="row form-group">
							<div class="col-md-4 pull-right">
								<div class="form-group">
									<div id="discount_amount_div" class="row form-group"></div>
									<div id="coupon_code_alert"></div>
	                                <div class="col-md-12">
	                                	<label class="control-label font_red app_title">Enter Coupon Code:</label>
	                                </div>
	                                <div class="col-md-8">
	                                	<div class="input-group">
	                                		<input type="text" name="coupon_code" id="coupon_code" class="form-control"/>
										  	<span class="input-group-btn">
										  		<button type="button" id="apply_coupon_code" class="btn btn-danger">Apply</button>
										  	</span>
										</div>
	                                </div>
	                                <div class="col-md-12">
	                                	<input type="hidden" name="coupon_code_id_h" id="coupon_code_id_h" />
	                                	<span id="coupon_code_description"></span>
	                                </div>
	                            </div>
							</div>
							<div class="col-md-4 pull-right">
								<table id="mytable" class="table table-bordred table-striped">
				                   <thead class="font_red">
										 <th>Payment Method</th>
				                   </thead>
				                   <tbody>
				                   		<tr>
				                   			<td>
				                   				<input type="radio" name="payment_method" id="payment_method" value="wallate"> Wallet<br>
												<input type="radio" name="payment_method" id="payment_method" value="c_d_card"> Credit/Debit card<br>
												<input type="radio" name="payment_method" id="payment_method" value="net_banking"> Net Banking<br/>
												<input type="radio" name="payment_method" id="payment_method" value="cod"> Cash on delivery
				                   			</td>
					                   	</tr>
				                   </tbody>
				                </table>
				                <input type="hidden" name="auditorium_id_hidden" id="auditorium_id_hidden" />
				                <input type="hidden" name="row_id_hidden" id="row_id_hidden" />
				                <input type="hidden" name="seat_id_hidden" id="seat_id_hidden" />
							</div>
						</div>
						<div class="row form-group">
							<span id="button_bottom">
							<!-- <button class="btn btn-danger pull-right update_cart" type="button" >Update Cart</button> -->
							<button class="btn btn-danger pull-right RbtnMargin" type="submit">Pay</button>
							<!-- <button class="btn btn-danger pull-right RbtnMargin empty_cart" type="button" >Empty Cart</button> -->
							</span>
						</div>
						<form>
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
		// $(function(){
		//     $("#checkout_location").change(function(){
		//         var location_id  =   $("#checkout_location").val();
		//         $.ajax({
		//             url: "<?php echo base_url().'place/get_theater_by_location_id' ?>",
		//             type: 'POST',
		//             async : false,
		//             dataType: "json",
		//             data: {location_id : location_id},
		//                 success: function(data) {
		//                     $("#checkout_theater").html(data);
		//                 }
		//         });
		//     });
		// });
		// $(function(){
		//     $("#checkout_theater").change(function(){
		//         var theater_id  =   $("#checkout_theater").val();
		//         $.ajax({
		//             url: "<?php echo base_url().'place/get_auditorium_by_theater_id' ?>",
		//             type: 'POST',
		//             async : false,
		//             dataType: "json",
		//             data: {theater_id : theater_id},
		//                 success: function(data) {
		//                     $("#checkout_auditorium").html(data);
		//                 }
		//         });
		//     });
		// });
		$(function(){
		    $("#checkout_auditorium").change(function(){
		        var auditorium_id  =   $("#checkout_auditorium").val();
		        $.ajax({
		            url: "<?php echo base_url().'place/get_row_by_auditorium_id' ?>",
		            type: 'POST',
		            async : false,
		            dataType: "json",
		            data: {auditorium_id : auditorium_id},
		                success: function(data) {
		                    $("#checkout_row").html(data);
		                    $("#auditorium_id_hidden").val(auditorium_id);
		                }
		        });
		    });
		});
		$(function(){
		    $("#checkout_row").change(function(){
		        var row_id  =   $("#checkout_row").val();
		        $.ajax({
		            url: "<?php echo base_url().'place/get_seat_by_row_id' ?>",
		            type: 'POST',
		            async : false,
		            dataType: "json",
		            data: {row_id : row_id},
		                success: function(data) {
		                    $("#checkout_seat").html(data);
		                    $("#row_id_hidden").val(row_id);		                    
		                }
		        });
		    });
		});

		$(function(){
		    $("#checkout_seat").change(function(){
		        var seat_id  		=   $("#checkout_seat").val();
		        $("#seat_id_hidden").val(seat_id);
		    });
		});

		// $(function(){
		//     $("#checkout_seat").change(function(){
		//         var location_id  	=   $("#checkout_location").val();
		//         var theater_id  	=   $("#checkout_theater").val();
		//         var auditorium_id  	=   $("#checkout_auditorium").val();
		//         var row_id  		=   $("#checkout_row").val();
		//         var seat_id  		=   $("#checkout_seat").val();

		//         if(location_id == '' || location_id == 0){
		//         	alert('Select Location !');
		//         	return false;
		//         } else if(theater_id == '' || theater_id == 0){
		//         	alert('Select Theater !');
		//         	return false;
		//         } else if(auditorium_id == '' || auditorium_id == 0){
		//         	alert('Select Auditorium !');
		//         	return false;
		//         } else if(row_id == '' || row_id == 0){
		//         	alert('Select Row !');
		//         	return false;
		//         } else if(seat_id == '' || seat_id == 0){
		//         	alert('Select Seat !');
		//         	return false;
		//         }

		//         $.ajax({
		//             url: "<?php echo base_url().'user/set_user_location_in_session' ?>",
		//             type: 'POST',
		//             async : false,
		//             dataType: "json",
		//             data: {location_id:location_id, theater_id:theater_id, auditorium_id:auditorium_id, row_id : row_id, seat_id:seat_id},
		//                 success: function(data) {
		//                    alert("We get your location.");
		//                 }
		//         });
		//     });
		// });
		$( "#pay_form" ).submit(function( event ) {
		  	// var location_id  	=   $("#checkout_location").val();
	    //     var theater_id  	=   $("#checkout_theater").val();
	        var auditorium_id  	=   $("#checkout_auditorium").val();
	        var row_id  		=   $("#checkout_row").val();
	        var seat_id  		=   $("#checkout_seat").val();
	        var payment_method  =   $('input[name=payment_method]:checked', '#pay_form').val();
	        
	        // if(location_id == '' || location_id == 0){
	        // 	alert('Select Location !');
	        // 	return false;
	        // } else if(theater_id == '' || theater_id == 0){
	        // 	alert('Select Theater !');
	        // 	return false;
	        // } else 
	        if(auditorium_id == '' || auditorium_id == 0){
	        	alert('Select Auditorium !'); return false;
	        } else if(row_id == '' || row_id == 0){
	        	alert('Select Row !'); return false;
	        } else if(seat_id == '' || seat_id == 0){
	        	alert('Select Seat !'); return false;
	        } else if( ! payment_method){
	        	alert("Select Payment Method !"); return false;
	        }
		});
		$("#apply_coupon_code").click(function () {
			var coupon_code  	=   $("#coupon_code").val();
			var total_amount 	=	<?php echo $total;?>;
			if(coupon_code == ''){
				alert('Enter Valid Coupon code !'); return false;
			}
			
			$.ajax({
	            url: "<?php echo base_url().'checkout/apply_coupon_code' ?>",
	            type: 'POST',
	            async : false,
	            dataType: "json",
	            data: {coupon_code:coupon_code},
                success: function(data) {
                	if(data.status == 'success'){
                		var coupon_code_id 				=	data.result[0].cc_id;
                		var coupon_code_description 	=	data.result[0].cc_description;
                		var discount_type 				=	data.result[0].cc_discount_type;
                		var discount 					=	data.result[0].cc_discount;
                		var max_discount 				=	data.result[0].cc_max_discount;
                		var on_order_rs 				=	data.result[0].cc_on_order_rs;
                		var discount_amount 			=	'';
                		var net_amount 					=	'';

                		if(total_amount >= on_order_rs){
                			if(discount_type == 'percentage'){
                				discount_amount = 	(total_amount * discount) / 100;
                				if(discount_amount > max_discount  && max_discount != 0){
                					discount_amount = max_discount;
                				}
                				net_amount 		=	total_amount - discount_amount;
                			} else if(discount_type == 'flat_amount'){
                				discount_amount = 	discount;
                				net_amount 		=	total_amount - discount_amount;
                			}

                			var alert_message 			=	'<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Promotional code is applied.</div>';
					        var discount_amount_data 	=	'<table class="discount_table"><tr><td align="right">-</td><td><span>Rs. '+discount_amount+'</span></td></tr><tr><td>Net Payment</td><td><span>Rs. '+net_amount+'</span></td></tr></table>';
					        
					        $("#coupon_code_id_h").val(coupon_code_id);
					        $('#coupon_code_description').html(coupon_code_description).fadeIn('slow');
					        $('#discount_amount_div').html(discount_amount_data).fadeIn('slow');
					        $('#coupon_code_alert').html(alert_message).fadeIn('slow');
                		} else {
                			var alert_message 	=	'<div class="alert alert-warning alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Total bill should be grater than or equal to '+on_order_rs+'.</div>';
					        $('#coupon_code_description').html(coupon_code_description).fadeIn('slow');
                			$('#coupon_code_alert').html(alert_message).fadeIn('slow');
                		}				        
				    }else if(data.status == 'error'){
				        var alert_message 	=	'<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Promotional code is not valid.</div>';
                		$('#coupon_code_alert').html(alert_message).fadeIn('slow');
				    }
                }
	        });
		});
		</script>
	</body>	
</html>
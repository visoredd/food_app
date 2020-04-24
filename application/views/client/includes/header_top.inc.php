<div class="header-top">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<!-- Header top left content contact -->
								<div class="header-contact">
									<!-- Contact number -->
									<span><i class="fa fa-phone red"></i> 888-888-8888</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Header top right content search box -->
								<div class=" header-search">
									<form action="<?php echo base_url().'shopping/search_item' ?>" method="get" class="form" role="form">
										<div class="input-group">
										  <input type="text" name="seach_item" id="seach_item" class="form-control" placeholder="Search...">
										  <span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
										  </span>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#LoginModal" name="Login" id="Login" value="Login"> -->
								<a href="<?php echo base_url().'user/logout';?>"><input type="button" class="btn button_red pull-right RbtnMargin" value="Logout"></a>
								<div class = "input-group-btn pull-right">
				                  <button type = "button" class = "btn btn-danger dropdown-toggle pull-right" data-toggle = "dropdown">My Order 
				                     <span class = "caret"></span>
				                  </button>
				                  <ul class = "dropdown-menu">
				                     <li> <a href="<?php echo base_url();?>checkout/cart">Cart</a></li>
				                     <li> <a href="#">Order List</a></li>

				                     
				                     <li class = "divider"></li>
				                     <li><a href="<?php echo base_url();?>shopping/order_tracking">Track Order</a></li>
				                  </ul>
				               </div>
								<!-- Button Kart -->
								<!-- <div class="btn-cart-md"> -->
									<!-- <span class="cart-link"> -->
									<!-- <a class="cart-link" href="#"> -->
										<!-- Image -->
										<!-- <img class="img-responsive" src="<?php echo base_url(); ?>img/cart.png" alt="" /> -->
										<!-- Heading -->
										<!-- <h4>Shopping Cart</h4> -->
										<!-- <span>3 items $489/-</span> -->
										<!-- <div class="clearfix"></div> -->
									<!-- </a> -->
									<!-- </span> -->

									<!-- <ul class="cart-dropdown" role="menu"> -->
										<!-- <li> -->
											<!-- Cart items for shopping list -->
											<!-- <div class="cart-item"> -->
												<!-- Item remove icon -->
												<!-- <a href="#"><i class="fa fa-times"></i></a> -->
												<!-- Image -->
												<!-- <img class="img-responsive img-rounded" src="<?php echo base_url(); ?>img/nav-menu/nav1.jpg" alt="" /> -->
												<!-- Title for purchase item -->
												<!-- <span class="cart-title"><a href="#">Exception Reins Evocative</a></span> -->
												<!-- Cart item price -->
												<!-- <span class="cart-price pull-right red">$200/-</span> -->
												<!-- <div class="clearfix"></div> -->
											<!-- </div> -->
										<!-- </li> -->
										<!-- <li> -->
											<!-- Cart items for shopping list -->
											<!-- <div class="cart-item"> -->
												<!-- Item remove icon -->
												<!-- <a href="#"><i class="fa fa-times"></i></a> -->
												<!-- Image -->
												<!-- <img class="img-responsive img-rounded" src="<?php echo base_url(); ?>img/nav-menu/nav2.jpg" alt="" /> -->
												<!-- Title for purchase item -->
												<!-- <span class="cart-title"><a href="#">Taut Mayoress Alias Appendicitis</a></span> -->
												<!-- Cart item price -->
												<!-- <span class="cart-price pull-right red">$190/-</span> -->
												<!-- <div class="clearfix"></div> -->
											<!-- </div> -->
										<!-- </li> -->
										<!-- <li> -->
											<!-- Cart items for shopping list -->
											<!-- <div class="cart-item"> -->
												<!-- Item remove icon -->
												<!-- <a href="#"><i class="fa fa-times"></i></a> -->
												<!-- Image -->
												<!-- <img class="img-responsive img-rounded" src="<?php echo base_url(); ?>img/nav-menu/nav3.jpg" alt="" /> -->
												<!-- Title for purchase item -->
												<!-- <span class="cart-title"><a href="#">Sinter et Molests Perfectionist</a></span> -->
												<!-- Cart item price -->
												<!-- <span class="cart-price pull-right red">$99/-</span> -->
												<!-- <div class="clearfix"></div> -->
											<!-- </div> -->
										<!-- </li> -->
										<!-- <li> -->
											<!-- Cart items for shopping list -->
											<!-- <div class="cart-item"> -->
												<!-- <a class="btn btn-danger" data-toggle="modal" href="#shoppingcart1">Checkout</a> -->
											<!-- </div> -->
										<!-- </li> -->
									<!-- </ul> -->
									<!-- <div class="clearfix"></div> -->
								<!-- </div> -->
								<div class="clearfix"></div>
							</div>
						</div>
					</div>


					<!-- Modal Start-->
				  	<!-- <div class="modal fade" id="LoginModal" role="dialog">
				    	<div class="modal-dialog modal_dialog_cust">
				      		<div class="modal-content">
				       			<div class="modal-header">
				          			<button type="button" class="close" data-dismiss="modal">&times;</button>
				          			<h4 class="modal-title">Modal Header</h4>
				        		</div>
				        		<div class="modal-body model_height_cust">
				        			<div class="md-col-12">
					        			<div class="form-group">
						          			<input type="button" class="btn btn-primary form-controll" name="login_with_fb" id="login_with_fb" value="Login with Facebook"/>
					          			</div>
					        			<div class="form-group">
					          				<input type="button" class="btn btn-danger form-controll" name="login_with_google_plus" id="login_with_google_plus" value="Sign in with Google+"/>
					          			</div>
				          			</div>
				       			</div>
				        		<div class="modal-footer">
				        			<div class="model_footer">
					          			<button type="button" class="btn btn-default">Signup</button>
					          			<button type="button" class="btn btn-default">Login</button>
				        			</div>
				        		</div>
				      		</div>
				    	</div>
				  	</div> -->
					<!-- Modal End-->
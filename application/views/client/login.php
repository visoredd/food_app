
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>CakeFactory</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php require_once('includes/head.inc.php'); ?>
	</head>
	<body>	
		    <div class="container">    
       			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            		<div class="panel panel-default" >
                    	<div class="panel-heading app_heading_bg">
                        	<div class="panel-title">Sign In</div>
                    	</div> 
                    	<div style="padding-top:30px;" class="panel-body">
							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <form id="loginform" action="<?php echo base_url().'user/do_login';?>" method="" class="form-horizontal" role="form">
                                    
                                <div style="min-height:350px; padding: 0 175px;">
		                            <div style="margin-bottom: 25px; padding: 0 13px;" class="input-group">
	                                	<span class="fa-stack fa-4x" style="color:#f85853;">
										  	<i class="fa fa-circle fa-stack-2x"></i>
										  	<strong class="fa-stack-1x calendar-text" style="color:#fff">i</strong>
										</span>
										<span style="font-size:2em; font-weight:bolder;">INTERVAL</span>
		                            </div>
		                            <div style="margin-bottom: 25px" class="input-group">
		                                <a id="btn-fblogin" href="<?php echo $authUrl_facebook; ?>" class="btn btn-primary">Login with Facebook</a>
		                            </div>
	                                
	                            	<div style="margin-bottom: 25px" class="input-group">
                                       <a id="btn-fblogin" href="<?php echo $authUrl_google; ?>" class="btn btn-danger">Sign in with Google+</a>
	                            	</div>
                            	</div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding:15px 60px 0 60px; font-size:85%" >
                                      		 <a href="#" class="btn btn-default pull-left" onClick="$('#loginbox').hide(); $('#signupbox').show()">Sign Up</a>
                                      		<button id="btn-login" type="submit" class="btn btn-default pull-right">Login</button>
                                        </div>
                                    </div>
                                </div>    
                            </form>
                        </div>                     
                    </div>
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-danger">
                        <div class="panel-heading app_heading_bg">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" action="<?php echo base_url().'user/signup' ?>" method="post" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="phone_no" class="col-md-3 control-label">Phone no</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone_no" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <!-- <span style="margin-left:8px;">or</span>   -->
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <!-- <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button> -->
                                    </div> 
                                </div>                                
                            </form>
                         </div>
                    </div>
		<!-- Javascript files -->
		<?php require_once('includes/footer_js.inc.php'); ?>
		
		<!-- JS code for this page -->
		<script>
		
		</script>
	</body>	
</html>
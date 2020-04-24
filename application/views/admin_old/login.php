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
            <div class="panel panel-danger" >
                    <div class="panel-heading app_heading_bg">
                        <div class="panel-title">Admin Login</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" action="<?php echo base_url().'admin/admin_chk_login'; ?>" method="post" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="ad_username" value="" placeholder="email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="ad_password" placeholder="password">
                                    </div>
                               
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" id="btn-login" class="btn btn-success">Login  </button>
                                    </div>
                                </div>  
                            </form>
                        </div>                     
                    </div>  
        </div>
        
    
        <!-- Javascript files -->
        <?php require_once('includes/footer_js.inc.php'); ?>
        
        <!-- JS code for this page -->
        <script>
        
        </script>
    </body> 
</html>
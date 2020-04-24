<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Insert Food</title>

    <?php require_once('includes/head.inc.php'); ?>

</head>

<body>

    <!-- Navigation -->
    <?php require_once('includes/nav.inc.php'); ?>
    
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><!-- Full Width Page -->
                    <small>Insert Food</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active">Insert Food</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <?php require_once('includes/alert_message.inc.php'); ?>
                <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div class="panel panel-danger" >
                        <div class="panel-heading app_heading_bg">
                            <div class="panel-title">Insert Food</div>
                        </div> 
                        <div style="padding-top:30px;" class="panel-body">
                            <form id="insert_food_form" action="<?php echo base_url().'product/process_insert_food'; ?>" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                <div style="min-height:250px;">
                                    <div style="margin-bottom: 25px" class="input-group col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Select Theater:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="dates-field2" class="multiselect-ui form-control" multiple="multiple">
                                                   <?php
                                                        foreach ($theater_list as $theater) {
                                                            echo '<option value="'.$theater->th_id.'">'.$theater->th_name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Food Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="food_name" id="food_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Description:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="food_desc" id="food_desc" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Price:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="food_price" id="food_price" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Image:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="food_image" id="food_image" class="form-control">
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
        <!-- /.row -->

        <hr>

        <!-- Footer -->
		<?php require_once('includes/footer.inc.php'); ?>
        
    </div>
    <!-- /.container -->
	<?php require_once('includes/footer_js.inc.php'); ?>
	
    <!-- JS code for this page -->
        <script>
        $(function() {
            $('.multiselect-ui').multiselect({
                includeSelectAllOption: true
            });
        });

        $("#insert_food_form").validate({
            rules: {
                food_location: "required",
                food_theater: "required",
                food_name: {
                    required: true,
                    // lettersonly: true
                }
            },
            messages: {
                food_location: "Select Location!",
                food_theater: "Select Theater!",
                food_name: {
                    required: "Enter Auditorium Name!",
                    // lettersonly: "Letters only please!"
                }
            }
        });
        </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

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
                <h1 class="page-header"><!-- Create Theatre -->
                    <small>Update Theatre</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Update Theatre</li>
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
                            <div class="panel-title">Update Theatre</div>
                        </div> 
                        <div style="padding-top:30px;" class="panel-body">
                            <form id="insert_theter_form" action="<?php echo base_url().'place/update_theatre'; ?>" method="post" class="form-horizontal" role="form">
                                <div style="min-height:250px;">
                                    <div style="margin-bottom: 25px" class="input-group col-md-12">
                                        <!-- <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Select Location:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="location" name="location" class="form-control">
                                                    <option value ="" >----------------------Select---------------------</option>
                                                    <?php
                                                        foreach ($location_list as $location) {
                                                            echo '<option value="'.$location->location_id.'">'.$location->address.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Theatre Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="theatre_name" id="theatre_name" value="<?php echo $theatre[0]->th_name; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Address Line 1:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="theatre_address_line_1" id="theatre_address_line_1" class="form-control"><?php echo $theatre[0]->th_address_line_1; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Address Line 2:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="theatre_address_line_2" id="theatre_address_line_2" class="form-control"><?php echo $theatre[0]->th_address_line_2; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">City:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="theatre_city" id="theatre_city" value="<?php echo $theatre[0]->th_city; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Pincode:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="theatre_pincode" id="theatre_pincode" value="<?php echo $theatre[0]->th_pincode; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Latitude:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="theatre_latitude" id="theatre_latitude" value="<?php echo $theatre[0]->th_latitude; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Longitude:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="theatre_longitude" id="theatre_longitude" value="<?php echo $theatre[0]->th_longitude; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Email:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="theatre_email" id="theatre_email" value="<?php echo $theatre[0]->th_email; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Telephone:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="theatre_telephone" id="theatre_telephone" value="<?php echo $theatre[0]->th_telephone; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Mobile:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="theatre_mobile" id="theatre_mobile" value="<?php echo $theatre[0]->th_mobile; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Contact Person:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="theatre_person" id="theatre_person" value="<?php echo $theatre[0]->th_contact_person; ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding:15px 60px 0 60px; font-size:85%" >
                                            <input type="hidden" name="theatre_id" id="theatre_id" value="<?php echo $theatre[0]->th_id; ?>" class="form-control">
                                            <center><button id="btn-login" type="submit" class="btn btn-danger">Update</button></center>
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

    <script>
        // jQuery.validator.addMethod("lettersonly", function(value, element) {
        //   return this.optional(element) || /^[a-z]+$/i.test(value);
        // }, "Letters only please!"); 

        $("#insert_theter_form").validate({
            rules: {
                // location: "required",
                theatre_name: "required",
                theatre_address_line_1: "required",
                // theatre_address_line_2: "required",
                theatre_city: "required",
                theatre_pincode: {
                    required: true,
                    number: true
                },
                theatre_latitude: {
                    required: true,
                    number: true
                },
                theatre_longitude: {
                    required: true,
                    number: true
                },
                theatre_email: {
                    required: true,
                    email: true
                },
                theatre_mobile: {
                    required: true,
                    number: true
                },
                theatre_person: {
                    required: true,
                    // lettersonly: true
                },
            },
            messages: {
                // location: "Select Location!",
                theatre_name: "Enter Theater Name!",
                theatre_address_line_1: "Enter Theater Address!",
                // theatre_address_line_2: "Enter Theater Address!",
                theatre_city: "Enter City!",
                theatre_pincode: {
                    required: "Enter Pincode!",
                    number: "Decimal Numbers Only!"
                },
                theatre_latitude: {
                    required: "Enter Latitude!",
                    number: "Decimal Numbers Only!"
                },
                theatre_longitude: {
                    required: "Enter Longituted!",
                    number: "Decimal Numbers Only!"
                },
                theatre_email: {
                    required: "Enter Email!",
                    email: "Enter valid Email!"
                },
                theatre_mobile: {
                    required: "Enter Mobile Number!"
                },
                theatre_person: {
                    required: "Enter Contact Person Name!",
                    // lettersonly: "Letters only please!"
                }
            }
        });
        </script>
	
</body>

</html>

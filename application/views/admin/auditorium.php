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
                <h1 class="page-header"><!-- Full Width Page -->
                    <small>Create Auditorium</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Create Auditorium</li>
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
                            <div class="panel-title">Create Auditorium</div>
                        </div> 
                        <div style="padding-top:30px;" class="panel-body">
                            <form id="insert_auditorium_form" action="<?php echo base_url().'place/ctreate_auditorium'; ?>" method="post" class="form-horizontal" role="form">
                                <div style="min-height:250px;">
                                    <div style="margin-bottom: 25px" class="input-group col-md-12">
                                        <!-- <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Select Location:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="aud_location" name="aud_location" class="form-control">
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
                                                <label class="control-label font_red app_title">Select Theater:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="aud_theater" name="aud_theater" class="form-control">
                                                   <?php
                                                        foreach ($theatre_list as $theatre) {
                                                            echo '<option value="'.$theatre->th_id.'">'.$theatre->th_name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Auditorium Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="aud_name" id="aud_name" class="form-control">
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
	
    <script>
        // $(function(){
        //     $("#aud_location").change(function(){
        //         var location_id  =   $("#aud_location").val();
        //         $.ajax({
        //             url: "<?php echo base_url().'place/get_theater_by_location_id' ?>",
        //             type: 'POST',
        //             async : false,
        //             dataType: "json",
        //             data: {location_id : location_id},
        //                 success: function(data) {
        //                     $("#aud_theater").html(data);
        //                 }
        //         });
        //     });
        // });

        $("#insert_auditorium_form").validate({
            rules: {
                aud_location: "required",
                aud_theater: "required",
                aud_name: {
                    required: true,
                    // lettersonly: true
                }
            },
            messages: {
                aud_location: "Select Location!",
                aud_theater: "Select Theater!",
                aud_name: {
                    required: "Enter Auditorium Name!",
                    // lettersonly: "Letters only please!"
                }
            }
        });
        </script>

</body>

</html>

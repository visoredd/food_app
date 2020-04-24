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
                    <small>Edit Row</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active">Edit Row</li>
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
                            <div class="panel-title">Edit Row</div>
                        </div> 
                        <div style="padding-top:30px;" class="panel-body">
                            <form id="insert_row_form" action="<?php echo base_url().'place/update_row'; ?>" method="post" class="form-horizontal" role="form">
                                <div style="min-height:250px;">
                                    <div style="margin-bottom: 25px" class="input-group col-md-12">
                                        <!-- <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Select Location:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="row_location" name="row_location" class="form-control">
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
                                                <select id="row_theater" name="row_theater" class="form-control">
                                                    <option value ="" >----------------------Select---------------------</option>
                                                    <?php
                                                        foreach ($theatre_list as $theatre) {
                                                            echo '<option value="'.$theatre->th_id.'" '.(($theatre->th_id == $row[0]->th_id) ? "selected": "").'>'.$theatre->th_name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Select Auditorium:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="row_auditorium" name="row_auditorium" class="form-control">
                                                    <option value ="" >----------------------Select---------------------</option>
                                                    <?php
                                                        foreach ($auditorium_list as $auditorium) {
                                                            echo '<option value="'.$auditorium->auditorium_id.'" '.(($auditorium->auditorium_id == $row[0]->auditorium_id) ? "selected": "").'>'.$auditorium->auditorium_name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Row Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" id="row_name" name="row_name" value="<?php echo $row[0]->row_name; ?>" class="form-control"/>
                                                <input type="hidden" id="row_id" name="row_id" value="<?php echo $row[0]->row_id; ?>" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding:15px 60px 0 60px; font-size:85%" >
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
        // $(function(){
        //     $("#row_location").change(function(){
        //         var location_id  =   $("#row_location").val();
        //         $.ajax({
        //             url: "<?php echo base_url().'place/get_theater_by_location_id' ?>",
        //             type: 'POST',
        //             async : false,
        //             dataType: "json",
        //             data: {location_id : location_id},
        //                 success: function(data) {
        //                     $("#row_theater").html(data);
        //                 }
        //         });
        //     });
        // });

        $(function(){
            $("#row_theater").change(function(){
                var theater_id  =   $("#row_theater").val();
                $.ajax({
                    url: "<?php echo base_url().'place/get_auditorium_by_theater_id' ?>",
                    type: 'POST',
                    async : false,
                    dataType: "json",
                    data: {theater_id : theater_id},
                        success: function(data) {
                            $("#row_auditorium").html(data);
                        }
                });
            });
        });

        $("#insert_row_form").validate({
            rules: {
                row_location: "required",
                row_theater: "required",
                row_auditorium: "required",
                row_name: {
                    required: true,
                    // lettersonly: true
                }
            },
            messages: {
                row_location: "Select Location!",
                row_theater: "Select Theater!",
                row_auditorium: "Select Auditorium!",
                row_name: {
                    required: "Enter Row Name!",
                    // lettersonly: "Letters only please!"
                }
            }
        });
        </script>

</body>

</html>

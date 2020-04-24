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
                    <small>Edit Seat</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active">Edit Seat</li>
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
                            <div class="panel-title">Edit Seat</div>
                        </div> 
                        <div style="padding-top:30px;" class="panel-body">
                            <form id="insert_seat_form" action="<?php echo base_url().'place/update_seat'; ?>" method="post" class="form-horizontal" role="form">
                                <div style="min-height:250px;">
                                    <div style="margin-bottom: 25px" class="input-group col-md-12">
                                        <!-- <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Select Location:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="seat_location" name="seat_location" class="form-control">
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
                                                <select id="seat_theater" name="seat_theater" class="form-control">
                                                    <option value ="" >----------------------Select---------------------</option>
                                                    <?php
                                                        foreach ($theatre_list as $theatre) {
                                                            echo '<option value="'.$theatre->th_id.'" '.(($theatre->th_id == $seat[0]->th_id) ? "selected": "").'>'.$theatre->th_name.'</option>';
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
                                                <select id="seat_auditorium" name="seat_auditorium" class="form-control">
                                                    <option value ="" >----------------------Select---------------------</option>
                                                    <?php
                                                        foreach ($auditorium_list as $auditorium) {
                                                            echo '<option value="'.$auditorium->auditorium_id.'" '.(($auditorium->auditorium_id == $seat[0]->auditorium_id) ? "selected": "").'>'.$auditorium->auditorium_name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Select Row:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="seat_row" name="seat_row" class="form-control">
                                                    <option value ="" >----------------------Select---------------------</option>
                                                    <?php
                                                        foreach ($row_list as $row) {
                                                            echo '<option value="'.$row->row_id.'" '.(($row->row_id == $seat[0]->row_id) ? "selected": "").'>'.$row->row_name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Seat Name (or) No:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" id="seat_name" name="seat_name" value="<?php echo $seat[0]->seat_no; ?>" class="form-control"/>
                                                <input type="hidden" id="seat_id" name="seat_id" value="<?php echo $seat[0]->seat_id; ?>" class="form-control"/>
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
        //     $("#seat_location").change(function(){
        //         var location_id  =   $("#seat_location").val();
        //         $.ajax({
        //             url: "<?php echo base_url().'place/get_theater_by_location_id' ?>",
        //             type: 'POST',
        //             async : false,
        //             dataType: "json",
        //             data: {location_id : location_id},
        //                 success: function(data) {
        //                     $("#seat_theater").html(data);
        //                 }
        //         });
        //     });
        // });

        $(function(){
            $("#seat_theater").change(function(){
                var theater_id  =   $("#seat_theater").val();
                $.ajax({
                    url: "<?php echo base_url().'place/get_auditorium_by_theater_id' ?>",
                    type: 'POST',
                    async : false,
                    dataType: "json",
                    data: {theater_id : theater_id},
                        success: function(data) {
                            $("#seat_auditorium").html(data);
                        }
                });
            });
        });

        $(function(){
            $("#seat_auditorium").change(function(){
                var auditorium_id  =   $("#seat_auditorium").val();
                $.ajax({
                    url: "<?php echo base_url().'place/get_row_by_auditorium_id' ?>",
                    type: 'POST',
                    async : false,
                    dataType: "json",
                    data: {auditorium_id : auditorium_id},
                        success: function(data) {
                            $("#seat_row").html(data);
                        }
                });
            });
        });

        $("#insert_seat_form").validate({
            rules: {
                seat_location: "required",
                seat_theater: "required",
                seat_auditorium: "required",
                seat_row: "required",
                seat_name: {
                    required: true,
                    // lettersonly: true
                }
            },
            messages: {
                seat_location: "Select Location!",
                seat_theater: "Select Theater!",
                seat_auditorium: "Select Auditorium!",
                seat_row: "Select Row!",
                seat_name: {
                    required: "Enter Seat Name (or) No!",
                    // lettersonly: "Letters only please!"
                }
            }
        });

        
        
        </script>
	
</body>

</html>

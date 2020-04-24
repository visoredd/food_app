<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Seats List</title>

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
                    <small>Seats List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active">Seats List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <?php require_once('includes/alert_message.inc.php'); ?>
                <div class="panel panel-danger">
                    <div class="panel-heading app_heading_bg app_panel_heading"><i class="fa fa-angle-double-right"></i> Rows: <?php echo $row_name; ?> <i class="fa fa-angle-double-right"></i> <span class="active_heading">Seats</span></div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead class="my_table_default">
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th class="text_center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(! empty($seat_list)){
                                        $i = 1;
                                        foreach ($seat_list as $seat) {
                                            echo '
                                                <tr class="seat_tr">
                                                    <td>
                                                        '.$i.'
                                                        <input type="hidden" name="seat_id" id="seat_id" value="'.$seat->seat_id.'"/>
                                                    </td>
                                                    <td>'.$seat->seat_no.'</td>
                                                    <td align="center">
                                                        <a href="'.base_url().'place/edit_seat/'.$seat->seat_id.'"><button class="btn btn-default">Edit</button></a>
                                                        <button class="btn btn-danger" onclick="delete_seat(this);" >Delete</button>
                                                    </td>
                                                </tr>
                                            ';
                                            $i++;
                                        }
                                    } else {
                                        echo '
                                            <tr><td colspan="4" align = "center">No Rows found !</td></tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
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
	
    <script type="text/javascript">
        function delete_seat(this_val) {
            var seat_id              =   $(this_val).closest('.seat_tr').find('#seat_id').val();
            
            var cfn =  confirm('Are You sure ?');
            if(!cfn)
                return false;

            $.ajax({
                url: "<?php echo base_url().'place/delete_seat' ?>",
                type: 'POST',
                async : false,
                dataType: "json",
                data: {seat_id:seat_id},
                success: function(data) {
                    if(data.status == 'success'){
                        alert(data.result);
                        location.reload(true);
                    } else if(data.status == 'error'){
                        alert('Somthing went wrong !');
                    }
                }
            });
        }
    </script>

</body>

</html>

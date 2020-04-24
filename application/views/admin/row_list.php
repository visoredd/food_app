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
                    <small>Rows List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active">Rows List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <?php require_once('includes/alert_message.inc.php'); ?>
                <div class="panel panel-danger">
                    <div class="panel-heading app_heading_bg app_panel_heading"><i class="fa fa-angle-double-right"></i> Auditorium: <?php echo $auditorium_name; ?> <i class="fa fa-angle-double-right"></i> <span class="active_heading">Rows</span></div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead class="my_table_default">
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th class="text_center">View</th>
                                    <th class="text_center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(! empty($row_list)){
                                        $i = 1;
                                        foreach ($row_list as $row) {
                                            echo '
                                                <tr class="row_tr">
                                                    <td>
                                                        '.$i.'
                                                        <input type="hidden" name="row_id" id="row_id" value="'.$row->row_id.'"/>
                                                    </td>
                                                    <td>'.ucfirst($row->row_name).'</td>
                                                    <td align="center">
                                                        <a href="'.base_url().'place/seat_list/'.$row->row_id.'"><button class="btn btn-default">Seats</button></a>
                                                    </td>
                                                    <td align="center">
                                                        <a href="'.base_url().'place/edit_row/'.$row->row_id.'"><button class="btn btn-default">Edit</button></a>
                                                        <button class="btn btn-danger" onclick="delete_row(this);">Delete</button>
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
        function delete_row(this_val) {
            var row_id              =   $(this_val).closest('.row_tr').find('#row_id').val();
            
            var cfn =  confirm('Are You sure ?');
            if(!cfn)
                return false;

            $.ajax({
                url: "<?php echo base_url().'place/delete_row' ?>",
                type: 'POST',
                async : false,
                dataType: "json",
                data: {row_id:row_id},
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

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
                    <small>Auditoriums List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active">Auditoriums List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <?php require_once('includes/alert_message.inc.php'); ?>
                <div class="panel panel-danger">
                    <div class="panel-heading app_heading_bg app_panel_heading"><i class="fa fa-angle-double-right"></i> Theater: <?php echo $theater_name; ?> <i class="fa fa-angle-double-right"></i> <span class="active_heading">Auditoriums</span></div>
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
                                    if(! empty($auditorium_list)){
                                        $i = 1;
                                        foreach ($auditorium_list as $auditorium) {
                                            echo '
                                                <tr class="auditorium_tr">
                                                    <td>
                                                        '.$i.'
                                                        <input type="hidden" name="auditorium_id" id="auditorium_id" value="'.$auditorium->auditorium_id.'"/>
                                                    </td>
                                                    <td>'.ucfirst($auditorium->auditorium_name).'</td>
                                                    <td align="center">
                                                        <a href="'.base_url().'place/row_list/'.$auditorium->auditorium_id.'"><button class="btn btn-default">Rows</button></a>
                                                    </td>
                                                    <td align="center">
                                                        <a href="'.base_url().'place/edit_auditorium/'.$auditorium->auditorium_id.'"><button class="btn btn-default">Edit</button></a>
                                                        <button class="btn btn-danger" onclick="delete_auditorium(this);">Delete</button>
                                                    </td>
                                                </tr>
                                            ';
                                            $i++;
                                        }
                                    } else {
                                        echo '
                                            <tr><td colspan="4" align = "center">No Auditoriums found !</td></tr>
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
        function delete_auditorium(this_val) {
            var auditorium_id              =   $(this_val).closest('.auditorium_tr').find('#auditorium_id').val();
            
            var cfn =  confirm('Are You sure ?');
            if(!cfn)
                return false;

            $.ajax({
                url: "<?php echo base_url().'place/delete_auditorium' ?>",
                type: 'POST',
                async : false,
                dataType: "json",
                data: {auditorium_id:auditorium_id},
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

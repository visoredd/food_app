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
                    <small>Locations List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active">Locations List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <?php require_once('includes/alert_message.inc.php'); ?>
                <div class="panel panel-danger">
                    <div class="panel-heading app_heading_bg app_panel_heading"><i class="fa fa-angle-double-right"></i> <span class="active_heading">Locations</span></div>
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
                                    if(! empty($location_list)){
                                        $i = 1;
                                        foreach ($location_list as $location) {
                                            echo '
                                                <tr>
                                                    <td>'.$i.'</td>
                                                    <td>'.ucfirst($location->location_name).'</td>
                                                    <td align="center">
                                                        <a href="'.base_url().'place/theatre_list/'.$location->location_id.'"><button class="btn btn-default">Theaters</button></a>
                                                    </td>
                                                    <td align="center">
                                                        <button class="btn btn-default">Edit</button>
                                                        <button class="btn btn-danger">Delete</button>
                                                    </td>
                                                </tr>
                                            ';
                                            $i++;
                                        }
                                    } else {
                                        echo '
                                            <tr><td colspan="4" align = "center">No Location found !</td></tr>
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
	
</body>

</html>

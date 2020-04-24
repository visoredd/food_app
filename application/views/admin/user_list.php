<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Food List</title>

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
                    <small>User List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">User List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <?php require_once('includes/alert_message.inc.php'); ?>
                <div class="panel panel-danger">
                    <div class="panel-heading app_heading_bg app_panel_heading"><i class="fa fa-angle-double-right"></i> User List</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead class="my_table_default">
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phne No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(! empty($user_list)){
                                        $i = 1;
                                        foreach ($user_list as $user) {
                                            echo '
                                                <tr>
                                                    <td>'.$i.'</td>
                                                    <td>'.ucfirst($user->first_name).'</td>
                                                    <td>'.ucfirst($user->last_name).'</td>
                                                    <td>'.$user->email_id.'</td>
                                                    <td>'.$user->phone_no.'</td>
                                                </tr>
                                            ';
                                            $i++;
                                        }
                                    } else {
                                        echo '
                                            <tr><td colspan="4" align = "center">No Users found !</td></tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="admin-pagination">
                   <?php
                        if($page_links != ''){
                            echo $page_links;
                        }
                    ?> 
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

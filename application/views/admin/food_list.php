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
                    <small>Food List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Food List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <?php require_once('includes/alert_message.inc.php'); ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Location</td>
                            <td>Theater</td>
                            <td>Category</td>
                            <td>Food Name</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="search_item_location" class="form-control"/>
                            </td>
                            <td>
                                <input type="text" name="search_item_theater" class="form-control"/>
                            </td>
                            <td>
                                <input type="text" name="search_item_category" class="form-control"/>
                            </td>
                            <td>
                                <input type="text" name="search_item_name" class="form-control"/>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-default">Search</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="panel panel-danger">
                    <div class="panel-heading app_heading_bg app_panel_heading"><i class="fa fa-angle-double-right"></i> Food List</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead class="my_table_default">
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th class="text_center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(! empty($food_list)){
                                        $i = 1;
                                        foreach ($food_list as $food) {
                                            echo '
                                                <tr>
                                                    <td>'.$i.'</td>
                                                    <td>'.ucfirst($food->item_name).'</td>
                                                    <td>'.$food->category_name.'</td>
                                                    <td>'.$food->item_desc.'</td>
                                                    <td>Rs. '.$food->item_price.'</td>
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
                                            <tr><td colspan="4" align = "center">No Food found !</td></tr>
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Order List</title>

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
                    <small>Order List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Order List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <?php require_once('includes/alert_message.inc.php'); ?>
                <div class="panel panel-danger">
                    <div class="panel-heading app_heading_bg app_panel_heading"><i class="fa fa-angle-double-right"></i> Order List</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead class="my_table_default">
                                <tr>
                                    <th>No.</th>
                                    <th>Order Date</th>
                                    <th>Amount</th>
                                    <th>Payment Status</th>
                                    <th>Order Status</th>
                                    <th>Order Rating</th>
                                    <th>User Confirmation</th>
                                    <th>User</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(! empty($order_list)){
                                        $i = 1;
                                        foreach ($order_list as $order) {
                                            echo '
                                                <tr>
                                                    <td>'.$i.'</td>
                                                    <td>'.date('Y-m-d H:i:s', $order['order_date']).'</td>
                                                    <td>'.$order['total_amount'].'</td>
                                                    <td>'.$order['payment_status'].'</td>
                                                    <td>'.$order['order_status'].'</td>
                                                    <td>'.$order['order_rating'].'</td>
                                                    <td>'.$order['user_confirmation'].'</td>
                                                    <td>'.$order['user'].'</td>
                                                    <td>
                                                        <a href="'.base_url().'admin/view_order_detail/'.$order['order_id'].'"><input type="button" name="view_order" id="view_order" value="View Order" class="btn btn-deault"/></a>
                                                    </td>
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

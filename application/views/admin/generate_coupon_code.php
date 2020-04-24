<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Generate Coupon Code</title>

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
                    <small>Generate Coupon Code</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active">Generate Coupon Code</li>
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
                            <div class="panel-title">Generate Coupon Code</div>
                        </div> 
                        <div style="padding-top:30px;" class="panel-body">
                            <form id="generate_coupon_code_form" action="<?php echo base_url().'product/process_generate_coupon_code'; ?>" method="post" class="form-horizontal" role="form">
                                <div style="min-height:250px;">
                                    <div style="margin-bottom: 25px" class="input-group col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <center>
                                                    
                                                </center>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Coupon Code:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" name="coupon_code" id="coupon_code" value="<?php echo $coupon_code; ?>" disabled class="form-control"/>
                                                    <span class="input-group-btn">
                                                        <button type="button" id="generate_code" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                                                    </span>
                                                </div>
                                                <input type="hidden" name="coupon_code_h" id="coupon_code_h" value="<?php echo $coupon_code; ?>" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Discount Type:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="discount_type" name="discount_type" class="form-control">
                                                    <option value=""> - - - - - - - - - - - SELECT - - - - - - - - - - - </option>
                                                    <option value="flat_amount">Flat Amount</option>
                                                    <option value="percentage">Percentage</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Discount:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="discount" placeholder="0.00" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Maximum Discount (Rs.):</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="max_discount" placeholder="0.00" class="form-control"/>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">On order & Above (Rs.):</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="on_order_rs" placeholder="0.00" class="form-control"/> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Description:</label>
                                            </div>
                                            <div class="col-md-6">
                                                    <textarea name="coupon_code_desc" placeholder="Write description here..." class="form-control"></textarea>
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
            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading app_heading_bg app_panel_heading"><i class="fa fa-angle-double-right"></i> Coupon Code List</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead class="my_table_default">
                                <tr>
                                    <th>No.</th>
                                    <th>Coupon Codes</th>
                                    <th>Discount Type</th>
                                    <th>Discount</th>
                                    <th>Maximum Discount (Rs.)</th>
                                    <th>Description</th>
                                    <th class="col-md-2">Status</th>
                                    <th class="text_center col-md-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(! empty($coupon_code_list)){
                                        $i = 1;
                                        foreach ($coupon_code_list as $coupon_code) {
                                            echo '
                                                <tr class="coupon_code_tr">
                                                    <td>'.$i.'
                                                        <input type="hidden" name="coupon_code_id" id="coupon_code_id" value="'.$coupon_code->cc_id.'"/>
                                                    </td>
                                                    <td>'.$coupon_code->cc_code.'</td>
                                                    <td>'.$coupon_code->cc_discount_type.'</td>
                                                    <td>'.$coupon_code->cc_discount.'</td>
                                                    <td>Rs. '.$coupon_code->cc_max_discount.'</td>
                                                    <td>'.$coupon_code->cc_description.'</td>
                                                    <td>
                                                        '.(($coupon_code->cc_flag == 1)? "Activated" : "Deactivated").'
                                                        '.(
                                                            ($coupon_code->cc_flag == 1)?
                                                                "<button type='button' name='coupon_code_deactive' id='coupon_code_deactive' onclick='action_coupon_code(this);' value='Deactive' class='btn btn-danger'>Deactive</button>" 
                                                                :
                                                                "<button type='button' name='coupon_code_active' id='coupon_code_active' onclick='action_coupon_code(this);' value='Active' class='btn btn-default'>Active</button>" 
                                                        ).'
                                                    </td>
                                                    <td align="center">
                                                        <a href="'.base_url().'product/edit_coupon_code/'.$coupon_code->cc_id.'"><button class="btn btn-default">Edit</button></a>
                                                        <button class="btn btn-danger" value="Delete" onclick="action_coupon_code(this)">Delete</button>
                                                    </td>
                                                </tr>
                                            ';
                                            $i++;
                                        }
                                    } else {
                                        echo '
                                            <tr><td colspan="8" align = "center">No Coupon Code found !</td></tr>
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

    <!-- JS code for this page -->
        <script>
        $("#generate_code").click(function () {
            $.ajax({
                url: "<?php echo base_url().'product/regenerate_coupon_code' ?>",
                // type: 'POST',
                async : false,
                dataType: "json",
                // data: {},
                success: function(data) {
                    $("#coupon_code").val(data);
                    $("#coupon_code_h").val(data);
                }
            });
        });

        $("#generate_coupon_code_form").validate({
            rules: {
                discount_type: "required",
                discount: {
                    required: true,
                    number: true
                },
                max_discount: {
                    required: true,
                    number: true
                },
                on_order_rs: {
                    required: true,
                    number: true
                },
            },
            messages: {
                discount_type: "Select Discount Type !",                
                discount: {
                    required: "Enter Discount!",
                    number: "Decimal Numbers Only!"
                },              
                on_order_rs: {
                    required: "Enter Maximum Discount Amount !",
                    number: "Decimal Numbers Only!"
                },
                max_discount: {
                    required: "Enter On Order Amount !",
                    number: "Decimal Numbers Only!"
                },          
            }
        });

       function action_coupon_code(this_val) {
            var coupon_code_id              =   $(this_val).closest('.coupon_code_tr').find('#coupon_code_id').val();
            var coupon_code_action          =   $(this_val).val();
            if(coupon_code_id == '' || coupon_code_action == ''){
                alert('Invalide coupon code selected !');
                return false;
            }
            if(coupon_code_action == 'Delete'){
                var cfn =  confirm('Are You sure ?');
                if(!cfn)
                    return false;
            }

            $.ajax({
                url: "<?php echo base_url().'product/action_coupon_code' ?>",
                type: 'POST',
                async : false,
                dataType: "json",
                data: {coupon_code_id:coupon_code_id, coupon_code_action:coupon_code_action},
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

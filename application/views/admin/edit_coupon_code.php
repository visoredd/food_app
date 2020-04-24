<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Edit Coupon Code</title>

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
                    <small>Edit Coupon Code</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active">Edit Coupon Code</li>
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
                            <div class="panel-title">Edit Coupon Code</div>
                        </div> 
                        <div style="padding-top:30px;" class="panel-body">
                            <form id="edit_coupon_code_form" action="<?php echo base_url().'product/process_edit_coupon_code'; ?>" method="post" class="form-horizontal" role="form">
                                <div style="min-height:250px;">
                                    <div style="margin-bottom: 25px" class="input-group col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Coupon Code:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" name="coupon_code" id="coupon_code" value="<?php echo $coupon_code_details[0]->cc_code; ?>" disabled class="form-control"/>
                                                    <span class="input-group-btn">
                                                        <button type="button" id="generate_code" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                                                    </span>
                                                </div>
                                                <input type="hidden" name="coupon_code_h" id="coupon_code_h" value="<?php echo $coupon_code_details[0]->cc_code; ?>" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Discount Type:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="discount_type" name="discount_type" class="form-control">
                                                    <option value=""> - - - - - - - - - - - SELECT - - - - - - - - - - - </option>
                                                    <option value="flat_amount" <?php if ($coupon_code_details[0]->cc_discount_type == 'flat_amount'){ echo 'Selected';} ?> >Flat Amount</option>
                                                    <option value="percentage" <?php if ($coupon_code_details[0]->cc_discount_type == 'percentage'){ echo 'Selected';} ?> >Percentage</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Discount:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="discount" value="<?php echo $coupon_code_details[0]->cc_discount; ?>" placeholder="0.00" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Maximum Discount (Rs.):</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="max_discount" value="<?php echo $coupon_code_details[0]->cc_max_discount; ?>" placeholder="0.00" class="form-control"/>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">On order & Above (Rs.):</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="on_order_rs" value="<?php echo $coupon_code_details[0]->cc_on_order_rs; ?>" placeholder="0.00" class="form-control"/> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label class="control-label font_red app_title">Description:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="coupon_code_desc" placeholder="Write description here..." class="form-control"><?php echo $coupon_code_details[0]->cc_description; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding:15px 60px 0 60px; font-size:85%" >
                                            <input type="hidden" name="update_coupon_code_id" value="<?php echo $coupon_code_details[0]->cc_id ?>"/>
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

        $("#edit_coupon_code_form").validate({
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
        
        </script>
	
</body>

</html>

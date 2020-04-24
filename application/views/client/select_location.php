<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>CakeFactory</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php require_once('includes/head.inc.php'); ?>
	</head>
	<body>	
		    <div class="container">    
       			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            		<div class="panel panel-danger" >
                    	<div class="panel-heading app_heading_bg">
                        	<div class="panel-title">Let us know where to deliver</div>
                    	</div> 
                    	<div style="padding-top:30px;" class="panel-body">
							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <form id="select_location_form" action="<?php echo base_url().'user/store_user_location'; ?>" method="post" class="form-horizontal" role="form">
                                <div style="min-height:350px;">
		                            <div style="margin-bottom: 25px" class="input-group col-md-12">
		                            	<div class="form-group">
			                                <div class="col-md-6">
			                                	<label class="control-label font_red app_title">Select Auditorium:</label>
			                                </div>
			                                <div class="col-md-6">
			                                	<select id="auditorium" name="auditorium" onchange="get_row($this);" class="form-control">
			                                		<option value="0">-----Select----</option>
			                                		<?php
			                                			foreach ($auditorium_list as $auditorium) {
			                                				echo '<option value="'.$auditorium->auditorium_id.'">'.$auditorium->auditorium_name.'</option>';
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
			                                	<select id="row" name="row" class="form-control">
			                                		<option value="0">-----Select----</option>
			                                	</select>
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="col-md-6">
			                                	<label class="control-label font_red app_title">Select Seat:</label>
			                                </div>
			                                <div class="col-md-6">
			                                	<select id="seat" name="seat" class="form-control">
			                                		<option value="0">-----Select----</option>
			                                	</select>
			                                </div>
			                            </div>
		                            </div>
                            	</div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding:15px 60px 0 60px; font-size:85%" >
                                      		<button id="btn-login" type="submit" class="btn btn-danger">Start Buying</button>
                                        </div>
                                    </div>
                                </div>    
                            </form>
                        </div>                     
                    </div>  
        </div>
        
		<!-- Javascript files -->
		<?php require_once('includes/footer_js.inc.php'); ?>
		
		<!-- JS code for this page -->
		<script>
			$(function(){
			    $("#auditorium").change(function(){
			        var auditorium_id  =   $("#auditorium").val();
			        $.ajax({
			            url: "<?php echo base_url().'user/get_row_by_auditorium' ?>",
			            type: 'POST',
			            async : false,
			            dataType: "json",
			            data: {auditorium_id : auditorium_id},
			                success: function(data) {
			                    $("#row").html(data);
			                }
			        });
			    });
			});
			$(function(){
			    $("#row").change(function(){
			        var row_id  =   $("#row").val();
			        $.ajax({
			            url: "<?php echo base_url().'user/get_seat_by_row' ?>",
			            type: 'POST',
			            async : false,
			            dataType: "json",
			            data: {row_id : row_id},
			                success: function(data) {
			                    $("#seat").html(data);
			                }
			        });
			    });
			});
			$('#select_location_form').submit(function(e){
				var auditorium_val  =   $("#auditorium").val();
				var row_val  		=   $("#row").val();
				var seat_val  		=   $("#seat").val();
				if(auditorium_val == 0 || auditorium_val == ''){
					alert('Select Auditorium !');					
			  		return false;
				} else if(row_val == 0 || row_val == ''){
					alert('Select Row !');					
			  		return false;
				} else if(seat_val == 0 || seat_val == ''){
					alert('Select Seat !');					
			  		return false;
				}
			});
		</script>
	</body>	
</html>
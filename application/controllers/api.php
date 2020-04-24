<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');     
				$this->load->library('session');
				$this->config->item('base_url');
                $this->load->model('apimodel');
				$this->load->helper(array('url', 'language'));
        }
        public function home() 
        {
		    $this->load->view('admin/include/header');
	        $this->load->view('api/login');
	        $this->load->view('admin/include/footer');
    	}
        public function index()
        {
            $Unset_Data = array(
		   'userid'  => '',
		   'username'  => '',
		   'email'		=> '',
		   'isLoggedIn'  => '',
			);

			$this->session->unset_userdata($Unset_Data);	
			$this->load->view('admin/include/header');
	      	$this->load->view('admin/login');
      		$this->load->view('admin/include/footer');
        }

	    public function login()
	    {
	    	$email   			= 	$this->input->post('email');
	    	$password   		= 	$this->input->post('password');
			$user_detail 		= 	$this->apimodel->login($email,$password);
			if(isset($user_detail) && !empty($user_detail)){
				$Newdata = array(
				   'userid'  	=> 	$user_detail[0]['user_id'],
				   'username'  	=> 	$user_detail[0]['user_name'],
				   'email'  	=> 	$user_detail[0]['email_id'],
				   'isLoggedIn'=>true
				);
				$this->session->set_userdata($Newdata);
				redirect('api/dashboard');
			}else{
				$this->session->set_flashdata('error', 'Authentication Failed!');
				redirect('api/home');
				//echo "failed";
			}
	    }

	    public function dashboard()
   		{
	    	$data['user_id']		=	$this->session->userdata('userid');
			$data['user_name']		=	$this->session->userdata('username');
			$data['email']		  	=	$this->session->userdata('email');
			$this->load->view('admin/include/header');
	        $this->load->view('blogview');
	        $this->load->view('admin/include/footer');
			
    	}


		//Displaying food with category.

        public function get_item_detail_api()
        {
        	$file_data = trim(file_get_contents('php://input'));
        	$data = json_decode($file_data, true);

			$user_id 			=	$data['data'][0]['user_id'];
			$access_code 		=	$data['data'][0]['access_code'];
			$category_id 		=	$data['data'][0]['category_id'];
			$theater_id 		=	$data['data'][0]['theater_id'];

			$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
			if($is_auth){
				if($category_id == "all" && $theater_id == "all"){
					$item_details =	$this->db->query(
												"SELECT
													* 
												FROM 
													theaters_food, food_tax, food_item 
												where 
													theaters_food.tf_tax_id = food_tax.tax_id 
													AND theaters_food.tf_item_id = food_item.item_id
												");
				} else if ($category_id == "all" && is_numeric($theater_id) ){
					$item_details =	$this->db->query(
												"SELECT
													* 
												FROM 
													theaters_food, food_tax, food_item 
												where 
													theaters_food.tf_tax_id = food_tax.tax_id 
													AND theaters_food.tf_item_id = food_item.item_id
													AND tf_th_id = '".$theater_id."'
												");
				} else if( is_numeric($category_id) && is_numeric($theater_id) ){
					$item_details =	$this->db->query(
												"SELECT
													* 
												FROM 
													theaters_food, food_tax, food_item 
												where 
													theaters_food.tf_tax_id = food_tax.tax_id 
													AND theaters_food.tf_item_id = food_item.item_id
													AND tf_th_id = '".$theater_id."'
													AND category_id = '".$category_id."'
												");
   				} else {
   					echo json_encode(array("status"=>"Failed ! Invalid Category.")); exit();
				}

				if($item_details->num_rows() > 0){
					$current_records 	=	$item_details->num_rows();
					$detail_view 	=	$item_details->result();
					$i = 0;
					foreach ($detail_view as $row) {
						$result[$i]['item_id']			=	$row->item_id;
						$result[$i]['category_id']		=	$row->category_id;
						$result[$i]['item_name']		=	$row->item_name;
						$result[$i]['item_desc']		=	$row->item_desc;
						if($row->item_image == ''){
							$result[$i]['item_image'] 	=	'http://139.162.42.245/delivery/upload/default.jpg';
						} else {
							$result[$i]['item_image']		=	$row->item_image;
						}
						$result[$i]['item_price']		=	$row->item_price;
						$result[$i]['item_tax']			=	$row->tax_price;

						$i++;
					}
					echo json_encode(array("status"=>"Success","List"=>$result)); exit();
				}else{
					echo json_encode(array("status"=>"Failed ! No record for this category.")); exit();
				}
			} else {
				echo json_encode(array("status"=>"Authentication failed!")); exit();
			}
		}

		public function check_login_api()
		{
			$file_data = trim(file_get_contents('php://input'));
        	$data = json_decode($file_data, true);

			$email 			=	$data['data'][0]['email'];
			$password 		=	$data['data'][0]["password"];

			if($email != "" && $password != ""){
				$query 	=	$this->db->get_where('users',array('email_id'=>$email,'password'=>md5($password)));
				if($query->num_rows() > 0){
					$row[0] = $query->row_array();
					$user_detail 		= 	$row;

					if($user_detail[0]['access_token']){
						$access_code 	=	$user_detail[0]['access_token'];
					} else {
						$access_code 	=	$this->apimodel->generate_access_code();
						$this->db->where('user_id', $user_detail[0]['user_id']);
						$this->db->update('users',array('access_token' => $access_code));
					}
					
					$userdata[] = array(
					   'userid'  		=> 	$user_detail[0]['user_id'],
					   'firstname'  	=> 	$user_detail[0]['first_name'],
					   'lastname'  		=> 	$user_detail[0]['last_name'],
					   'username'  		=> 	$user_detail[0]['user_name'],
					   'email'  		=> 	$user_detail[0]['email_id'],
					   'access_code'	=>	$access_code,
					);
					echo json_encode(array("status"=>"Success.", "userdata" => $userdata)); exit();
				}else{
					echo json_encode(array("status"=>"Failed! This email is not registerd.")); exit();
				}
			} else {
				echo json_encode(array("status"=>"Failed! Enter email and password.")); exit();
			}
		}

		//signup api. insert data from android app.
		public function signup_form_api()
		{
			$file_data = trim(file_get_contents('php://input'));
        	$data = json_decode($file_data, true);

			$first_name 			=	$data['data'][0]['first_name'];
			$last_name 				=	$data['data'][0]['last_name'];
			$user_name 				=	$data['data'][0]['user_name'];
			$phone_no 				=	$data['data'][0]['phone_no'];
			$email_id 				=	$data['data'][0]['email'];
			$password 				=	$data['data'][0]["password"];
			$pass 					= 	md5($password);

			if($first_name!='' && $phone_no!='' && $email_id!='' && $password!='' && $last_name!='' && $user_name!= ''){
				$post_data = array(
			        'first_name'   			=>  $first_name,
			        'last_name'   			=>  $last_name,
    				'phone_no'   			=>  $phone_no,
			        'email_id'   			=>  $email_id,
			        'user_name' 	 	    =>  $user_name,
			        'password'				=>	$pass
			    );
				$array=$this->db->insert('users', $post_data);
				$insert_id = $this->db->insert_id();
				echo json_encode(array("status"=>"Success."));
			}else{
				echo json_encode(array("status"=>"Failed!"));
			}
		}
		public function signup_with_gogle_fb_api(){
			$file_data = trim(file_get_contents('php://input'));
        	$data = json_decode($file_data, true);

			$userData['oauth_provider'] 	= 	$data['data'][0]['oauth_provider'];
            $userData['oauth_uid'] 			= 	$data['data'][0]['oauth_uid'];
            $userData['first_name'] 		= 	$data['data'][0]['first_name'];
            $userData['last_name'] 			= 	$data['data'][0]['last_name'];
            $userData['email_id'] 			= 	$data['data'][0]['email'];
            $userData['gender'] 			= 	$data['data'][0]['gender'];
            $userData['locale'] 			= 	$data['data'][0]['locale'];
            $userData['profile_url'] 		= 	$data['data'][0]['profile_url'];
            $userData['picture_url'] 		= 	$data['data'][0]['picture_url'];
            if($userData['oauth_provider'] !="" && $userData['oauth_uid'] !="" && $userData['first_name'] !="" && $userData['email_id'] !="" ){
	            $userID = $this->apimodel->checkUser($userData);
	            if(!empty($userID)){
					$access_code 	=	$this->apimodel->generate_access_code();
					$this->db->where('user_id', $userID);
					$this->db->update('users',array('access_token' => $access_code));
	            	
	            	$userData['user_id'] 			= 	$userID;
	            	$userData['access_code'] 		= 	$access_code;
	               	
	               	echo json_encode(array("status"=>"Success.", "userdata" => $userData)); exit();
	            } else {
	              echo json_encode(array("status"=>"Failed! somthing went wrong!")); exit();
	            }
            } else {
	              echo json_encode(array("status"=>"Failed! somthing went wrong!")); exit();
            }
		}

		public function get_auditorium_api()
		{
			$file_data = trim(file_get_contents('php://input'));
        	$data = json_decode($file_data, true);

			$user_id 			=	$data['data'][0]['user_id'];
			$access_code 		=	$data['data'][0]['access_code'];
			$theater_id 		=	$data['data'][0]['theater_id'];

			$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
			if($is_auth){
				if($theater_id != ''){
					$auditorium =	$this->db->query(" SELECT * FROM `auditorium` WHERE theater_id='".$theater_id."' ");
						if($auditorium->num_rows() > 0){
							$auditorium_records 			=	$auditorium->num_rows();
							$auditorium_checker_detail 		=	$auditorium->result();
							$html 	=	[];
							$i 		=	0;
							foreach ($auditorium_checker_detail as $auditorium_data) {
								$html[$i]["auditorium_id"] 			=	$auditorium_data->auditorium_id;
								$html[$i]["theater_id"] 			=	$auditorium_data->theater_id;
								$html[$i]["auditorium_name"] 		=	$auditorium_data->auditorium_name;
								$i++;
							}
						echo json_encode(array("status"=>"success","list"=>$html)); exit();
					} else {
						echo json_encode(array("status"=>"failed")); exit();
					}								
				} else {
					echo json_encode(array("status"=>"failed")); exit();
				}
			} else {
				echo json_encode(array("status"=>"Authentication failed!")); exit();
			}
		}


		public function get_rows_api()
		{
			$file_data = trim(file_get_contents('php://input'));
        	$data = json_decode($file_data, true);

			$auditorium_id 			=	$data['data'][0]['auditorium_id'];
			$user_id 				=	$data['data'][0]['user_id'];
			$access_code 			=	$data['data'][0]['access_code'];

			$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
			if($is_auth){
				if($auditorium_id!='' && is_numeric($auditorium_id)){
					$rows_checker =	$this->db->query(" SELECT * FROM `row` WHERE auditorium_id=".$auditorium_id." ");
					if($rows_checker->num_rows() > 0){
							$rows_records 			=	$rows_checker->num_rows();
							$rows_checker_detail 		=	$rows_checker->result();
							$html 	=	[];
							$i 		=	0;
							foreach ($rows_checker_detail as $rows_data) {
								$html[$i]["row_id"] 			=	$rows_data->row_id;
								//$html[$i]["auditorium_id"] 		=	$rows_data->auditorium_id;
								$html[$i]["row_name"] 			=	$rows_data->row_name;
								$i++;
							}
						echo json_encode(array("status"=>"success","list"=>$html));	exit();
					} else {
						echo json_encode(array("status"=>"failed")); exit();
					}
				}else{
					echo json_encode(array("status"=>"failed")); exit();
				}
			} else {
				echo json_encode(array("status"=>"Authentication failed!")); exit();
			}

		}

		public function get_seat_api(){

			$file_data = trim(file_get_contents('php://input'));
        	$data = json_decode($file_data, true);

			$auditorium_id 			=	$data['data'][0]['auditorium_id'];
			$row_id 				=	$data['data'][0]['row_id'];
			$user_id 				=	$data['data'][0]['user_id'];
			$access_code 			=	$data['data'][0]['access_code'];

			$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
			if($is_auth){
				if($auditorium_id!='' && is_numeric($auditorium_id) && $row_id !='' && is_numeric($row_id)){
					$seat_checker =	$this->db->query(" SELECT * FROM `seat` WHERE auditorium_id=".$auditorium_id." and row_id=".$row_id." ");
					
					if($seat_checker->num_rows() > 0){
						$seat_records 				=	$seat_checker->num_rows();
						$seat_checker_detail 		=	$seat_checker->result();
						// $html 	=	[];
						$i 		=	0;
						foreach ($seat_checker_detail as $seat_data) {
							$html[$i]["seat_id"] 			=	$seat_data->seat_id;
							//$html[$i]["row_id"] 			=	$seat_data->row_id;
							//$html[$i]["auditorium_id"] 		=	$seat_data->auditorium_id;
							$html[$i]["seat_no"] 			=	$seat_data->seat_no;
							$i++;
						}
						echo json_encode(array("status"=>"success","list"=>$html)); exit();		
					} else {
						echo json_encode(array("status"=>"Failed! No data Found!")); exit();
					}
				}else{
					echo json_encode(array("status"=>"Failed! Invalid ID!")); exit();
				}
			} else {
				echo json_encode(array("status"=>"Authentication failed!")); exit();
			}
		}

		public function search_food_item_api(){
			$file_data = trim(file_get_contents('php://input'));
	  		$data = json_decode($file_data, true);

	  		$search_string 			=	$data['data'][0]['search_string'];
			$access_code 			=	$data['data'][0]['access_code'];
			$user_id 				=	$data['data'][0]['user_id'];
			$theater_id 			=	$data['data'][0]['theater_id'];

			$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
			if($is_auth){
				if($search_string!=''){
					$item_search  =	$this->db->query(
												"SELECT
													* 
												FROM 
													theaters_food, food_tax, food_item 
												where 
													theaters_food.tf_tax_id = food_tax.tax_id 
													AND theaters_food.tf_item_id = food_item.item_id
													AND theaters_food.tf_th_id = '".$theater_id."' 
													AND food_item.item_name like '%$search_string%' 
													");
					if($item_search->num_rows() > 0){
						$item_records 			=	$item_search->num_rows();
						$food_item_details  	=	$item_search->result();
						$html 	=	[];
						$i 		=	0;
						foreach ($food_item_details as $rows_data) {
							$html[$i]["item_id"] 	    =	$rows_data->item_id;
							$html[$i]["category_id"] 	=	$rows_data->category_id;
							$html[$i]["item_name"] 		=	$rows_data->item_name;
							$html[$i]["item_desc"] 		=	$rows_data->item_desc;
							$html[$i]["item_image"] 	=	$rows_data->item_image;
							if($rows_data->item_image == ''){
								$html[$i]['item_image'] 	=	'http://139.162.42.245/delivery/upload/default.jpg';
							} else {
								$html[$i]['item_image']		=	$rows_data->item_image;
							}
							$html[$i]["item_price"] 	=	$rows_data->item_price;
							$html[$i]["item_tax"] 	    =	$rows_data->tax_price;
							$i++;
						}	
						echo json_encode(array("status"=>"success","list"=>$html)); exit();
					}else{
						echo json_encode(array("status"=>"Failed! No data Found!")); exit();
					}
				} else {
					echo json_encode(array("status"=>"Failed! Invalid search string!")); exit();
				}
			} else {
				echo json_encode(array("status"=>"Authentication failed!")); exit();
			}
		}


	public function place_order_api()
	{
		$file_data = trim(file_get_contents('php://input'));
  		$data = json_decode($file_data, true);

		$user_id 				=	$data['data'][0]['user_id'];
		$location_id 			=	$data['data'][0]['location_id'];
		$auditorium_id 			=	$data['data'][0]['auditorium_id'];
		$row_id 				=	$data['data'][0]['row_id'];
		$seat_id 				=	$data['data'][0]['seat_id'];
		$item_id 				=	$data['data'][0]['item_id'];
		$item_price 			=	$data['data'][0]['item_price'];
		$item_quantity 			=	$data['data'][0]['item_quantity'];
  		$payment_method 		=	$data['data'][0]['payment_method'];
  		$payment_status 		=	$data['data'][0]['payment_status'];
		$access_code 			=	$data['data'][0]['access_code'];

		$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
		if($is_auth){
			if($user_id!='' && $location_id!='' && $auditorium_id!='' && $row_id!='' 
				&& $seat_id!='' && $item_id!='' && $payment_method!='' && $payment_status !=""){
				$total_amount = 0;
				$total_items =  sizeof($item_id);
				for ($j = 0; $j < $total_items; $j++){
					$qty   		=  $item_quantity[$j];
					$price 		=  $item_price[$j];
				 	$total_amount = $total_amount + ($price * $qty);
				}
				$post_data = array(
							        'user_id'   			=>  $user_id,
			        				'seat_id'   			=>  $seat_id,
							        'row_id'   				=>  $row_id,
							        'location_id' 	 	    =>  $location_id,
							        'auditorium_id'			=>	$auditorium_id,
							        'total_amount'			=>	$total_amount,
							        'payment_method'		=>	$payment_method,
							        'payment_status'		=>	$payment_status,
							    );
				$this->db->insert('orders', $post_data);
				$insert_id = $this->db->insert_id();

				$total_items =  sizeof($item_id);
				for ($i = 0; $i < $total_items; $i++){
				 	$order_detail = array(
								        'od_o_id'   			=>  $insert_id,
				        				'od_item_id'   			=>  $item_id[$i],
								        'od_item_qty'   		=>  $item_quantity[$i],
								        'od_item_price' 	 	=>  $item_price[$i],
								    );

					$this->db->insert('order_detail', $order_detail);
				}
				
				echo json_encode(array("status"=>"success","OrderDetails"=>array('order_id' => $insert_id))); exit();
			}else{
				echo json_encode(array("status"=>"Failed")); exit();
			}
		} else {
			echo json_encode(array("status"=>"Authentication failed!")); exit();
		}
	}
	public function get_all_orders_api(){
		$file_data = trim(file_get_contents('php://input'));
  		$data = json_decode($file_data, true);

		$user_id 				=	$data['data'][0]['user_id'];
		$access_code 			=	$data['data'][0]['access_code'];

		$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
		if($is_auth){
			$get_order_q = $this->db->get_where('orders', array('user_id' => $user_id));
			if($get_order_q->num_rows() >0){
				$i = 0;
				foreach ($get_order_q->result() as $order) {
					$order_id 					=	$order->order_id;
					$total_amount 				=	$order->total_amount;
					$order_status  				=	$order->order_status;
					$user_confirmation  		=	$order->user_confirmation;
					
					$get_order_detail_q = $this->db->get_where('order_detail', array('od_o_id' => $order_id));
					if($get_order_detail_q->num_rows() >0){
						$get_order_detail_res 	=	$get_order_detail_q->result();
						$order_details_data 	=	array();
						$j 						=	0;
						foreach ($get_order_detail_res as $get_order_detail_row) {
							$od_item_id 	=	$get_order_detail_row->od_item_id;
							$od_item_qty 	=	$get_order_detail_row->od_item_qty;
							$od_item_price 	=	$get_order_detail_row->od_item_price;

							$item_name 		=	'';
							$get_item_name_q 	= 	$this->db->get_where('food_item', array('item_id' => $od_item_id));
							if($get_item_name_q->num_rows() > 0){
								$get_item_name_res 	=	$get_item_name_q->result();
								$item_name 			=	$get_item_name_res[0]->item_name;
							}

							$order_details_data[$j]['item_name']  		=	$item_name;
							$order_details_data[$j]['item_quantity']  	=	$od_item_qty;
							$order_details_data[$j]['item_price']  		=	$od_item_price;
							$j++;
						}
						$data_result[$i] 	= 	array(
												"order_id"			=>	$order_id,
												"order_details"		=>	$order_details_data,
												"total_amount" 		=>  $total_amount,
												"order_status" 		=>	$order_status,
												"user_confirmation" =>  $user_confirmation,
											);
					}
					$i++;
				}
				echo json_encode(array("status"=>"Success.","user_id"=>$user_id, "Orders"=>$data_result)); exit();
			} else {
				echo json_encode(array("status"=>"Failed ! NO order for this user !")); exit();
			}
		} else {
			echo json_encode(array("status"=>"Authentication failed!")); exit();
		}
	}
	public function get_details_of_order_api(){
		$file_data = trim(file_get_contents('php://input'));
  		$data = json_decode($file_data, true);

		$order_id 				=	$data['data'][0]['order_id'];
		$user_id 				=	$data['data'][0]['user_id'];
		$access_code 			=	$data['data'][0]['access_code'];

		$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
		if($is_auth){
			if($order_id!=''){
				$get_order_detail_q = $this->db->get_where('order_detail', array('od_o_id' => $order_id));
				if($get_order_detail_q->num_rows() >0){
					echo json_encode(array("status"=>"Success.","order_id"=>$order_id, "Order Details"=>$get_order_detail_q->result())); exit();
				} else {
					echo json_encode(array("status"=>"Failed ! NO Detail for this Order !")); exit();
				}
			}else{
				echo json_encode(array("status"=>"Failed ! Invalid Order ID!")); exit();
			}
		} else {
			echo json_encode(array("status"=>"Authentication failed!")); exit();
		}
	}
	public function delivery_confirmation_api(){
		$file_data = trim(file_get_contents('php://input'));
  		$data = json_decode($file_data, true);

		$user_id 				=	$data['data'][0]['user_id'];
		$access_code 			=	$data['data'][0]['access_code'];
		$order_id 				=	$data['data'][0]['order_id'];
		$user_confirmation 		=	$data['data'][0]['user_confirmation'];

		$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
		if($is_auth){
			if($order_id!='' && ((strtolower($user_confirmation) == 'yes') || (strtolower($user_confirmation) == 'no')) ){
				$get_order_q = $this->db->get_where('orders', array('order_id' => $order_id));
				if($get_order_q->num_rows() >0){
					if(strtolower($user_confirmation) == 'yes'){
						$data 	= 	array('user_confirmation'=>"Delivered");
					} else if(strtolower($user_confirmation) == 'no'){
						$data 	= 	array('user_confirmation'=>"Not delivered");
					} else {
						$data 	= 	array('user_confirmation'=>"Pending");
					}
					$this->db->where('order_id',$order_id);
					$this->db->update('orders',$data);
					echo json_encode(array("status"=>"Success.")); exit();					
				} else {
					echo json_encode(array("status"=>"Failed ! NO Detail for this Order!")); exit();
				}
			}else{
				echo json_encode(array("status"=>"Failed ! Invalid Order ID!")); exit();
			}
		} else {
			echo json_encode(array("status"=>"Authentication failed!")); exit();
		}
	}
	public function get_theater_api(){
		$file_data = trim(file_get_contents('php://input'));
    	$data = json_decode($file_data, true);

		$latitude 				=	$data['data'][0]['latitude'];
		$longituted 			=	$data['data'][0]['longituted'];
		$user_id 				=	$data['data'][0]['user_id'];
		$access_code 			=	$data['data'][0]['access_code'];

		$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
		if($is_auth){
			if($latitude!='' && $longituted != ''){
				$get_theater_q 	=		$this->db->query('SELECT *, ( 3959 * acos( cos( radians('.$latitude.') ) * cos( radians( th_latitude ) ) * cos( radians( th_longitude ) - radians('.$longituted.') ) + sin( radians('.$latitude.') ) * sin( radians( th_latitude ) ) ) ) AS distance FROM theater HAVING distance < 0.621371 ORDER BY distance LIMIT 0 , 1');
				// 20 METER
				// $get_theater_q 	=		$this->db->query('SELECT *, ( 3959 * acos( cos( radians('.$latitude.') ) * cos( radians( th_latitude ) ) * cos( radians( th_longitude ) - radians('.$longituted.') ) + sin( radians('.$latitude.') ) * sin( radians( th_latitude ) ) ) ) AS distance FROM theater HAVING distance < 0.0124274 ORDER BY distance LIMIT 0 , 1');
				if($get_theater_q->num_rows() > 0){
					echo json_encode(array("status"=>"Success.","Theaters"=>$get_theater_q->result()));
				} else {
					echo json_encode(array("status"=>"Failed! No Theaters found!")); exit();
				}
			} else {
				echo json_encode(array("status"=>"Failed! Invalid latitude or longituted!")); exit();
			}
		} else {
			echo json_encode(array("status"=>"Authentication failed!")); exit();
		}
	}
	public function choose_theater_api(){
		$file_data = trim(file_get_contents('php://input'));
    	$data = json_decode($file_data, true);

		$latitude 				=	$data['data'][0]['latitude'];
		$longituted 			=	$data['data'][0]['longituted'];
		$user_id 				=	$data['data'][0]['user_id'];
		$access_code 			=	$data['data'][0]['access_code'];

		$is_auth 	=	$this->apimodel->is_authenticated_user($user_id, $access_code);
		if($is_auth){
			if($latitude!='' && $longituted != ''){
				$get_theater_q 	=		$this->db->query('SELECT *, ( 3959 * acos( cos( radians('.$latitude.') ) * cos( radians( th_latitude ) ) * cos( radians( th_longitude ) - radians('.$longituted.') ) + sin( radians('.$latitude.') ) * sin( radians( th_latitude ) ) ) ) AS distance FROM theater HAVING distance < 0.621371 ORDER BY distance LIMIT 0 , 2');
				// 20 METER
				// $get_theater_q 	=		$this->db->query('SELECT *, ( 3959 * acos( cos( radians('.$latitude.') ) * cos( radians( th_latitude ) ) * cos( radians( th_longitude ) - radians('.$longituted.') ) + sin( radians('.$latitude.') ) * sin( radians( th_latitude ) ) ) ) AS distance FROM theater HAVING distance < 0.0124274 ORDER BY distance LIMIT 0 , 2');
				if($get_theater_q->num_rows() > 0){
					echo json_encode(array("status"=>"Success.","Theaters"=>$get_theater_q->result())); exit();
				} else {
					echo json_encode(array("status"=>"Failed! No Theaters found!")); exit();
				}
			} else {
				echo json_encode(array("status"=>"Failed! Invalid latitude or longituted!")); exit();
			}
		} else {
			echo json_encode(array("status"=>"Authentication failed!")); exit();
		}
	}
}		
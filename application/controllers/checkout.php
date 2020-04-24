<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model('product_model');
		$this->load->model('place_model');
		$this->load->model('cart_model');
		$this->load->model('shoppingmodel');
    }

	public function index(){
		if($this->input->post()){
			$this->session->unset_userdata('cart_session');
			$this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">Your order has been sent.</div>');
			redirect('');
		}
		$theater_id 	= 	$this->session->userdata('user_detail')['theater_id'];
		$contents['cart_session'] 			= 	$this->session->userdata('cart_session');
		$contents["auditorium_list"] 		= 	$this->place_model->get_auditorium_data_by_theater_id($theater_id);
		
		$this->load->view('client/checkout',$contents);	
	}

	public function apply_coupon_code(){
		$result 	=	$this->shoppingmodel->apply_coupon_code();
		if($result){
			echo json_encode(array("status" => "success", "result" => $result));
		} else {
			echo json_encode(array("status" => "error"));
		}
	}

	public function cart(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$this->load->view('client/view_cart',$contents);
	
	}
	public function do_paymnt(){
		$user_id 					=	$this->session->userdata('user_detail')['user_id'];
		$theatre_id 				= 	$this->session->userdata('user_detail')['theater_id'];
		$auditorium_id 				=	$this->input->post('auditorium_id_hidden');
		$row_id 		 			=	$this->input->post('row_id_hidden');
		$seat_id 		 			=	$this->input->post('seat_id_hidden');
		$payment_method 			=	$this->input->post('payment_method');
		$applied_cc_id 				=	$this->input->post('coupon_code_id_h');
		$payment_status	 			=	'Success';

		$cart_session		=	$this->session->userdata('cart_session');
		if(!empty($_POST)){
			if($cart_session){
				$total_amount = 0;
				foreach($cart_session as $cs=>$value){
					$row = $this->cart_model->product_detail_by_id($cs);
					$total_amount += $row->item_price*$value;
				}

				//APPLY COUPON CODE
				$after_aplied_cc_total_amount 	=	$total_amount;
				$get_coupon_code_detail_q 		=	$this->db->get_where('coupon_codes', array('cc_flag' => '1', 'cc_id' =>$applied_cc_id));
				if($get_coupon_code_detail_q->num_rows() > 0){
					$get_coupon_code_detail_res 	= 	$get_coupon_code_detail_q->result();
					$discount_type 					=	$get_coupon_code_detail_res[0]->cc_discount_type;
					$discount 						=	$get_coupon_code_detail_res[0]->cc_discount;
					$max_discount 					=	$get_coupon_code_detail_res[0]->cc_max_discount;
					$aplied_cc_description 			=	$get_coupon_code_detail_res[0]->cc_description;

					if(strtolower($discount_type) == 'percentage'){
						$discount_amount 				=	($total_amount * $discount) / 100;
						if($discount_amount > $max_discount  && $max_discount != 0){
							$discount_amount 	=	$max_discount;
						}
						$after_aplied_cc_total_amount 	=	$total_amount - $discount_amount;
					} else if(strtolower($discount_type) == 'flat_amount'){
						$after_aplied_cc_total_amount 	=	$total_amount - $discount;
					}
				} else {
					$applied_cc_id 					=	'';
					$aplied_cc_description 			=	'';
					$after_aplied_cc_total_amount 	=	$total_amount;
				}	
				
				$post_data = array(
							        'order_date' 			 	 	=> 	time(),
							        'user_id'   					=>  $user_id,
							        'theatre_id' 	 				=>  $theatre_id,
							        'auditorium_id'					=>	$auditorium_id,
							        'row_id'   						=>  $row_id,
			        				'seat_id'   					=>  $seat_id,
			        				'applied_cc_id'   				=>  $applied_cc_id,
							        'total_amount'					=>	$total_amount,
							        'after_aplied_cc_total_amount' 	=> 	$after_aplied_cc_total_amount,
							        'aplied_cc_description'			=>	$aplied_cc_description,
							        'payment_method'				=>	$payment_method,
							        'payment_status'				=>	$payment_status,
							    );
				
				$array=$this->db->insert('orders', $post_data);
				$insert_id = $this->db->insert_id();
				foreach($cart_session as $cs=>$value){
					$row = $this->cart_model->product_detail_by_id($cs);
					$order_detail = array(
								        'od_o_id'   			=>  $insert_id,
				        				'od_item_id'   			=>  $row->item_id,
								        'od_item_qty'   		=>  $value,
								        'od_item_price' 	 	=>  $row->item_price,
								    );

					$array=$this->db->insert('order_detail', $order_detail);
				}
				$this->session->unset_userdata('cart_session');
				$this->session->set_userdata('success_message', 'Order Has been placed with amount of Rs. '.$after_aplied_cc_total_amount.' !');
				redirect('checkout');
			} else{
				$this->session->set_userdata('error_message', 'Your cart was empty !');
				redirect('checkout');
			}
		} else {
			$this->session->set_userdata('error_message', 'Your cart was empty !');
			redirect('checkout');
		}
	}
}

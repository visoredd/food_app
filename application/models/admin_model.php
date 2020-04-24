<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function admin_chk_login($username,$password){
		// $password 	=	md5($password);
		$query 	=	$this->db->get_where('admin_users',array('au_email'=>$username, 'au_password'=>md5($password)));
		if($query->num_rows() > 0){
			$row[0] = $query->row_array();
			return $row;
		}else{
			return false; 
		}
	}

	public function count_all_users(){
		$count_all_users_q 	=	$this->db->get('users');
		return $count_all_users_q->num_rows();
	}

	public function get_all_users($start, $limit){
		$get_all_users_q 	=	$this->db->limit($limit,$start)->get('users');
		if($get_all_users_q->num_rows() > 0){
			return 	$get_all_users_q->result();
		} else {
			return false;
		}
	}

	public function count_all_orders(){
		$count_all_orders_q 	=	$this->db->get('orders');
		return $count_all_orders_q->num_rows();
	}

	public function get_all_orders($start, $limit){
		$get_all_orders_q 	=	$this->db->limit($limit,$start)->get('orders');
		if($get_all_orders_q->num_rows() > 0){
			$get_all_orders_res 	=	$get_all_orders_q->result();
			$result 	=	array();
			$i 			=	0;
			foreach ( $get_all_orders_res as $get_all_orders_row ) {
				$user_id 	=	$get_all_orders_row->user_id;
				$user 		=	'';
				$get_user_name_q 	=	$this->db->get_where('users', array('user_id' => $user_id));
				if($get_user_name_q->num_rows() > 0){
					$get_user_name_res 	=	$get_user_name_q->result();
					$user 				=	$get_user_name_res[0]->first_name;
				}

				$result[$i]['order_id'] 			=	$get_all_orders_row->order_id;
				$result[$i]['order_date'] 			=	$get_all_orders_row->order_date;
				$result[$i]['total_amount'] 		=	$get_all_orders_row->total_amount;
				$result[$i]['payment_status'] 		=	$get_all_orders_row->payment_status;
				$result[$i]['order_status'] 		=	$get_all_orders_row->order_status;
				$result[$i]['user_confirmation'] 	=	$get_all_orders_row->user_confirmation;
				$result[$i]['order_rating'] 		=	$get_all_orders_row->order_rating;
				
				$result[$i]['user'] 				=	$user;
			
				$i++;
			}

			return 	$result;
		} else {
			return false;
		}
	}

	public function get_order_details_by_odrer_id($order_id){
		$get_order_details_q 		=	$this->db->get_where('order_detail', array('od_o_id' => $order_id));
		if($get_order_details_q->num_rows() > 0){
			$get_order_details_res 			=	$get_order_details_q->result();
			$od_item_id 	=	$get_order_details_res[0]->od_item_id;
			// echo "<pre>";
			// print_r($get_order_details_q->result());
			// exit();
		} else {
			return false;
		}
	}
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */
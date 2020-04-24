<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Shoppingmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function count_all_item_data(){
    	$theater_id 	=	$this->session->userdata('user_detail')['theater_id'];
		$count_item_details =	$this->db->query(
										'SELECT
											* 
										FROM 
											theaters_food, food_tax, food_item 
										where 
											theaters_food.tf_tax_id = food_tax.tax_id 
											AND theaters_food.tf_item_id = food_item.item_id
											AND theaters_food.tf_th_id 	=	"'.$theater_id.'"
									');
		return $count_item_details->num_rows();
    }

	function get_all_item_data($start, $limit){
		$theater_id 	=	$this->session->userdata('user_detail')['theater_id'];
		$item_details =	$this->db->query(
										'SELECT
											* 
										FROM 
											theaters_food, food_tax, food_item 
										where 
											theaters_food.tf_tax_id = food_tax.tax_id 
											AND theaters_food.tf_item_id = food_item.item_id
											AND theaters_food.tf_th_id 	=	"'.$theater_id.'"
											limit '.$start.','.$limit.'
									');

		if($item_details->num_rows() > 0){
			$detail_view 	=	$item_details->result();
			$result = array();
			$i = 0;
			foreach ($detail_view as $row) {
				$result[$i]['item_id']			=	$row->item_id;
				$result[$i]['item_name']		=	$row->item_name;
				$result[$i]['item_desc']		=	$row->item_desc;
				if($row->item_image == ''){
					$result[$i]['item_image'] 	=	'http://139.162.42.245/delivery/upload/default.jpg';
				} else {
					$result[$i]['item_image']	=	$row->item_image;
				}
				$result[$i]['item_price']		=	$row->item_price;
				$result[$i]['tax_price']		=	$row->tax_price;

				$i++;
			}
			return $result;
		} else {
    		return false;
    	}
	}

	function count_item_by_category($category){
		$theater_id 		=	$this->session->userdata('user_detail')['theater_id'];
		$category_name		=	$category;
		$get_item_details_q 	= $this->db->query(
												'SELECT
													*
												FROM
													theaters_food, food_tax, food_item, food_category
												WHERE
													theaters_food.tf_tax_id = food_tax.tax_id 
													AND theaters_food.tf_item_id = food_item.item_id 
													AND food_item.category_id = food_category.category_id 
													AND theaters_food.tf_th_id = "'.$theater_id.'" 
													AND food_category.category_name = "'.$category_name.'"
												');
		return $get_item_details_q->num_rows();

	}

	function get_item_by_category($start, $limit, $category){
		$theater_id 		=	$this->session->userdata('user_detail')['theater_id'];
		$category_name		=	$category;

		$get_item_details_q 	= $this->db->query(
												'SELECT
													*
												FROM
													theaters_food, food_tax, food_item, food_category
												WHERE
													theaters_food.tf_tax_id = food_tax.tax_id 
													AND theaters_food.tf_item_id = food_item.item_id 
													AND food_item.category_id = food_category.category_id 
													AND theaters_food.tf_th_id = "'.$theater_id.'" 
													AND food_category.category_name = "'.$category_name.'"
													limit '.$start.','.$limit.'
												');
		if($get_item_details_q->num_rows() > 0){
			$get_item_details_res =	$get_item_details_q->result();
			
			$result = array();
			$i = 0;
			foreach ($get_item_details_res as $row) {
				$result[$i]['item_id']			=	$row->item_id;
				$result[$i]['category_id']		=	$row->category_id;
				$result[$i]['category_name']	=	$row->category_name;
				$result[$i]['item_name']		=	$row->item_name;
				$result[$i]['item_desc']		=	$row->item_desc;
				if($row->item_image == ''){
					$result[$i]['item_image'] 	=	'http://139.162.42.245/delivery/upload/default.jpg';
				} else {
					$result[$i]['item_image']	=	$row->item_image;
				}
				$result[$i]['item_price']		=	$row->item_price;
				$result[$i]['tax_price']		=	$row->tax_price;

				$i++;
			}
			return $result;
		} else {
    		return false;
    	}
	}

	function count_search_item($search_item_name){
		$theater_id 			=	$this->session->userdata('user_detail')['theater_id'];
		$search_item_name		=	$search_item_name;

		$get_item_details_q 	= $this->db->query(
												'SELECT
													*
												FROM
													theaters_food, food_tax, food_item, food_category
												WHERE
													theaters_food.tf_tax_id = food_tax.tax_id 
													AND theaters_food.tf_item_id = food_item.item_id 
													AND food_item.category_id = food_category.category_id 
													AND theaters_food.tf_th_id = "'.$theater_id.'" 
													AND food_item.item_name like "%'.$search_item_name.'%"
												');
		
		return $get_item_details_q->num_rows();
	}

	function get_search_item($start, $limit, $search_item_name){
		$theater_id 			=	$this->session->userdata('user_detail')['theater_id'];
		$search_item_name		=	$search_item_name;

		$get_item_details_q 	= $this->db->query(
												'SELECT
													*
												FROM
													theaters_food, food_tax, food_item, food_category
												WHERE
													theaters_food.tf_tax_id = food_tax.tax_id 
													AND theaters_food.tf_item_id = food_item.item_id 
													AND food_item.category_id = food_category.category_id 
													AND theaters_food.tf_th_id = "'.$theater_id.'" 
													AND food_item.item_name like "%'.$search_item_name.'%"
													limit '.$start.','.$limit.'
												');
		
		if($get_item_details_q->num_rows() > 0){
			$get_item_details_res =	$get_item_details_q->result();
			
			$result = array();
			$i = 0;
			foreach ($get_item_details_res as $row) {
				$result[$i]['item_id']			=	$row->item_id;
				$result[$i]['category_id']		=	$row->category_id;
				$result[$i]['category_name']	=	$row->category_name;
				$result[$i]['item_name']		=	$row->item_name;
				$result[$i]['item_desc']		=	$row->item_desc;
				if($row->item_image == ''){
					$result[$i]['item_image'] 	=	'http://139.162.42.245/delivery/upload/default.jpg';
				} else {
					$result[$i]['item_image']	=	$row->item_image;
				}
				$result[$i]['item_price']		=	$row->item_price;
				$result[$i]['tax_price']		=	$row->tax_price;

				$i++;
			}
			return $result;
		} else {
    		return false;
    	}
	}

	public function apply_coupon_code(){
		$coupon_code 	=	trim($this->input->post('coupon_code'));
		$get_coupon_code_q 	=	$this->db->order_by('cc_id', 'desc')->limit('1','0')->get_where('coupon_codes', array('cc_flag' => '1', 'cc_code' =>$coupon_code));
		if($get_coupon_code_q->num_rows() > 0 ){
			return 	$get_coupon_code_q->result();
		} else {
			return false;
		}
	}
	public function get_order_tracking(){
		$user_id 	=	$this->session->userdata('user_detail')['user_id'];
		$get_order_q = $this->db->query('select * from orders where user_id ="'.$user_id.'" order by order_id desc limit 1');
		if($get_order_q->num_rows() > 0){
			return $get_order_q->result();
		} else {
    		return false;
    	}
	}
	public function change_order_status(){
		$user_id 		=	$this->session->userdata('user_detail')['user_id'];
		$get_order_q 	= 	$this->db->query('select * from orders where user_id ="'.$user_id.'" order by order_id desc limit 1');
		if ($get_order_q->num_rows() > 0){
			$get_order_res 	=	$get_order_q->result();
			$order_id	 	=	$get_order_res[0]->order_id;
			if($this->input->post('yes') != ""){
				$data = array('user_confirmation'=>"Delivered");
			} else if($this->input->post('no') != ""){
				$data = array('user_confirmation'=>" Not delivered");
			}
			$this->db->where('order_id',$order_id);
			$this->db->update('orders',$data);
			return true;
		} else {
    		return false;
    	}
	}

}
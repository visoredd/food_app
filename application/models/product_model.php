<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function get_food_items_data(){
    	$food_items_detail 		= 	$this->db->query(
                                                    "SELECT
                                                        * 
                                                    FROM 
                                                        food_item, food_category
                                                    where 
                                                        food_item.category_id = food_category.category_id
                                                    ");
    
    	if($food_items_detail->num_rows() > 0){
            return $food_items_detail->result();
    	} else {
			return false;
    	}
	}
	public function generate_coupon_code(){
		$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$coupon_code = "";
		for ($i = 0; $i < 10; $i++) {
		    $coupon_code .= $chars[mt_rand(0, strlen($chars)-1)];
		}

		$chk_copoun_code_q 	=	$this->db->get_where('coupon_codes', array('cc_code' => $coupon_code));
		if($chk_copoun_code_q->num_rows() == 0){
			return $coupon_code;
		} else {
	      	return $this->generate_coupon_code();
		}  
	}
	public function process_generate_coupon_code(){
		$coupon_code 		=	$this->input->post('coupon_code_h');
		$discount_type 		=	$this->input->post('discount_type');
		$discount 			=	$this->input->post('discount');
		$max_discount 		=	$this->input->post('max_discount');
		$on_order_rs 		=	$this->input->post('on_order_rs');
		$coupon_code_desc 	= 	$this->input->post('coupon_code_desc');

		
		$coupon_code_data 	=	array(
										'cc_code' 			=> 	$coupon_code,
										'cc_discount_type' 	=> 	$discount_type,
										'cc_discount' 		=> 	$discount,
										'cc_max_discount' 	=> 	$max_discount,
										'cc_on_order_rs' 	=> 	$on_order_rs,
										'cc_description' 	=> 	$coupon_code_desc,
									);
		return $this->db->insert('coupon_codes',$coupon_code_data);
	}
    public function get_all_coupon_code(){
        $get_all_coupon_code_q      =   $this->db->get('coupon_codes');
        if($get_all_coupon_code_q->num_rows() > 0){
            return  $get_all_coupon_code_q->result();
        } else {
            return false;
        }
    }

    public function action_coupon_code(){
        $coupon_code_action     =   $this->input->post('coupon_code_action');
        $coupon_code_id         =   $this->input->post('coupon_code_id');

        if($coupon_code_action == 'Active'){
            $this->db->where('cc_id', $coupon_code_id);
            $this->db->update('coupon_codes', array('cc_flag' => '1'));
            return 'Activated.'; 
        } else if($coupon_code_action == 'Deactive'){
            $this->db->where('cc_id', $coupon_code_id);
            $this->db->update('coupon_codes', array('cc_flag' => '0'));
            return 'Deactivated.'; 
        } else if($coupon_code_action == 'Delete'){
            $this->db->where('cc_id', $coupon_code_id);
            $this->db->delete('coupon_codes');
            return 'Record Deleteed.';
        } else {
            return false;
        }
    }

    public function get_coupon_code_by_id($id){
        $get_coupon_code_by_id_q      =   $this->db->get_where('coupon_codes', array('cc_id' =>$id));
        if($get_coupon_code_by_id_q->num_rows() > 0){
            return  $get_coupon_code_by_id_q->result();
        } else {
            return false;
        }
    }
    public function process_edit_coupon_code(){
        $coupon_code_id         =   $this->input->post('update_coupon_code_id');
        $cc_code                =   $this->input->post('coupon_code_h');
        $cc_discount_type       =   $this->input->post('discount_type');
        $cc_discount            =   $this->input->post('discount');
        $cc_max_discount        =   $this->input->post('max_discount');
        $cc_on_order_rs         =   $this->input->post('on_order_rs');
        $cc_description         =   $this->input->post('coupon_code_desc');
        if($coupon_code_id != '' && is_numeric($coupon_code_id) && is_numeric($cc_discount)){
            $update_coupon_code_data    =   array(
                                                'cc_code'               =>   $cc_code,
                                                'cc_discount_type'      =>   $cc_discount_type,
                                                'cc_discount'           =>   $cc_discount,
                                                'cc_max_discount'       =>   $cc_max_discount,
                                                'cc_on_order_rs'        =>   $cc_on_order_rs,
                                                'cc_description'        =>   trim($cc_description)
                                                );
            $this->db->where('cc_id', $coupon_code_id);
            return  $this->db->update('coupon_codes', $update_coupon_code_data);
        } else {
            return false;
        }
    }
        
}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

	// function retrieve_products(){
 //            $query = $this->db->get('products'); // Select the table products
 //            return $query->result_array(); // Return the results in a array.
 //    }
    function product_detail_by_id($id){
    	return $q = $this->db->select('*')->from(' food_item')->where('item_id',$id)->get()->row();
    }

}

/* End of file Cart_model.php */
/* Location: ./application/models/Cart_model.php */
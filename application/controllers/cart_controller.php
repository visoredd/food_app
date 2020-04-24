<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_controller extends CI_Controller {

	public function add_to_cart()
	{
		// print_r($this->input->post());
		// exit();

		$item_id 		=	$this->input->post('item_id');
		$item_name 		=	$this->input->post('item_name');
		$item_category 	=	$this->input->post('item_category');
		$item_price 	=	$this->input->post('item_price');
		$quantity 		=	$this->input->post('quantity');
			
		$data = array(
		        'item_id'      	=> $item_id,
		        'item_name'     => $item_name,
		        'item_category' => $item_category,
		        'item_price'    => $item_price,
		        'quantity' 		=> $quantity
		);
		$this->cart->insert($data);

	}
	public function retrive_cart(){
		print_r($this->cart->contents());

	}
	public function remove_from_cart(){
		echo '<pre>';
		print_r($_SESSION, TRUE);
		
		// $this->cart->remove('d0c00b4e4b747d8475d1c93ff8067138 ');
	}


}

/* End of file Cart_controller.php */
/* Location: ./application/controllers/Cart_controller.php */
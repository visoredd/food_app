<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model('product_model');
		$this->load->model('place_model');
    }

    public function food_insert(){
		$data["theater_list"] = $this->place_model->get_theater();
		$this->load->view('admin/food_insert',$data);
	}

	public function process_insert_food(){
		$target_file 	= base_url()."uploads/";
		$error_message 	= "";
		$imageFileType 	= pathinfo($target_file,PATHINFO_EXTENSION);
		
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    $error_message 	=	 "Sorry, your file is too large.";
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    $error_message 	= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		}
		// Check if $uploadOk is set to 0 by an error
		if ($error_message == "") {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        $file_name 	=	basename( $_FILES["fileToUpload"]["name"]);
		    } else {
		        $error_message 	= "Sorry, there was an error uploading your file.";
		    }
		}

		if($error_message == ""){
			$result 	=	$this->place_model->process_insert_food($file_name);
			if($result){
				$this->session->set_flashdata('success_message', 'Food inserted successfully.');
			} else {
				$this->session->set_flashdata('error_message', 'Somthing went wrong !');
			}
		} else {
			$this->session->set_flashdata('error_message', $error_message);
		}
		redirect('product/food_insert');
	}

	public function food_list(){
		$data["food_list"] 	=	$this->product_model->get_food_items_data();
		$this->load->view('admin/food_list',$data);
	}

	public function generate_coupon_code(){
		$data["coupon_code"] 		=	$this->product_model->generate_coupon_code();
		$data["coupon_code_list"] 	=	$this->product_model->get_all_coupon_code();
		$this->load->view('admin/generate_coupon_code',$data);
	}

	public function regenerate_coupon_code(){
		$result 	=	$this->product_model->generate_coupon_code();
		echo json_encode($result);
	}

	public function action_coupon_code(){
		$result 	=	$this->product_model->action_coupon_code();
		if($result){
			echo json_encode(array("status" => "success", "result" => $result));
		} else {
			echo json_encode(array("status" => "error"));
		}
	}

	public function process_generate_coupon_code(){
		$result 	=	$this->product_model->process_generate_coupon_code();
		if($result){
			$this->session->set_flashdata('success_message', 'Coupon code generated successfully.');
		} else {
			$this->session->set_flashdata('error_message', 'Somthing went wrong !');
		}
		redirect('product/generate_coupon_code');
	}

	public function edit_coupon_code(){
		$coupon_code_id = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$coupon_code_details 	=	$this->product_model->get_coupon_code_by_id($coupon_code_id);
		if(!is_numeric($coupon_code_id) || empty($coupon_code_details)){
			$this->session->set_flashdata('error_message', 'Invalid coupon code selected !');
			redirect('product/generate_coupon_code');
		}
		$data['coupon_code_details'] 	=	$coupon_code_details;
		$this->load->view('admin/edit_coupon_code',$data);
	}
	public function process_edit_coupon_code(){
		$result 	=	$this->product_model->process_edit_coupon_code();
		if($result){
			$this->session->set_flashdata('success_message', 'Coupon code Updated successfully.');
		} else {
			$this->session->set_flashdata('error_message', 'Somthing went wrong !');
		}
		redirect('product/generate_coupon_code');
	}
	
}

/* End of file product.php */
/* Location: ./application/controllers/product.php */
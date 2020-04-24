<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('place_model');
    }

	// public function location(){
	// 	$this->load->view('admin/location');		
	// }
	// public function ctreate_location(){
	// 	$this->place_model->ctreate_location();
	// 	$this->session->set_flashdata('success_message', 'Location created successfully.');
	// 	redirect('place/location');
	// }

	public function theatre(){
		// $data["location_list"] = $this->place_model->get_location();
		$this->load->view('admin/theatre');		
	}
	public function ctreate_theatre(){
		$this->place_model->ctreate_theatre();
		$this->session->set_flashdata('success_message', 'Theater created successfully.');
		redirect('place/theatre');
	}

	public function get_theater_by_location_id(){
    	$this->place_model->get_theater_by_location_id();
	}

	public function auditorium(){
		$data["theatre_list"] = $this->place_model->get_theatre();
		$this->load->view('admin/auditorium', $data);		
	}	
	public function ctreate_auditorium(){
		$this->place_model->ctreate_auditorium();
		$this->session->set_flashdata('success_message', 'Auditorium created successfully.');
		redirect('place/auditorium');
	}

	public function get_auditorium_by_theater_id(){
    	$this->place_model->get_auditorium_by_theater_id();
	}

	public function row(){
		$data["theatre_list"] = $this->place_model->get_theatre();
		$this->load->view('admin/row', $data);		
	}
	public function ctreate_row(){
		$this->place_model->ctreate_row();
		$this->session->set_flashdata('success_message', 'Row created successfully.');
		redirect('place/row');
	}

	public function get_row_by_auditorium_id(){
    	$this->place_model->get_row_by_auditorium_id();
	}

	public function seat(){
		$data["theatre_list"] = $this->place_model->get_theatre();
		$this->load->view('admin/seat', $data);		
	}
	public function ctreate_seat(){
		$this->place_model->ctreate_seat();
		$this->session->set_flashdata('success_message', 'Seat created successfully.');
		redirect('place/seat');
	}
	public function get_seat_by_row_id(){
    	$this->place_model->get_seat_by_row_id();
	}

	public function place_list(){
		$data['location_list'] 	=	$this->place_model->get_location();
		$this->load->view('admin/list.php',$data);
	}

	public function theatre_list(){
		// $location_id 	=	$this->uri->segment('3');
		// if($location_id =="" || !is_numeric($location_id) || $location_id == 0){
		// 	redirect('place/place_list');
		// 	$this->session->set_flashdata('error_message', 'Select valid Location !');
		// }
		// $data['location_name'] 	=	$this->place_model->get_location_name_by_id($location_id);
		$data['theatre_list'] 	=	$this->place_model->get_theatre();
		$this->load->view('admin/theatre_list.php',$data);
	}

	public function edit_theatre(){
		$theatre_id 	=	$this->uri->segment('3');
		if($theatre_id =="" || !is_numeric($theatre_id) || $theatre_id == 0){
			$this->session->set_flashdata('error_message', 'Select valid Theatre !');
			redirect('place/theatre_list');
		}
		$data['theatre'] 		=	$this->place_model->get_theatre_data_by_theatre_id($theatre_id);
		
		$this->load->view('admin/edit_theatre.php',$data);
	}

	public function update_theatre(){
		$result 	=	$this->place_model->update_theatre();
		if($result){
			$this->session->set_flashdata('success_message', 'Theatre Updated successfully.');
			redirect('place/edit_theatre/'.$result);
		} else {
			echo json_encode(array("status" => "error"));
		}
	}

	public function delete_theatre(){
		$result 	=	$this->place_model->delete_theatre();
		if($result){
			echo json_encode(array("status" => "success", "result" => $result));
		} else {
			echo json_encode(array("status" => "error"));
		}
	}

	public function auditorium_list(){
		$theater_id 	=	$this->uri->segment('3');
		if($theater_id =="" || !is_numeric($theater_id) || $theater_id == 0){
			$this->session->set_flashdata('error_message', 'Select valid Theater !');
			redirect('place/theatre_list');
		}
		$data['theater_name'] 	=	$this->place_model->get_theater_name_by_id($theater_id);
		$data['auditorium_list'] 	=	$this->place_model->get_auditorium_data_by_theater_id($theater_id);
		$this->load->view('admin/auditorium_list.php',$data);
	}
	public function edit_auditorium(){
		$auditorium_id 	=	$this->uri->segment('3');
		if($auditorium_id =="" || !is_numeric($auditorium_id) || $auditorium_id == 0){
			$this->session->set_flashdata('error_message', 'Select valid Auditorium !');
			redirect('place/theatre_list');
		}
		$data["theatre_list"] 				= 	$this->place_model->get_theatre();
		$data['auditorium'] 				=	$this->place_model->get_auditorium_data_by_auditorium_id($auditorium_id);
		
		$this->load->view('admin/edit_auditorium.php',$data);
	}

	public function update_auditorium(){
		$result 	=	$this->place_model->update_auditorium();
		if($result){
			$this->session->set_flashdata('success_message', 'Auditorium Updated successfully.');
			redirect('place/edit_auditorium/'.$result);
		} else {
			echo json_encode(array("status" => "error"));
		}
	}

	public function delete_auditorium(){
		$result 	=	$this->place_model->delete_auditorium();
		if($result){
			echo json_encode(array("status" => "success", "result" => "Successfully deleted !"));
		} else {
			echo json_encode(array("status" => "error"));
		}
	}

	public function row_list(){
		$auditorium_id 	=	$this->uri->segment('3');
		if($auditorium_id =="" || !is_numeric($auditorium_id) || $auditorium_id == 0){
			$this->session->set_flashdata('error_message', 'Select valid Auditorium !');
			redirect('place/theatre_list');
		}
		$data['auditorium_name'] 	=	$this->place_model->get_auditorium_name_by_id($auditorium_id);
		$data['row_list'] 	=	$this->place_model->get_row_data_by_auditorium_id($auditorium_id);
		$this->load->view('admin/row_list.php',$data);
	}

	public function edit_row(){
		$row_id 	=	$this->uri->segment('3');
		if($row_id =="" || !is_numeric($row_id) || $row_id == 0){
			$this->session->set_flashdata('error_message', 'Select valid Row !');
			redirect('place/theatre_list');
		}
		$data["theatre_list"] 		= 	$this->place_model->get_theatre();
		$data['row'] 				=	$this->place_model->get_row_data_by_row_id($row_id);
		$theater_id 				=	$data['row'][0]->th_id;
		$data['auditorium_list'] 	=	$this->place_model->get_auditorium_data_by_theater_id($theater_id);
		// $auditorium_id 				=	$data['row'][0]->auditorium_id;
		// $data['row_list'] 			=	$this->place_model->get_row_data_by_auditorium_id($auditorium_id);
		
		$this->load->view('admin/edit_row.php',$data);
	}

	public function update_row(){
		$result 	=	$this->place_model->update_row();
		if($result){
			$this->session->set_flashdata('success_message', 'Row Updated successfully.');
			redirect('place/edit_row/'.$result);
		} else {
			echo json_encode(array("status" => "error"));
		}
	}

	public function delete_row(){
		$result 	=	$this->place_model->delete_row();
		if($result){
			echo json_encode(array("status" => "success", "result" => "Successfully deleted !"));
		} else {
			echo json_encode(array("status" => "error"));
		}
	}

	public function seat_list(){
		$row_id 	=	$this->uri->segment('3');
		if($row_id =="" || !is_numeric($row_id) || $row_id == 0){
			$this->session->set_flashdata('error_message', 'Select valid Row !');
			redirect('place/theatre_list');
		}
		$data['row_name'] 	=	$this->place_model->get_row_name_by_id($row_id);
		$data['seat_list'] 	=	$this->place_model->get_seat_data_by_row_id($row_id);
		$this->load->view('admin/seat_list.php',$data);
	}

	public function edit_seat(){
		$seat_id 	=	$this->uri->segment('3');
		if($seat_id =="" || !is_numeric($seat_id) || $seat_id == 0){
			$this->session->set_flashdata('error_message', 'Select valid Seat !');
			redirect('place/theatre_list');
		}
		$data["theatre_list"] 		= 	$this->place_model->get_theatre();
		$data['seat'] 				=	$this->place_model->get_seat_data_by_seat_id($seat_id);
		$theater_id 				=	$data['seat'][0]->th_id;
		$data['auditorium_list'] 	=	$this->place_model->get_auditorium_data_by_theater_id($theater_id);
		$auditorium_id 				=	$data['seat'][0]->auditorium_id;
		$data['row_list'] 			=	$this->place_model->get_row_data_by_auditorium_id($auditorium_id);
		
		$this->load->view('admin/edit_seat.php',$data);
	}

	public function update_seat(){
		$result 	=	$this->place_model->update_seat();
		if($result){
			$this->session->set_flashdata('success_message', 'Seat Updated successfully.');
			redirect('place/edit_seat/'.$result);
		} else {
			echo json_encode(array("status" => "error"));
		}
	}

	public function delete_seat(){
		$result 	=	$this->place_model->delete_seat();
		if($result){
			echo json_encode(array("status" => "success", "result" => "Successfully deleted !"));
		} else {
			echo json_encode(array("status" => "error"));
		}
	}
}

/* End of file Location.php */
/* Location: ./application/controllers/Location.php */
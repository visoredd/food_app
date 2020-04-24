<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place_model extends CI_Model {

	public function ctreate_location(){
		$location_name 			=	$this->input->post('location_name');
		$location_address 		=	$this->input->post('location_address');
		$location_latitude 		=	$this->input->post('location_latitude');
		$location_longituted 	=	$this->input->post('location_longituted');

		$location_data 	=	array(
								'location_name' 	=>	ucfirst($location_name),
								'location_name' 	=>	$location_name,
								'address' 			=>	$location_address,
								'latitude' 			=>	$location_latitude,
								'longitude' 		=>	$location_longituted,
							);
		$this->db->insert('location', $location_data);
	}

	public function get_location(){
		$location_q 	=	$this->db->get('location');
		if($location_q->num_rows() > 0 ){
			return $location_q->result();
		} else {
			return false;
		}
	}

	public function get_location_name_by_id($location_id){
		$location_name_q 	=	$this->db->get_where('location', array('location_id' => $location_id));
		if($location_name_q->num_rows() > 0){
			$location_name_res 	=	$location_name_q->result();
			return $location_name_res[0]->location_name;
		} else {
			return false;
		}
	}

	public function ctreate_theatre(){
		$theatre_name 				=	$this->input->post('theatre_name');
		$theatre_address_line_1 	=	$this->input->post('theatre_address_line_1');
		$theatre_address_line_2 	=	$this->input->post('theatre_address_line_2');
		$theatre_city 				=	$this->input->post('theatre_city');
		$theatre_pincode 			=	$this->input->post('theatre_pincode');
		$theater_latitude 			=	$this->input->post('theater_latitude');
		$theatre_longitude 			=	$this->input->post('theatre_longitude');
		$theatre_email 				=	$this->input->post('theatre_email');
		$theatre_telephone 			=	$this->input->post('theatre_telephone');
		$theatre_mobile 			=	$this->input->post('theatre_mobile');
		$theatre_person 			=	$this->input->post('theatre_person');

		$theater_data 	=	array(
								'th_name' 				=>	ucfirst($theatre_name),
								'th_address_line_1' 	=>	$theatre_address_line_1,
								'th_address_line_2' 	=>	$theatre_address_line_2,
								'th_city' 				=>	$theatre_city,
								'th_pincode' 			=>	$theatre_pincode,
								'th_latitude' 			=>	$theater_latitude,
								'th_longitude' 			=>	$theatre_longitude,
								'th_email' 				=>	$theatre_email,
								'th_telephone' 			=>	$theatre_telephone,
								'th_mobile' 			=>	$theatre_mobile,
								'th_contact_person' 	=>	ucfirst($theatre_person),
							);
		$this->db->insert('theater', $theater_data);
	}

	public function get_theatre(){
		$theater_q 	=	$this->db->get('theater');
		if($theater_q->num_rows() > 0 ){
			return $theater_q->result();
		} else {
			return false;
		}
	}

	public function get_theater_by_location_id(){
    	$location_id 		= 	$this->input->post("location_id");
    	$theater_detail 		= 	$this->db->query("Select * from theater where th_location_id = '".$location_id."' ");
    	$options 		= 	'<option value="">----------------------Select---------------------</option>';
    	if($theater_detail->num_rows() > 0){
    		foreach ($theater_detail->result() as $row) {
				$options  .= '<option value='.$row->th_id.'>'.$row->th_name.'</option>';
			}
    	}
		echo json_encode($options);
	}

	public function get_theater_data_by_location_id($location_id){
    	$theater_detail 		= 	$this->db->query("Select * from theater where th_location_id = '".$location_id."' ");
    	if($theater_detail->num_rows() > 0){
    		return $theater_detail->result();
    	} else {
			return false;
    	}
	}

	public function get_theater_name_by_id($theater_id){
		$theater_name_q 	=	$this->db->get_where('theater', array('th_id' => $theater_id));
		if($theater_name_q->num_rows() > 0){
			$theater_name_res 	=	$theater_name_q->result();
			return $theater_name_res[0]->th_name;
		} else {
			return false;
		}
	}

	public function get_theatre_data_by_theatre_id($theatre_id){
    	$theatre_detail 		= 	$this->db->query(
    										"SELECT 
    											* 
    										FROM theater
    										WHERE 
    											th_id ='".$theatre_id."'
    										");
    	if($theatre_detail->num_rows() > 0){
    		return $theatre_detail->result();
    	} else {
			return false;
    	}
	}

	public function update_theatre(){
		$theatre_id 	=	$this->input->post("theatre_id");
		$theatre_data 	=	array(
								'th_name' 					=>	$this->input->post('theatre_name'),
								'th_address_line_1' 		=>	$this->input->post('theatre_address_line_1'),
								'th_address_line_2' 		=>	$this->input->post('theatre_address_line_2'),
								'th_city' 					=>	$this->input->post('theatre_city'),
								'th_pincode' 				=>	$this->input->post('theatre_pincode'),
								'th_latitude' 				=>	$this->input->post('theatre_latitude'),
								'th_longitude' 				=>	$this->input->post('theatre_longitude'),
								'th_email' 					=>	$this->input->post('theatre_email'),
								'th_telephone' 				=>	$this->input->post('theatre_telephone'),
								'th_mobile' 				=>	$this->input->post('theatre_mobile'),
								'th_contact_person' 		=>	$this->input->post('theatre_person'),
							);
		$this->db->where('th_id', $theatre_id);
		$this->db->update('theater', $theatre_data);
		return $theatre_id;
	}

	public function delete_theatre(){
		print_r($this->input->post());
		exit();
	}

	public function ctreate_auditorium(){
		$thieater_id 			=	$this->input->post('aud_theater');
		$auditorium_name 		=	$this->input->post('aud_name');

		$auditorium_data 	=	array(
								'theater_id' 		=>	$thieater_id,
								'auditorium_name' 	=>	ucfirst($auditorium_name)
							);
		$this->db->insert('auditorium', $auditorium_data);
	}

	public function get_auditorium_by_theater_id(){
    	$theater_id 		= 	$this->input->post("theater_id");
    	$auditorium_detail 		= 	$this->db->query("Select * from auditorium where theater_id = '".$theater_id."' ");
    	$options 		= 	'<option value="">----------------------Select---------------------</option>';
    	if($auditorium_detail->num_rows() > 0){
    		foreach ($auditorium_detail->result() as $row) {
				$options  .= '<option value='.$row->auditorium_id.'>'.$row->auditorium_name.'</option>';
			}
    	}
		echo json_encode($options);
	}

	public function get_auditorium_data_by_theater_id($theater_id){
    	$auditorium_detail 		= 	$this->db->query("Select * from auditorium where theater_id = '".$theater_id."' ");
    	if($auditorium_detail->num_rows() > 0){
    		return $auditorium_detail->result();
    	} else {
			return false;
    	}
	}

	public function get_auditorium_name_by_id($auditorium_id){
		$auditorium_name_q 	=	$this->db->get_where('auditorium', array('auditorium_id' => $auditorium_id));
		if($auditorium_name_q->num_rows() > 0){
			$auditorium_name_res 	=	$auditorium_name_q->result();
			return $auditorium_name_res[0]->auditorium_name;
		} else {
			return false;
		}
	}
	
	public function get_auditorium_data_by_auditorium_id($auditorium_id){
    	$auditorium_detail 		= 	$this->db->query(
    										"SELECT 
    											* 
    										FROM auditorium, theater
    										WHERE 
    											auditorium.theater_id = theater.th_id 
    											and auditorium_id ='".$auditorium_id."'
    										");
    	if($auditorium_detail->num_rows() > 0){
    		return $auditorium_detail->result();
    	} else {
			return false;
    	}
	}

	public function update_auditorium(){
		$auditorium_id 	=	$this->input->post("auditorium_id");
		$auditorium_data 	=	array(
								'theater_id' 			=>	$this->input->post('aud_theater'),
								'auditorium_name' 		=>	$this->input->post('aud_name'),
							);
		$this->db->where('auditorium_id', $auditorium_id);
		$this->db->update('auditorium', $auditorium_data);
		return $auditorium_id;
	}

	public function delete_auditorium(){
		$auditorium_id 		=	$this->input->post("auditorium_id");
		$auditorium_data  	=	$this->get_row_data_by_auditorium_id($auditorium_id);

		foreach ($auditorium_data as $auditorium) {
			$row_id 	=	 $auditorium->row_id;
			$this->db->where('seat.row_id', $row_id)->join('row', 'seat.row_id = row.id');
			$this->db->delete('seat');

			$this->db->where('row_id', $row_id);
			$this->db->delete('row');
		}
		
		$this->db->where('auditorium_id', $auditorium_id);
		return $this->db->delete('auditorium');
	}

	public function ctreate_row(){
		$auditorium_id 			=	$this->input->post('row_auditorium');
		$row_name 				=	$this->input->post('row_name');

		$row_data 	=	array(
								'auditorium_id' 		=>	$auditorium_id,
								'row_name' 	=>	ucfirst($row_name)
							);
		$this->db->insert('row', $row_data);
	}

	public function get_row_by_auditorium_id(){
    	$auditorium_id 			= 	$this->input->post("auditorium_id");
    	$row_detail 		= 	$this->db->query("Select * from row where auditorium_id = '".$auditorium_id."' ");
    	$options 		= 	'<option value="">----------------------Select---------------------</option>';
    	if($row_detail->num_rows() > 0){
    		foreach ($row_detail->result() as $row) {
				$options  .= '<option value='.$row->row_id.'>'.$row->row_name.'</option>';
			}
    	}
		echo json_encode($options);
	}

	public function get_row_data_by_auditorium_id($auditorium_id){
    	$row_detail 		= 	$this->db->query("Select * from row where auditorium_id = '".$auditorium_id."' ");
    	if($row_detail->num_rows() > 0){
    		return $row_detail->result();
    	} else {
			return false;
    	}
	}

	public function get_row_name_by_id($row_id){
		$row_name_q 	=	$this->db->get_where('row', array('row_id' => $row_id));
		if($row_name_q->num_rows() > 0){
			$row_name_res 	=	$row_name_q->result();
			return $row_name_res[0]->row_name;
		} else {
			return false;
		}
	}

	public function get_row_data_by_row_id($row_id){
    	$row_detail 		= 	$this->db->query(
    										"SELECT 
    											* 
    										FROM row, auditorium, theater
    										WHERE 
    											row.auditorium_id = auditorium.auditorium_id 
    											and auditorium.theater_id = theater.th_id 
    											and row_id ='".$row_id."'
    										");
    	if($row_detail->num_rows() > 0){
    		return $row_detail->result();
    	} else {
			return false;
    	}
	}

	public function update_row(){
		$row_id 	=	$this->input->post("row_id");
		$row_data 	=	array(
								'auditorium_id' 		=>	$this->input->post('row_auditorium'),
								'row_name' 		=>	$this->input->post('row_name'),
							);
		$this->db->where('row_id', $row_id);
		$this->db->update('row', $row_data);
		return $row_id;
	}

	public function delete_row(){
		$row_id 	=	$this->input->post("row_id");
		$this->db->where('seat.row_id', $row_id)->join('row', 'seat.row_id = row.id');
		$this->db->delete('seat');

		$this->db->where('row_id', $row_id);
		return $this->db->delete('row');

	}

	public function ctreate_seat(){
		$row_id 				=	$this->input->post('seat_row');
		$seat_name 				=	$this->input->post('seat_name');

		$seat_data 	=	array(
								'row_id' 		=>	$row_id,
								'seat_no' 		=>	$seat_name
							);		
		$this->db->insert('seat', $seat_data);
	}

	public function get_seat_by_row_id(){
    	$row_id 			= 	$this->input->post("row_id");
    	$seat_detail 		= 	$this->db->query("Select * from seat where row_id = '".$row_id."' ");
    	$options 		= 	'<option value="">----------------------Select---------------------</option>';
    	if($seat_detail->num_rows() > 0){
    		foreach ($seat_detail->result() as $row) {
				$options  .= '<option value='.$row->seat_id.'>'.$row->seat_no.'</option>';
			}
    	}
		echo json_encode($options);
	}

	public function get_seat_data_by_row_id($row_id){
    	$seat_detail 		= 	$this->db->query("Select * from seat where row_id = '".$row_id."' ");
    	if($seat_detail->num_rows() > 0){
    		return $seat_detail->result();
    	} else {
			return false;
    	}
	}

	public function get_seat_data_by_seat_id($seat_id){
    	$seat_detail 		= 	$this->db->query(
    										"SELECT 
    											* 
    										FROM seat, row, auditorium, theater
    										WHERE 
    											seat.row_id = row.row_id 
    											and row.auditorium_id = auditorium.auditorium_id 
    											and auditorium.theater_id = theater.th_id 
    											and seat_id ='".$seat_id."'
    										");
    	if($seat_detail->num_rows() > 0){
    		return $seat_detail->result();
    	} else {
			return false;
    	}
	}

	public function update_seat(){
		$seat_id 	=	$this->input->post("seat_id");
		$seat_data 	=	array(
								'row_id' 		=>	$this->input->post('seat_row'),
								'seat_no' 	=>	$this->input->post('seat_name'),
							);
		$this->db->where('seat_id', $seat_id);
		$this->db->update('seat', $seat_data);
		return $seat_id;
	}

	public function delete_seat(){
		$seat_id 	=	$this->input->post("seat_id");
		$this->db->where('seat_id', $seat_id);
		return $this->db->delete('seat');
	}
}

/* End of file Place_model.php */
/* Location: ./application/models/Place_model.php */
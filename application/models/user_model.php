<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	//Google AND Facebook Login
	public function checkUser($data = array()){
        $this->db->select('user_id');
        $this->db->from('users');
        $this->db->where(array('oauth_provider'=>$data['oauth_provider'],'oauth_uid'=>$data['oauth_uid']));
        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
        
        if($prevCheck > 0){
            $prevResult = $prevQuery->row_array();
            $data['modified'] = date("Y-m-d H:i:s");
            $update = $this->db->update('users',$data,array('user_id'=>$prevResult['user_id']));
            $userID = $prevResult['user_id'];
        }else{
            $data['created'] = date("Y-m-d H:i:s");
            $data['modified'] = date("Y-m-d H:i:s");
            $insert = $this->db->insert('users',$data);
            $userID = $this->db->insert_id();
        }

        return $userID?$userID:FALSE;
    }

    public function get_user_details($user_id){
    	$get_user_details_q = $this->db->get_where('users',array('user_id' => $user_id));
    	if($get_user_details_q->num_rows() > 0){
	    	return $get_user_details_q->result();
    	} else {
    		return false;
    	}
    }

	public function chk_login($username,$password){
		$password 	=	md5($password);
		$query 	=	$this->db->get_where('users',array('email_id'=>$username,'password'=>$password));
		if($query->num_rows() > 0){
			$row[0] = $query->row_array();
			return $row;
		} else {
			return false; 
		}
	}
	
	public function get_auditorium(){
		$auditorium_q 	=	$this->db->get('auditorium');
		if($auditorium_q->num_rows() > 0){
			return $auditorium_q->result();
		} else {
    		return false;
    	}
	}

	public function get_row_by_auditorium_id($id){
		$auditorium_q 	=	$this->db->get_where('auditorium', array('auditorium_id',$id));
		if($auditorium_q->num_rows() > 0){
			return $auditorium_q->result();
		} else {
    		return false;
    	}
	}

	public function get_location_name_by_id($id){
		$location_name_q 	=	$this->db->get_where('location', array('location_id' => $id));
		if($location_name_q->num_rows() >0){
			$location_name_res = $location_name_q->row();
			return $location_name_res->location_name;
		} else {
    		return false;
    	}
	}

	public function get_theater_name_by_id($id){
		$theater_name_q 	=	$this->db->get_where('theater', array('th_id' => $id));
		if($theater_name_q->num_rows() >0){
			$theater_name_res = $theater_name_q->row();
			return $theater_name_res->th_name;
		} else {
    		return false;
    	}
	}

	public function get_auditorium_name_by_id($id){
		$auditorium_name_q 	=	$this->db->get_where('auditorium', array('auditorium_id' => $id));
		if($auditorium_name_q->num_rows() >0){
			$auditorium_name_res = $auditorium_name_q->row();
			return $auditorium_name_res->auditorium_name;
		} else {
    		return false;
    	}
	}

	public function get_row_name_by_id($id){
		$row_name_q 	=	$this->db->get_where('row', array('row_id' => $id));
		if($row_name_q->num_rows() >0){
			$row_name_res = $row_name_q->row();
			return $row_name_res->row_name;
		} else {
    		return false;
    	}
	}
	public function get_seat_no_by_id($id){
		$seat_no_q 	=	$this->db->get_where('seat', array('seat_id' => $id));
		if($seat_no_q->num_rows() >0){
			$seat_no_res = $seat_no_q->row();
			return $seat_no_res->seat_no;
		} else {
    		return false;
    	}
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
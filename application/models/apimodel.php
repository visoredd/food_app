<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Apimodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function login($username,$password)
	{
		$password 	=	md5($password);
		$query 	=	$this->db->get_where('users',array('email_id'=>$username,'password'=>$password));
		if($query->num_rows() > 0){
			$row[0] = $query->row_array();
			return $row;
		}else{
			return false; 
		}
	}

	public function generate_access_code(){
		$access_token 			=	bin2hex(openssl_random_pseudo_bytes(16));
		$chk_access_code_q	 	=	$this->db->get_where('users',array('access_token'	=> $access_token));
		if($chk_access_code_q->num_rows() == 0){
			return $access_token;
		} else {
	      	return $this->generate_access_code();
		}       
	}
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
    
    public function is_authenticated_user($user_id, $access_code){
    	$data 	=	array('user_id' => $user_id,'access_token'	=> $access_code);
    	$chk_access_code_q	 	=	$this->db->get_where('users',$data);
		return ($chk_access_code_q->num_rows() > 0);
    }

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
        
        parent::__construct();
		session_start();
		$this->session->set_userdata('cart_session');
		$this->load->library('facebook');
		$this->load->model('user_model');
		$this->load->model('shoppingmodel');
    }
	public function index()
	{
		// session_destroy();
		//FACEBOOK LOGIN
		$userData = array();

		// Check if user is logged in
		if($this->facebook->is_authenticated()){
			// Get user facebook profile details
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email_id'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];
			
            // Insert or update user data
            $userID = $this->user_model->checkUser($userData);
			
			// Check user data insert or update status
            if(!empty($userID)){
            	$user_details 			=	$this->user_model->get_user_details($useID);
	            $userData['user_id']  	= 	$user_details->user_id;
                $data['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
            } else {
               $data['userData'] = array();
            }
			
			// Get logout URL
			$data['logoutUrl_fb'] = $this->facebook->logout_url();
			$this->session->set_userdata('logout_url',$data['logoutUrl_fb']);
			redirect('user/home');
		}else{
            $fbuser = '';
			
			// Get login URL
            $data['authUrl_facebook'] =  $this->facebook->login_url();
        }
       	
        if(empty($data['authUrl_facebook'])) {
			redirect('user/home');
		} else {

			// GOOGLE LOGIN
			include_once APPPATH."libraries/google-api-php-client/Google_Client.php";
	        include_once APPPATH."libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
	        
	        // Google Project API Credentials
	        $clientId = '822085900337-qkuc3dr2vdgn3ahdh34ae04opdlm4jhh.apps.googleusercontent.com';
	        $clientSecret = 's3gqUtGqJmuYf1g46b0oFheM';
		    // $redirectUrl = base_url();
		    $redirectUrl = 'http://localhost/food_app/';
	        
	        // Google Client Configuration
	        $gClient = new Google_Client();
	        $gClient->setApplicationName('foodapp');
	        $gClient->setClientId($clientId);
	        $gClient->setClientSecret($clientSecret);
	        $gClient->setRedirectUri($redirectUrl);
	        $google_oauthV2 = new Google_Oauth2Service($gClient);

	        if (isset($_REQUEST['code'])) {
	            $gClient->authenticate();
	            $this->session->set_userdata('token', $gClient->getAccessToken());
	            redirect($redirectUrl);
	        }

	        $token = $this->session->userdata('token');
	        if (!empty($token)) {
	            $gClient->setAccessToken($token);
	        }

	        if ($gClient->getAccessToken()) {
	            $userProfile = $google_oauthV2->userinfo->get();
	            // Preparing data for database insertion
	            $userData['oauth_provider'] = 'google';
	            $userData['oauth_uid'] = $userProfile['id'];
	            $userData['first_name'] = $userProfile['given_name'];
	            $userData['last_name'] = $userProfile['family_name'];
	            $userData['email_id'] = $userProfile['email'];
	            $userData['gender'] = '';
	            $userData['locale'] = $userProfile['locale'];
	            $userData['profile_url'] = '';
	            $userData['picture_url'] = $userProfile['picture'];
	            // Insert or update user data
	            $userID = $this->user_model->checkUser($userData);

	            if(!empty($userID)){
	            	$user_details 			=	$this->user_model->get_user_details($useID);
	            	$userData['user_id']  	= 	$user_details->user_id;
	                $data['userData'] 		= $userData;
	                $this->session->set_userdata('userData',$userData);
	            } else {
	               $data['userData'] = array();
	            }
	        } else {
	            $data['authUrl_google'] = $gClient->createAuthUrl();
	        }
	        if( empty($data['authUrl_google']) ) {
				redirect('user/home');
			} else {
				$this->load->view('client/login.php', $data);
		    }
	    }
	}
	public function home(){
		// $data['items'] = $this->shoppingmodel->get_all_item_data();	
		// $this->load->view('client/items.php', $data);

		redirect('shopping');
	}
	public function do_login(){
		$this->load->view('client/do_login.php');
	}
	public function chk_login(){
		$username 		=	$this->input->post('username');
		$password 		=	$this->input->post('password');

		$login_detail 	=	$this->user_model->chk_login($username, $password);
		
		if($login_detail){
			$user_id 		=	$login_detail[0]['user_id'];
			$first_name 	=	$login_detail[0]['first_name'];
			$last_name 		=	$login_detail[0]['last_name'];
			
			$user_data 		=	array(
							'user_id' 		=>	$user_id,
							'first_name' 	=>	$first_name,
							'last_name' 	=>	$last_name,
							'theater_id' 	=>	'3'
				);
			
			$this->session->set_userdata('user_detail', $user_data);
			redirect('user/home');
		} else {
			redirect('user');
		}
		echo json_encode($userData);
	}
	public function signup(){
		$first_name 			=	$this->input->post('firstname');
		$last_name 				=	$this->input->post('lastname');
		$user_name 				=	$this->input->post('username');
		$phone_no 				=	$this->input->post('phone_no');
		$email_id 				=	$this->input->post('email');
		$password 				=	$this->input->post('password');
		$pass 					= 	md5($password);
		
		if($first_name!='' && $phone_no!='' && $email_id!='' && $password!='' && $last_name!='' && $user_name!= ''){
			$post_data = array(
		        'first_name'   			=>  $first_name,
		        'last_name'   			=>  $last_name,
				'phone_no'   			=>  $phone_no,
		        'email_id'   			=>  $email_id,
		        'user_name' 	 	    =>  $user_name,
		        'password'				=>	$pass
		    );
		$array=$this->db->insert('users', $post_data);
		$insert_id = $this->db->insert_id();
			redirect('user/do_login');
		}else{
			redirect('user');
		}
		echo json_encode($userData);
	}

	public function select_location(){
		$data["auditorium_list"] = $this->user_model->get_auditorium();
		$this->load->view('client/select_location.php', $data);
	}
	public function get_row_by_auditorium(){
    	$auditorium_id 		= 	$this->input->post("auditorium_id");
    	$row_detail 		= 	$this->db->query("Select * from row where auditorium_id = '".$auditorium_id."' ");
    	$options 		= 	'<option value=""> - - - SELECT - - - </option>';
    	if($row_detail->num_rows() > 0){
    		foreach ($row_detail->result() as $row) {
				$options  .= '<option value='.$row->row_id.'>'.$row->row_name.'</option>';
			}
    	}
		echo json_encode($options);
	}
	public function get_seat_by_row(){
    	$row_id 		= 	$this->input->post("row_id");
    	$seat_detail 		= 	$this->db->query("Select * from seat where row_id = '".$row_id."' ");
    	$options 		= 	'<option value=""> - - - SELECT - - - </option>';
    	if($seat_detail->num_rows() > 0){
    		foreach ($seat_detail->result() as $row) {
				$options  .= '<option value='.$row->seat_id.'>'.$row->seat_no.'</option>';
			}
    	}
		echo json_encode($options);
	}
	public function store_user_location(){
		$this->load->library('form_validation');

        $this->form_validation->set_rules('auditorium', 'Auditorium', 'trim|required|numeric');
        $this->form_validation->set_rules('row', 'Row', 'trim|required|numeric');
        $this->form_validation->set_rules('seat', 'Seat', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE){
                $this->load->view('select_location');
        } else {
        	$auditorium = $this->user_model->get_auditorium_name_by_id($this->input->post('auditorium'));
        	$row 		= $this->user_model->get_row_name_by_id($this->input->post('row'));
        	$seat 		= $this->user_model->get_seat_no_by_id($this->input->post('seat'));
        	
        	$data = array(
        					'auditorium_id'	=>	$this->input->post('auditorium'),
				        	'auditorium' 	=>	$auditorium,
        					'row_id'		=>	$this->input->post('row'),
							'row' 			=>	$row,
        					'seat_id'		=>	$this->input->post('seat'),	
							'seat' 			=>	$seat
						);
			$this->session->set_userdata('user_location', $data);
            redirect('user/home');
        }

	}
	public function set_user_location_in_session(){		
    	$location 		= $this->user_model->get_location_name_by_id($this->input->post('location'));
    	$theater 		= $this->user_model->get_theater_name_by_id($this->input->post('theater'));
    	$auditorium 	= $this->user_model->get_auditorium_name_by_id($this->input->post('auditorium'));
    	$row 			= $this->user_model->get_row_name_by_id($this->input->post('row'));
    	$seat 			= $this->user_model->get_seat_no_by_id($this->input->post('seat'));
    	
    	$data = array(
    					'location_id'	=>	$this->input->post('location'),
			        	'location' 		=>	$location,
			        	'theater_id'	=>	$this->input->post('theater'),
			        	'theater' 		=>	$theater,
			        	'auditorium_id'	=>	$this->input->post('auditorium'),
			        	'auditorium' 	=>	$auditorium,
    					'row_id'		=>	$this->input->post('row'),
						'row' 			=>	$row,
    					'seat_id'		=>	$this->input->post('seat'),	
						'seat' 			=>	$seat
					);
		$this->session->set_userdata('user_location', $data);
        echo json_encode(array("status" => "Success." ));
	}
	function is_logged_in() 
    {
        $is_logged_in = $this->session->userdata('userid');
        if (!isset($is_logged_in) || $is_logged_in != true)
        {
            redirect('/login/logout');
        }
    }
	function logout()
	{
	    $user_data = $this->session->all_userdata();
	        foreach ($user_data as $key => $value) {
	            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
	                $this->session->unset_userdata($key);
	            }
	        }
	    $this->session->sess_destroy();
	    redirect('user');
	}

}
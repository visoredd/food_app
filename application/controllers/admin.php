<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->helper(array('url', 'language'));
		$this->load->model('admin_model');
    }

	public function index()
	{
		$this->load->view('admin/login');
	}
	public function admin_chk_login(){
		$username 		=	$this->input->post('ad_username');
		$password 		=	$this->input->post('ad_password');

		$login_detail 	=	$this->admin_model->admin_chk_login($username, $password);
		if($login_detail){
			$user_id 		=	$login_detail[0]['au_id'];
			$first_name 	=	$login_detail[0]['au_first_name'];
			$last_name 		=	$login_detail[0]['au_last_ame'];
			
			$user_data 		=	array(
							'user_id' 		=>	$user_id,
							'first_name' 	=>	$first_name,
							'last_name' 	=>	$last_name,
				);
			
			$this->session->set_userdata('admin_user_detail', $user_data);
			redirect('admin/home');
		} else {
			redirect('admin');
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
	    redirect('admin');
	}
	public function home(){
		$this->load->view('admin/home.php');
	}

	public function user_list(){
		$config = array();
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '<li>';
        $config['last_link'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config["base_url"] = base_url() . "admin/user_list";
        $config["total_rows"] = $this->admin_model->count_all_users();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['user_list'] = $this->admin_model->get_all_users($page, $config["per_page"]);
		$data["page_links"] = $this->pagination->create_links();

		$this->load->view('admin/user_list.php', $data);
	}

	public function order_list(){
		$config = array();
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '<li>';
        $config['last_link'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config["base_url"] = base_url() . "admin/order_list";
        $config["total_rows"] = $this->admin_model->count_all_orders();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['order_list'] = $this->admin_model->get_all_orders($page, $config["per_page"]);
		$data["page_links"] = $this->pagination->create_links();
		
		$this->load->view('admin/order_list.php', $data);
	}

	public function view_order_detail(){
		$order_id 	=	$this->uri->segment('3');
		if($order_id =="" || !is_numeric($order_id) || $order_id == 0){
			$this->session->set_flashdata('error_message', 'Select valid Order !');
			redirect('admin/order_list');
		}
		// redirect('admin/order_list');

		$data['order_details_list'] = $this->admin_model->get_order_details_by_odrer_id($order_id);
		$this->load->view('admin/view_order_detail.php', $data);

	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
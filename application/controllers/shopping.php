<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {
	public function __construct(){
        parent::__construct();   
		$this->load->library('session');
        $this->load->model('shoppingmodel');
		$this->load->helper(array('url', 'language'));
		$this->load->library('pagination');

    }

	public function index(){
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
        $config["base_url"] = base_url() . "shopping/index";
        $config["total_rows"] = $this->shoppingmodel->count_all_item_data();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['items'] = $this->shoppingmodel->get_all_item_data($page, $config["per_page"]);
		$data["page_links"] = $this->pagination->create_links();	
		$this->load->view('client/items.php', $data);
	}

	public function category(){
		$category = $this->uri->segment(3);

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
        $config["base_url"] = base_url() . "shopping/category/".$category;
        $config["total_rows"] = $this->shoppingmodel->count_item_by_category($category);
        $config["per_page"] = 2;
        $config["uri_segment"] = 4;
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['items'] = $this->shoppingmodel->get_item_by_category($page, $config["per_page"], $category);	
		$data["page_links"] = $this->pagination->create_links();
		$this->load->view('client/items.php', $data);
	}

	public function search_item(){
		$search_item_name 	=	trim($this->input->get('seach_item'));
		if($search_item_name == ""){
			$search_item_name 	=	$this->uri->segment(3);
		}
			
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
        $config["base_url"] = base_url() . "shopping/search_item/".$search_item_name;
        $config["total_rows"] = $this->shoppingmodel->count_search_item($search_item_name);
        $config["per_page"] = 1;
        $config["uri_segment"] = 4;
        $this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['items'] 		= 	$this->shoppingmodel->get_search_item($page, $config["per_page"],$search_item_name);
		$data["page_links"] = $this->pagination->create_links();
		$this->load->view('client/items.php', $data);

	}

	public function order_now(){
		$this->load->view('client/item_single.php');
	}

	public function checkout(){
		$this->load->view('client/checkout.php');
	}

	public function order_tracking(){
		$data['order_deail'] = $this->shoppingmodel->get_order_tracking();
		if($data['order_deail']){
			$this->load->view('client/order_tracking.php', $data);
		} else {
			redirect('shopping');
		}
	}

	public function change_order_status(){
		$this->shoppingmodel->change_order_status();
		redirect('shopping/order_tracking');
	}

	public function contact_us(){
		$this->load->view('client/contact.php');
	}
	
}
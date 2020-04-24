<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function error_404(){
		$this->load->view('client/error.php');
	}

	public function blank_page(){
		$this->load->view('client/blank_page.php');
	}

	public function blog(){
		$this->load->view('client/blog.php');
	}

	public function single_blog(){
		$this->load->view('client/single_blog.php');
	}

	public function components(){
		$this->load->view('client/components.php');
	}

	public function general(){
		$this->load->view('client/general.php');
	}

	public function nutrition_info(){
		$this->load->view('client/nutrition_info.php');
	}

	public function recipes(){
		$this->load->view('client/recipe.php');
	}

	public function aboutus(){
		$this->load->view('client/aboutus.php');
	}
}
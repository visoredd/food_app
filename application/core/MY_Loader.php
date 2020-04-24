<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class MY_Loader extends CI_Loader {
	public $_json_array = array();
	public function __construct() {
 
		parent::__construct();
		$this->ci = &get_instance();
	}
	public function view($view, $vars = array(), $return = FALSE) {
		$format = $this->ci->input->get('format');
		if($format == 'json') {
			$this->ci->_json_array[$view] = $vars;
			$this->ci->output
				->set_output(json_encode($this->ci->_json_array, 								JSON_NUMERIC_CHECK));
		}
		else {
			parent::view($view, $vars, $return);
		}
	}
}
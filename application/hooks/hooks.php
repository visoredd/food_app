<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Formatting
{
    function __construct()
    {
        $this->ci = &get_instance();
    }
    function convert_html_to_json()
    {
       if(!empty($this->ci->output->get_output()))
       {
           echo $this->ci->output->get_output();
       }
       else
       {
            echo NULL;
       }
    }
}
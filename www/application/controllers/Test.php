<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{

    public function index()
    {
        $this->load->view('header-1-master', ["titre" => "Page test"]);
        $this->load->view('header-2-header');
        $this->load->view('header-3-navbar-public', ["nav" => 0]);
        $this->load->view('header-4-navbar-admin', ["nav" => 0]);
        $this->load->view('vue-403');
        $this->load->view('footer');

        //$this->output->set_header('refresh:5;url="'.base_url().'"');
    }
    
}

?>
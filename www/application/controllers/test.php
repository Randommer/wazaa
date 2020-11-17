<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{

    public function index()
    {
        $this->load->view('test-vue');
    }
    
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		date_default_timezone_set("Europe/Paris");

		$this->load->model("AnnoncesModel");

		$aView = array();

		$aTopAnnonces = $this->AnnoncesModel->topannonces();

		$aView["aTopAnnonces"] = $aTopAnnonces;

		$this->load->view('header-1-master', ["titre" => "Accueil"]);
        $this->load->view('header-2-header');
		$this->load->view('header-3-navbar-public', ["nav" => 1]);
		if (!is_null($this->session->userdata("Connecte")))
		{
			$this->load->view('header-4-navbar-admin', ["nav" => 0]);
		}
        $this->load->view('vue-accueil', $aView);
        $this->load->view('footer');
	}

	public function about()
	{
		date_default_timezone_set("Europe/Paris");

		$this->load->view('header-1-master', ["titre" => "A Propos"]);
        $this->load->view('header-2-header');
		$this->load->view('header-3-navbar-public', ["nav" => 4]);
		if (!is_null($this->session->userdata("Connecte")))
		{
			$this->load->view('header-4-navbar-admin', ["nav" => 0]);
		}
        $this->load->view('vue-a-propos');
        $this->load->view('footer');
	}
}

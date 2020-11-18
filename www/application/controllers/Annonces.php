<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonces extends CI_Controller {

	public function index()
	{
		date_default_timezone_set("Europe/Paris");

		$this->load->model("AnnoncesModel");

		$aView = array();

		$aToutesAnnonces = $this->AnnoncesModel->toutesannonces();

		$aView["aToutesAnnonces"] = $aToutesAnnonces;

		$this->load->view('header-1-master', ["titre" => "Annonces"]);
        $this->load->view('header-2-header');
		$this->load->view('header-3-navbar-public', ["nav" => 2]);
		if (!is_null($this->session->userdata("Connecte")))
		{
			$this->load->view('header-4-navbar-admin', ["nav" => 0]);
		}
        $this->load->view('vue-annonces', $aView);
        $this->load->view('footer');
	}

	public function annonce($id)
	{
		date_default_timezone_set("Europe/Paris");

		$this->load->model("AnnoncesModel");

		$aView = array();

		$annonce = $this->AnnoncesModel->annonce($id);
		$this->AnnoncesModel->oneup($id);

		$aView["annonce"] = $annonce;

		$this->load->view('header-1-master', ["titre" => "Annonce: ".$annonce->ref]);
        $this->load->view('header-2-header');
		$this->load->view('header-3-navbar-public', ["nav" => 2]);
		if (!is_null($this->session->userdata("Connecte")))
		{
			$this->load->view('header-4-navbar-admin', ["nav" => 0]);
		}
        $this->load->view('vue-annonce', $aView);
		$this->load->view('footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{ //méthode par défaut de Accueil, affiche la page d'Accueil

		//réglage du fuseau horaire
		date_default_timezone_set("Europe/Paris");

		//chargement du modèle AnnoncesModel
		$this->load->model("AnnoncesModel");

		//création d'un tableau
		$aView = array();

		//enregistrer un tableau d'objets Annonce avec les 5 annonces les plus vues
		$aTopAnnonces = $this->AnnoncesModel->topannonces();

		//enregistrer le tableau dans la case aTopAnnonces pour que la vue puisse le récupérer
		$aView["aTopAnnonces"] = $aTopAnnonces;

		//chargement des vues
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
	{ //méthode d'affichage de la page d'A propos

		//réglage du fuseau horaire
		date_default_timezone_set("Europe/Paris");

		//chargement des vues
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

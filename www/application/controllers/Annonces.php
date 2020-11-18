<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonces extends CI_Controller {

	public function index()
	{ //méthode par défaut de Annonces, affiche la page d'Annonces

		//réglage du fuseau horaire
		date_default_timezone_set("Europe/Paris");

		//chargement du modèle AnnoncesModel
		$this->load->model("AnnoncesModel");

		//création d'un tableau
		$aView = array();

		//enregistrer un tableau d'objets Annonce avec toutes les annonces
		$aToutesAnnonces = $this->AnnoncesModel->toutesannonces();

		//enregistrer le tableau dans la case aToutesAnnonces pour que la vue puisse le récupérer
		$aView["aToutesAnnonces"] = $aToutesAnnonces;

		//chargement des vues
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
	{ //méthode d'affichage de la page de l'annonce dont l'ID est passé en argument

		//réglage du fuseau horaire
		date_default_timezone_set("Europe/Paris");

		//chargement du modèle AnnoncesModel
		$this->load->model("AnnoncesModel");

		//création d'un tableau
		$aView = array();

		//enregistrer un objet Annonce dont l'ID est passé en paramètre
		$annonce = $this->AnnoncesModel->annonce($id);
		//
		$aOptions = $this->AnnoncesModel->options($id);
		//
		$aPhotos = $this->AnnoncesModel->photos($id);

		//enregistrer l'objet dans la case annonce pour que la vue puisse le récupérer
		$aView["annonce"] = $annonce;
		//
		$aView["aOptions"] = $aOptions;
		//
		$aView["aPhotos"] = $aPhotos;

		//envoie la commande d'incrémenter de 1 le nombre de vue de l'annonce dont l'ID est passé en paramètre
		$this->AnnoncesModel->oneup($id);

		//chargement des vues
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

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

	public function contact($ref = "générales")
	{ //méthode 

		//réglage du fuseau horaire
		date_default_timezone_set("Europe/Paris");

		//chargement du modèle AnnoncesModel
		$this->load->model("AnnoncesModel");

		//création d'un tableau
		$aView = array();
		$aView["ref"] = $ref;

		//enregistrer un objet Annonce dont l'ID est passé en paramètre
		$aRefs = $this->AnnoncesModel->referencesList();

		$aView["aRefs"] = $aRefs;
		
		// Chargement de la librairie form_validation
		$this->load->library(['form_validation']);

		if ($this->input->post())
		{
			// Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
			$this->form_validation->set_rules("nom", "Nom et prénom", "required", array("required" => "Le %s doivent être renseigné."));
			$this->form_validation->set_rules("email", "Email", "required|regex_match[/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/]", array("required" => "L'%s doit être renseigné.", "regex_match" => "L'%s n'a pas un format correct."));

			if ($this->form_validation->run() == FALSE)
			{ // Echec de la validation, on réaffiche la vue formulaire

				$this->form_validation->set_error_delimiters('<div class="alert alert-danger nvalid-feedback">', '</div>');

				$ref = $this->input->post("sujet");

				//chargement des vues
				$this->load->view('header-1-master', ["titre" => "Contactez-nous"]);
				$this->load->view('header-2-header');
				$this->load->view('header-3-navbar-public', ["nav" => 3]);
				if (!is_null($this->session->userdata("Connecte")))
				{
					$this->load->view('header-4-navbar-admin', ["nav" => 0]);
				}
				$this->load->view('vue-contact', $aView);
				$this->load->view('footer');
			}
			else
			{
				$this->load->library('email');

				$this->email->from('formcontactauto@wazaaimmo.fr', $this->input->post("nom"));
				$this->email->to('contact@wazaaimmo.fr');

				$this->email->subject('Info sur '.$this->input->post("sujet"));
				$str = 'Hé, '.$this->input->post("nom").' voudrait des infos sur '.$this->input->post("sujet").'. Tu peux le recontacter à l\'adresse suivante : '.$this->input->post("email").'<br>'.$this->input->post("nom").' a aussi joint ce message : '.$this->input->post("question");
				$this->email->message($str);

				$this->email->send();

				$aView["str"] = $str;

				//chargement des vues
				$this->load->view('header-1-master', ["titre" => "Contactez-nous"]);
				$this->load->view('header-2-header');
				$this->load->view('header-3-navbar-public', ["nav" => 3]);
				if (!is_null($this->session->userdata("Connecte")))
				{
					$this->load->view('header-4-navbar-admin', ["nav" => 0]);
				}
				$this->load->view('vue-contact-ok', $aView);
				$this->load->view('footer');
			}
		}
		else
		{
			//chargement des vues
			$this->load->view('header-1-master', ["titre" => "Contactez-nous"]);
			$this->load->view('header-2-header');
			$this->load->view('header-3-navbar-public', ["nav" => 3]);
			if (!is_null($this->session->userdata("Connecte")))
			{
				$this->load->view('header-4-navbar-admin', ["nav" => 0]);
			}
			$this->load->view('vue-contact', $aView);
			$this->load->view('footer');
		}
	}
}

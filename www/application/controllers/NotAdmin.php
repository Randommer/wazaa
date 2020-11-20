<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotAdmin extends CI_Controller {

	public function index()
	{ //méthode par défaut de Notadmin, affiche la page de connexion

		//réglage du fuseau horaire
		date_default_timezone_set("Europe/Paris");

		if (!is_null($this->session->userdata("Connecte")))
		{
			//chargement des vues
			$this->load->view('header-1-master', ["titre" => "Connexion"]);
			$this->load->view('header-2-header');
			$this->load->view('header-3-navbar-public', ["nav" => 0]);
			$this->load->view('header-4-navbar-admin', ["nav" => 0]);
			$this->load->view('vue-login-ok');
			$this->load->view('footer');
		}
		else
		{
			// Chargement de la librairie form_validation
			$this->load->library(['form_validation']);

			//création d'un tableau
			$aView = array();

			if ($this->input->post())
			{
				// Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
				$this->form_validation->set_rules("log", "Identifiant", "required|regex_match[/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/]", array("required" => "L'%s doit être renseigné.", "regex_match" => "L'%s doit être un email."));
				$this->form_validation->set_rules("mdp", "Mot de passe", "required", array("required" => "Le %s doit être renseigné."));

				if ($this->form_validation->run() == FALSE)
				{ // Echec de la validation, on réaffiche la vue formulaire
					$aView["logerror"] = 1;

					//chargement des vues
					$this->load->view('header-1-master', ["titre" => "Connexion"]);
					$this->load->view('header-2-header');
					$this->load->view('header-3-navbar-public', ["nav" => 0]);
					$this->load->view('vue-login', $aView);
					$this->load->view('footer');
				}
				else
				{  // La validation a réussi, on peut vérifier les valeurs dans la base
					//chargement du modèle AnnoncesModel
					$this->load->model("UtilisateursModel");

					//
					$id = $this->UtilisateursModel->verif($this->input->post("log"), $this->input->post("mdp"));

					//
					if (!is_null($id))
					{
						$this->session->set_userdata("Connecte", true);
						$this->session->set_userdata("User", $id);
						redirect("NotAdmin");
					}
					else
					{
						$aView["logerror"] = 2;

						//chargement des vues
						$this->load->view('header-1-master', ["titre" => "Connexion"]);
						$this->load->view('header-2-header');
						$this->load->view('header-3-navbar-public', ["nav" => 0]);
						$this->load->view('vue-login', $aView);
						$this->load->view('footer');
					}
				}
			}
			else
			{
				//chargement des vues
				$this->load->view('header-1-master', ["titre" => "Connexion"]);
				$this->load->view('header-2-header');
				$this->load->view('header-3-navbar-public', ["nav" => 0]);
				$this->load->view('vue-login', $aView);
				$this->load->view('footer');
			}
		}
	}

	public function disconnect()
	{ //méthode 

		//on vide les variables de la session
		// $this->session->unset_userdata("Connecte");
		// $this->session->unset_userdata("User");
        $_SESSION = array();
        //on détruit la session
		$this->session->sess_destroy();
		
		redirect("");
	}
}

<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class UtilisateursModel extends CI_Model
{

    public function verif($log, $mdp)
    { //méthode 
        
        //chargement de la base de données
        $this->load->database();

        //construction de la requête
        $this->db->select("wusr_id as 'id', wusr_mdp as 'mdp'");
        $this->db->from("waz_utilisateurs");
        $this->db->where("wusr_mail", $log);
        //envoie de la requête à la base
        $results = $this->db->get();

        //récupération des résultats de la requête
        $user = $results->row();

        if (is_null($user))
        {
            //renvoie
            return null;
        }
        else
        {
            if (password_verify($mdp, $user->mdp))
            {
                //renvoie
                return $user->id;
            }
            else
            {
                //renvoie
                return null;
            }
        }
    }

}
?>
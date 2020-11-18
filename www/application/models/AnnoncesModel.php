<?php
// application/models/ProduitsModel.php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class AnnoncesModel extends CI_Model
{

    public function topannonces()
    { //méthode renvoie un tableau d'objets Annonce avec les 5 annonces les plus vues

        //chargement de la base de données
        $this->load->database();

        //construction de la requête
        $this->db->select("wan_id as 'id'");
        $this->db->from("waz_annonces");
        $this->db->order_by("wan_vues", 'DESC');
        $this->db->limit(5);
        //envoie de la requête à la base
        $results = $this->db->get();

        //récupération des résultats de la requête
        $annonces = $results->result();

        //création d'un tableau
        $aTopAnnonces = [];

        //récupération des ID de chaque annonce
        foreach ($annonces as $annonce)
        {
            //enregistrer dans le tableau, les annonces en les appelant par leurs ID
            $aTopAnnonces[] = $this->annonce($annonce->id);
        }

        //renvoie du tableau d'objets Annonce avec les 5 annonces les plus vues
        return $aTopAnnonces;
    }

    public function toutesannonces()
    { //méthode renvoie un tableau d'objets Annonce avec toutes les annonces

        //chargement de la base de données
        $this->load->database();

        //construction de la requête
        $this->db->select("wan_id as 'id'");
        $this->db->from("waz_annonces");
        $this->db->order_by("wan_d_ajout", 'DESC');
        //envoie de la requête à la base
        $results = $this->db->get();

        //récupération des résultats de la requête
        $annonces = $results->result();

        //création d'un tableau
        $aToutesAnnonces = [];

        //récupération des ID de chaque annonce
        foreach ($annonces as $annonce)
        {
            //enregistrer dans le tableau, les annonces en les appelant par leurs ID
            $aToutesAnnonces[] = $this->annonce($annonce->id);
        }

        //renvoie du tableau d'objets Annonce avec toutes les annonces
        return $aToutesAnnonces;
    }

    public function annonce($id)
    { //méthode renvoie l'objet Annonce dont l'ID est passé en argument

        //chargement de la base de données
        $this->load->database();

        //construction de la requête
        $this->db->select("wan_id as 'id', wan_offre as 'offre', wan_type as 'type', wan_pieces as 'pieces', wan_ref as 'ref', wan_titre as 'titre', wan_description as 'description', wan_local as 'local', wan_surf_hab as 'surf_hab', wan_surf_tot as 'surf_tot', wan_prix as 'prix', wan_diagnostic as 'diagnostic', wan_d_ajout as 'ajout', wan_d_modif as 'modif', wan_vues as 'vues', wan_id as 'photo'");
        $this->db->from("waz_annonces");
        $this->db->where("wan_id", $id);
        //envoie de la requête à la base
        $results = $this->db->get();

        //récupération du résultat de la requête
        $annonce = $results->row();

        //
        $annonce->photo = $this->photos($annonce->id, "one");

        //renvoie l'objet Annonce dont l'ID est passé en argument
        return $annonce;
    }

    public function options($id)
    { //

        //chargement de la base de données
        $this->load->database();

        //construction de la requête
        $this->db->select("wopt_libelle as 'libelle'");
        $this->db->from("waz_annonces_options");
        $this->db->join("waz_options", "waz_options.wopt_id = waz_annonces_options.wopt_id", "inner");
        $this->db->where("wan_id", $id);
        //envoie de la requête à la base
        $results = $this->db->get();

        //récupération des résultats de la requête
        $options = $results->result();

        //création d'un tableau
        $aOptions = [];

        //récupération de chaque options de l'annonce
        foreach ($options as $option)
        {
            //enregistrer dans le tableau
            $aOptions[] = $option->libelle;
        }

        //
        return $aOptions;
    }

    public function photos($id, $arg = "all")
    { //

        //chargement de la base de données
        $this->load->database();

        //construction de la requête
        $this->db->select("wimg_id as 'id', wimg_ext as 'ext'");
        $this->db->from("waz_images");
        $this->db->where("wimg_wan_id", $id);
        if ($arg == "one")
        {
            $this->db->limit(1);
        }
        //envoie de la requête à la base
        $results = $this->db->get();

        //récupération des résultats de la requête
        $photos = $results->result();

        //création d'un tableau
        $aPhotos = [];

        //récupération de chaque options de l'annonce
        foreach ($photos as $photo)
        {
            //enregistrer dans le tableau
            $aPhotos[] = $photo->id.".".$photo->ext;
        }

        if (count($photos) == 0)
        {
            $aPhotos[] = "maison.jpg";
        }

        //
        return $aPhotos;
    }

    public function oneup($id)
    { //méthode qui incrémente de 1 le nombre de vue de l'annonce dont l'ID est passé en argument

        //chargement de la base de données
        $this->load->database();

        //construction de la requête
        $this->db->set("wan_vues", "wan_vues+1", false);
        $this->db->where("wan_id", $id);
        //envoie de l'update à la base
        $this->db->update("waz_annonces");
    }

}
?>
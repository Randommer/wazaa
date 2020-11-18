<?php
// application/models/ProduitsModel.php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class AnnoncesModel extends CI_Model
{

    public function topannonces()
    {
        $this->load->database();

        $this->db->select("wan_id as 'id'");
        $this->db->from("waz_annonces");
        $this->db->order_by("wan_vues", 'DESC');
        $this->db->limit(5);
        $results = $this->db->get();

        $annonces = $results->result();

        $aTopAnnonces = [];

        foreach ($annonces as $annonce)
        {
            $aTopAnnonces[] = $this->annonce($annonce->id);
        }

        return $aTopAnnonces;
    }

    public function toutesannonces()
    {
        $this->load->database();

        $this->db->select("wan_id as 'id'");
        $this->db->from("waz_annonces");
        $this->db->order_by("wan_d_ajout", 'DESC');
        $results = $this->db->get();

        $annonces = $results->result();

        $aToutesAnnonces = [];

        foreach ($annonces as $annonce)
        {
            $aToutesAnnonces[] = $this->annonce($annonce->id);
        }

        return $aToutesAnnonces;
    }

    public function annonce($id)
    {
        $this->load->database();

        $this->db->select("wan_id as 'id', wan_offre as 'offre', wan_type as 'type', wan_pieces as 'pieces', wan_ref as 'ref', wan_titre as 'titre', wan_description as 'description', wan_local as 'local', wan_surf_hab as 'surf_hab', wan_surf_tot as 'surf_tot', wan_prix as 'prix', wan_diagnostic as 'diagnostic', wan_d_ajout as 'ajout', wan_d_modif as 'modif', wan_vues as 'vues'");
        $this->db->from("waz_annonces");
        $this->db->where("wan_id", $id);
        $results = $this->db->get();

        $annonce = $results->row();

        return $annonce;
    }

    public function oneup($id)
    {
        $this->load->database();

        $this->db->set("wan_vues", "wan_vues+1", false);
        $this->db->where("wan_id", $id);
        $this->db->update("waz_annonces");
    }

}
?>
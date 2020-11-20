DROP VIEW IF EXISTS v_waz_top5_annonces;
CREATE VIEW v_waz_top5_annonces
AS
SELECT
DISTINCT waz_annonces.wan_id as 'id',
wan_offre as 'offre',
wan_type as 'type',
wan_pieces as 'pieces',
wan_ref as 'ref',
wan_titre as 'titre',
wan_description as 'description',
wan_local as 'local',
wan_surf_hab as 'surf_hab',
wan_surf_tot as 'surf_tot',
wan_prix as 'prix',
wan_diagnostic as 'diagnostic',
wan_d_ajout as 'ajout',
wan_d_modif as 'modif',
wan_vues as 'vues'
FROM waz_annonces
ORDER BY wan_vues DESC
LIMIT 5;

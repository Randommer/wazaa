DROP TABLE IF EXISTS waz_annonces;
CREATE TABLE IF NOT EXISTS waz_annonces(
        wan_id  int UNSIGNED NOT NULL AUTO_INCREMENT,
        wan_offre   varchar(1) NOT NULL,
        wan_type    int NOT NULL,
        wan_pieces  int,
        wan_ref varchar(10) NOT NULL,
        wan_titre   varchar(200) NOT NULL,
        wan_description text NOT NULL,
        wan_local   varchar(100) NOT NULL,
        wan_surf_hab    int,
        wan_surf_tot    int NOT NULL,
        wan_prix    int NOT NULL,
        wan_diagnostic  varchar(1) NOT NULL,
        wan_d_ajout date NOT NULL,
        wan_d_modif datetime,
        wan_vues    int NOT NULL DEFAULT 0,
    CONSTRAINT annonce_PK PRIMARY KEY (wan_id)
);

DROP TABLE IF EXISTS waz_options;
CREATE TABLE IF NOT EXISTS waz_options(
        wopt_id int UNSIGNED NOT NULL AUTO_INCREMENT,
        wopt_libelle    varchar(100) NOT NULL,
    CONSTRAINT option_PK PRIMARY KEY (wopt_id)
);

DROP TABLE IF EXISTS waz_annonces_options;
CREATE TABLE IF NOT EXISTS waz_annonces_options(
        wan_id  int UNSIGNED NOT NULL,
        wopt_id int UNSIGNED NOT NULL,
    CONSTRAINT annonce_option_FK FOREIGN KEY(wan_id) REFERENCES waz_annonces(wan_id),
    CONSTRAINT option_annonce_FK FOREIGN KEY(wopt_id) REFERENCES waz_options(wopt_id),
    CONSTRAINT annonce_option_PK PRIMARY KEY(wan_id, wopt_id)
);


DROP TABLE IF EXISTS waz_utilisateurs;
CREATE TABLE IF NOT EXISTS waz_utilisateurs(
        wusr_id int UNSIGNED NOT NULL AUTO_INCREMENT,
        wusr_nom    varchar(100) NOT NULL,
        wusr_prenom varchar(100) NOT NULL,
        wusr_mail   varchar(100) NOT NULL,
        wusr_mdp    varchar(200) NOT NULL,
    CONSTRAINT utilisateur_PK PRIMARY KEY (wusr_id)
);

DROP TABLE IF EXISTS waz_historique;
CREATE TABLE IF NOT EXISTS waz_historique(
        whis_id int UNSIGNED NOT NULL AUTO_INCREMENT,
        whis_wan_id int UNSIGNED NOT NULL,
        whis_date   date NOT NULL,
        whis_version    decimal(5, 1) NOT NULL,
        whis_modification   varchar(200) NOT NULL,
        whis_wusr_id    int UNSIGNED NOT NULL,
    CONSTRAINT historique_annonce_FK FOREIGN KEY(whis_wan_id) REFERENCES waz_annonces(wan_id),
    CONSTRAINT historique_utilisateur_FK FOREIGN KEY(whis_wusr_id) REFERENCES waz_utilisateurs(wusr_id),
    CONSTRAINT historique_PK PRIMARY KEY (whis_id)
);

DROP TABLE IF EXISTS waz_images;
CREATE TABLE IF NOT EXISTS waz_images(
        wimg_id int UNSIGNED NOT NULL AUTO_INCREMENT,
        wimg_wan_id int UNSIGNED NOT NULL,
        wimg_ext    varchar(3) NOT NULL,
    CONSTRAINT image_annonce_FK FOREIGN KEY(wimg_wan_id) REFERENCES waz_annonces(wan_id),
    CONSTRAINT image_PK PRIMARY KEY (wimg_id)
);

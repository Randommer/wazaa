<div class="row pt-2 mx-0 mb-1">
    <div class="col-12">
        <h1>Nos annonces</h1>
    </div>
</div>

<div class="row pt-2 mx-0 mb-1">

    <?php
    foreach ($aToutesAnnonces as $annonce)
    {
    ?>
        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow-sm">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="<?php echo site_url('annonces/annonce/'.$annonce->id); ?>"><?php echo $annonce->titre; ?></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"><?php echo $annonce->ref; ?></h3><!-- Référence -->
                    <a href="<?php echo site_url('annonces/annonce/'.$annonce->id); ?>">
                        <img class="card-img" src="<?php echo base_url("src/img/wazaa_logo.png"); ?>"><!-- Photo 1 -->
                    </a>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $annonce->local; ?></li><!-- Localisation -->
                        <li class="list-group-item"><?php echo $annonce->surf_tot; ?>m²</li><!-- Surface Totale -->
                        <li class="list-group-item"><?php echo $annonce->prix; ?>€</li><!-- Prix -->
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="<?php echo site_url('annonces/annonce/'.$annonce->id); ?>" class="btn btn-sm btn-primary"><i class="far fa-eye"></i> Détails</a>
                    <small class="text-muted"><?php echo $annonce->ajout; ?></small><!-- Date d'ajout -->
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</div>
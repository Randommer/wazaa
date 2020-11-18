<div class="row pt-2 mx-0 mb-1">
    <div class="col-12">
        <h1>Bienvenue</h1>
        <p>Les Favoris</p>
        <h2>Les Favoris</h2>
    </div>
</div>

<div class="row pt-2 mx-0 mb-1">
    
    <?php
    $i = 0;
    foreach ($aTopAnnonces as $annonce)
    {
        if ($i == 0)
        {
    ?>
            <!-- Le plus vue -->
            <div class="offset-lg-2 col-lg-8">
        <?php
        }
        else
        {
        ?>
            <!-- le reste du top 5 -->
            <div class="col-lg-6">
        <?php
        }
        ?>
        <div class="card border-primary mb-4 shadow-sm">
            <div class="card-header text-center">
                <h3 class="h5 card-title">
                    <a href="<?php echo site_url('annonces/annonce/'.$annonce->id); ?>"><?php echo $annonce->titre; ?></a>
                </h3><!-- Titre -->
                <h4 class="h6 card-subtitle text-muted"><?php echo $annonce->ref; ?></h4><!-- Référence -->
                <a href="<?php echo site_url('annonces/annonce/'.$annonce->id); ?>">
                    <img class="card-img" src="<?php echo base_url("src/img/wazaa_logo.png"); ?>"><!-- Photo 1 -->
                </a>
            </div>
            <div class="card-body">
                <p class="card-text"><?php echo $annonce->description; ?></p><!-- Description -->
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
        $i++;
    }
    ?>
    
</div>
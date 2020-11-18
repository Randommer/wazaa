<!-- Corps du site -->
<div class="row pt-2 mx-0 mb-1">
    <!-- Partie article de la page -->
    <div class="col-sm-12 col-lg-8 mb-2 shadow">
        <h1 class="text-center">Annonce <span class="text-muted"><?php echo $annonce->ref; ?></span></h1><!-- Référence -->
        <p class="h3 text-center text-info"><?php echo $annonce->titre; ?></p><!-- Titre -->

        <hr>

        <h2 class="h4">Offre  <span class="text-info">
            <?php
            switch ($annonce->offre)
            {
                case 'A':
            ?>
                    Achat
            <?php
                break;

                case 'L':
            ?>
                    Location
            <?php
                break;

                case 'V':
            ?>
                    Viager
            <?php
                break;
            }
            ?>
        </span></h2><!-- Type d'offre -->

        <h2 class="h4">Type de bien  <span class="text-info">
            <?php
            switch ($annonce->type)
            {
                case 1:
            ?>
                    Maison
            <?php
                break;

                case 2:
            ?>
                    Appartement
            <?php
                break;

                case 3:
            ?>
                    Immeuble
            <?php
                break;

                case 4:
            ?>
                    Garage
            <?php
                break;

                case 5:
            ?>
                    Terrain
            <?php
                break;

                case 6:
            ?>
                    Locaux professionnels
            <?php
                break;

                case 7:
            ?>
                    Bureaux
            <?php
                break;
            }
            ?>
        </span></h2><!-- Type de bien -->

        <?php
        if (!is_null($annonce->pieces))
        {
        ?>
            <h2 class="h4">Pièces  <span class="text-info"><?php echo $annonce->pieces; ?></span></h2><!-- Nombre de pièces -->
        <?php
        }
        ?>

        <h2 class="h4">Référence  <span class="text-info"><?php echo $annonce->ref; ?></span></h2><!-- Référence -->
        <h2 class="h4">Description</h2>
        <p class="text-justify text-info"><?php echo $annonce->description; ?></p><!-- Description -->
        <h2 class="h4">Localisation</h2>
        <p class="text-justify text-info"><?php echo $annonce->local; ?></p><!-- Localisation -->

        <?php
        if (!is_null($annonce->surf_hab))
        {
        ?>
            <h2 class="h4">Surface habitable  <span class="text-info"><?php echo $annonce->surf_hab; ?>m²</span></h2><!-- Surface habitable -->
        <?php
        }
        ?>

        <h2 class="h4">Surface totale  <span class="text-info"><?php echo $annonce->surf_tot; ?>m²</span></h2><!-- Surface totale -->
        <h2 class="h4">Prix  <span class="text-info"><?php echo $annonce->prix; ?>€</span></h2><!-- Prix -->
        <h2 class="h4">Diagnostic énergétique  <span class="text-info">
            <?php
            if ($annonce->diagnostic == 'V')
            {
            ?>
                Non réalisé
            <?php
            }
            else
            {
                echo $annonce->diagnostic;
            }
            ?>
        </span></h2><!-- Diagnostic -->
        <h2 class="h4">Les plus</h2>
        <ul class="list-group list-group-flush text-justify text-info col-6">
            <!-- Options -->
            <li class="list-group-item">Jardin</li>
            <li class="list-group-item">Piscine</li>
            <li class="list-group-item">Combles aménageables</li>
        </ul>
        <h2 class="h4">Publication de l'annonce  <span class="text-info"><?php echo $annonce->ajout; ?></span></h2><!-- Date d'ajout -->

        <hr>

        <h2 class="h3">Pour plus d'infos <a href="<?php echo site_url('annonces/contact/'.$annonce->id); ?>">contactez-nous</a></h2>
    </div>
    <!-- Boite à droite de la partie article -->
    <div class="col-sm-12 col-lg-4 alert-primary pt-2 px-2 pb-1 mb-2 shadow text-center">
        <h2>Photos</h2>
        <img class="" src="<?php echo base_url("src/img/wazaa_logo.png"); ?>"><!-- Photo 1 -->
        <img class="" src="<?php echo base_url("src/img/wazaa_logo.png"); ?>"><!-- Photo 2 -->
    </div>
</div>
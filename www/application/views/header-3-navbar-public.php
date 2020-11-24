<!-- Barre de navigation haute du site -->
<nav class="navbar navbar-expand navbar-light alert-primary">
    <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fas fa-key"></i> Wazaa</a>
    <!-- Bouton Burger pour la version mobile de la barre -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHaute">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Boutons du menu -->
    <div class="collapse navbar-collapse" id="navbarHaute">
        <ul class="navbar-nav">
            <li class="nav-item <?php if ($nav == 1) { echo "active"; } ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>" title="Accueil">
                    <div class="d-none d-lg-block"><i class="fas fa-home"></i> Accueil</div>
                    <div class="d-lg-none"><i class="fas fa-home fa-3x"></i></div>
                </a>
            </li>
            <li class="nav-item <?php if ($nav == 2) { echo "active"; } ?>">
                <a class="nav-link" href="<?php echo site_url('annonces'); ?>" title="Annonces">
                    <div class="d-none d-lg-block"><i class="far fa-list-alt"></i> Annonces</div>
                    <div class="d-lg-none"><i class="far fa-list-alt fa-3x"></i></div>
                </a>
            </li>
            <li class="nav-item <?php if ($nav == 3) { echo "active"; } ?>">
                <a class="nav-link <?php if ($nav == 3) { echo "disabled"; } ?>" href="<?php echo site_url('annonces/contact/'); ?>" title="Contact">
                    <div class="d-none d-lg-block"><i class="fas fa-envelope-open-text"></i> Contact</div>
                    <div class="d-lg-none"><i class="fas fa-envelope-open-text fa-3x"></i></div>
                </a>
            </li>
            <li class="nav-item <?php if ($nav == 4) { echo "active"; } ?>">
                <a class="nav-link" href="<?php echo site_url("accueil/about"); ?>" title="A propos">
                    <div class="d-none d-lg-block"><i class="fas fa-question"></i> A propos</div>
                    <div class="d-lg-none"><i class="fas fa-question fa-3x"></i></div>
                </a>
            </li>
        </ul>
    </div>
</nav>
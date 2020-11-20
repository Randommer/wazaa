<!-- Barre de navigation haute du site -->
<nav class="navbar navbar-expand navbar-light alert-success">
    <a class="navbar-brand"><i class="fas fa-user-edit"></i> Admin</a>
    <!-- Bouton Burger pour la version mobile de la barre -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHaute">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Boutons du menu -->
    <div class="collapse navbar-collapse" id="navbarHaute">
        <ul class="navbar-nav">
            <li class="nav-item <?php if ($nav == 1) { echo "active"; } ?>">
                <a class="nav-link" href="<?php echo site_url(); ?>" title="Annonces">
                    <div class="d-none d-lg-block"><i class="fas fa-pencil-alt"></i> Annonces</div>
                    <div class="d-lg-none"><i class="fas fa-pencil-alt fa-3x"></i></div>
                </a>
            </li>
            <li class="nav-item <?php if ($nav == 1) { echo "active"; } ?>">
                <a class="nav-link" href="<?php echo site_url(); ?>" title="Contact">
                    <div class="d-none d-lg-block"><i class="fas fa-camera"></i> Photos</div>
                    <div class="d-lg-none"><i class="fas fa-camera fa-3x"></i></div>
                </a>
            </li>
        </ul>
    </div>
    <a class="btn btn-danger" href="<?php echo site_url("NotAdmin/disconnect"); ?>" title="A propos">
        <div class="d-none d-lg-block"><i class="fas fa-sign-out-alt"></i> Déconnexion</div>
        <div class="d-lg-none"><i class="fas fa-sign-out-alt fa-3x"></i></div>
    </a>
</nav>
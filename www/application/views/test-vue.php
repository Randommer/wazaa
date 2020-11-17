<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS des icons Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet" crossorigin="anonymous">
    <title>Wazaa Immo - Amiens - <?php echo $titre; ?></title>
</head>
<body>
    <!-- Container du site -->
    <div class="container">
        <!-- Barre de titre du site -->
        <div class="row align-items-center">
            <!-- Logo du site -->
            <div class="col-12 col-lg-3">
                <a href="<?php echo site_url(); ?>" title="Wazaa Immo"><img class="img-fluid" src="<?php echo base_url("src/img/wazaa_logo.png"); ?>" alt="Logo Wazaa Immo"></a>
            </div>
            <!-- Slogan du site -->
            <div class="d-none d-lg-block offset-lg-1 col-lg-8">
                <p class="h1 text-center">Le Roi de l'immobilier à Amiens</p>
            </div>
        </div>
        <!-- Barre de navigation haute du site -->
        <nav class="navbar navbar-expand navbar-light alert-primary">
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><i class="fas fa-key"></i> Wazaa</a>
            <!-- Bouton Burger pour la version mobile de la barre -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHaute">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Boutons du menu -->
            <div class="collapse navbar-collapse" id="navbarHaute">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link disabled" href="<?php echo site_url(); ?>" title="Accueil">
                            <div class="d-none d-lg-block"><i class="fas fa-home"></i> Accueil</div>
                            <div class="d-lg-none"><i class="fas fa-home fa-3x"></i></div>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo site_url(); ?>" title="Annonces">
                            <div class="d-none d-lg-block"><i class="far fa-list-alt"></i> Annonces</div>
                            <div class="d-lg-none"><i class="far fa-list-alt fa-3x"></i></div>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo site_url(); ?>" title="Contact">
                            <div class="d-none d-lg-block"><i class="fas fa-envelope-open-text"></i> Contact</div>
                            <div class="d-lg-none"><i class="fas fa-envelope-open-text fa-3x"></i></div>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link disabled" href="<?php echo site_url(); ?>" title="A propos">
                            <div class="d-none d-lg-block"><i class="fas fa-question"></i> A propos</div>
                            <div class="d-lg-none"><i class="fas fa-question fa-3x"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Corps du site -->
        <div class="row pt-2 mx-0 mb-1">
            <!-- Partie article de la page -->
            <div class="col-sm-12 col-lg-8 mb-2 shadow">
                <h1>A propos de nous</h1>
                <h2>L'entreprise</h2>
                <p class="text-justify">Wazaa Immo, existe depuis 1990 à Amiens, c'est une référence dans l'immobilière dans le département.</p>
                <h2>Services</h2>
                <p class="text-justify">Nous vous proposons un éventail de services, Transactions : Ventes et Locations, Administration de biens : Gestion locative, etc...</p>
                <h2>Disponibilités</h2>
                <p class="text-justify">Une équipe de 12 collaborateurs formés est à votre écoute du lundi au vendredi.</p>
            </div>
            <!-- Boite à droite de la partie article -->
            <div class="col-sm-12 col-lg-4 alert-primary pt-2 px-2 pb-1 mb-2 shadow">
                <p class="text-center font-weight-bold">Depuis 30 ans, <em>Nous vous accompagnons dans vos projets</em></p>
            </div>
        </div>

        <div class="row pt-2 mx-0 mb-1">
            <div class="col-lg-4">
                <div class="card mb-4 shadow-sm">
                    
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="40%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4 shadow-sm">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="40%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4 shadow-sm">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="40%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


<!-- Optional JavaScript -->
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
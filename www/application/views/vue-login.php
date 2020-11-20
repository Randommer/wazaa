<div class="row pt-2 mx-0 mb-1">
    <div class="col-sm-12 offset-lg-4 col-lg-4 border shadow">
        <h1 class="h2 text-primary font-weight-bold text-center">Connexion</h1>
        <?php
        if (isset($logerror))
        {
        ?>
            <div class="alert alert-danger">
                <h2 class="h3 font-weight-bold">Erreur</h2>
                <hr>
                <p class="text-justify">
                    <?php if ($logerror == 1) { ?>
                    Problème de connexion.
                    <?php } if ($logerror == 2) { ?>
                    Erreur de login/mot de passe.
                    <?php } ?>
                </p>
            </div>
        <?php
        }
        else
        {
        ?>
            <hr>
        <?php
        }
        ?>
        <form action="" method="POST" id="login" validate>
            <div class="form-group">
                <label for="log">Identifiant</label>
                <input type="text" class="form-control" name="log" id="log" placeholder="login" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" required value="">
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" id="mdp" placeholder="mot de passe" required value="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fa fa-fw fa-plug"></i> Connexion
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Corps du site -->
<div class="row pt-2 mx-0 mb-1">
    <!-- Partie article de la page -->
    <div class="col-sm-12 col-lg-8 mb-2 shadow">
        <h1>Contactez-nous</h1>
        <form action="" method="POST" id="contact" name="contact" validate>
            <h2>Vos coordonnées</h2>
            <div class="form-group">
                <label for="nom">Nom et prénom</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom et prénom" required value="<?php set_value('nom') ?>">
                <?php echo form_error('nom'); ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="dave.loper@afpa.fr" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" required value="<?php set_value('email') ?>">
                <?php echo form_error('email'); ?>
            </div>
            <h2>Votre demande</h2>
            <div class="form-group">
                <label for="sujet">Vous souhaitez des infos sur</label>
                <select class="form-control" name="sujet" id="sujet" required>
                    <option value="" disabled>Veuillez sélectionner un sujet</option>
                    <option value="générales" <?php if ($ref == "générales") { echo "selected"; } ?>>Des informations générales</option>
                    <?php
                    foreach ($aRefs as $key => $annonce)
                    {
                    ?>
                        <option value="<?php echo $annonce->ref; ?>" <?php if ($ref == $annonce->id) { echo "selected"; } ?>>Annonce avec la référence : <?php echo $key; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="question">Message supplémentaire</label>
                <textarea class="form-control" name="question" id="question" rows="2" placeholder="Vous pouvez écrire ici des précisions sur votre demande d'informations"><?php // ?></textarea>
            </div>
            <div class="form-group">
                <!-- bouton qui remet à zéro tout les input du formulaire -->
                <button type="reset" class="btn btn-info">
                    <i class="fa fa-fw fa-undo"></i> Effacer
                </button>
                <!-- bouton submit du formulaire -->
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-fw fa-paper-plane"></i> Envoyer
                </button>
            </div>
        </form>
    </div>
    <!-- Boite à droite de la partie article -->
    <div class="col-sm-12 col-lg-4 alert-primary pt-2 px-2 pb-1 mb-2 shadow">
        
    </div>
</div>
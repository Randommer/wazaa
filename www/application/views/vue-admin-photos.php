<div class="row pt-2 mx-0 mb-1">
    <div class="col-12">
        <h1>
            Les Photos<?php if (isset($annonce)) { echo " de : ".$annonce->ref; } ?>
        </h1>
        <h2>
            <?php
            if (!isset($annonce))
            {
            ?>
                <a href="<?php echo site_url('AdminPanel/ajoutPhoto'); ?>" class="btn btn-block btn-success"><i class="fas fa-plus-square"></i> Ajouter</a>
            <?php
            }
            else
            {
            ?>
                <a href="<?php echo site_url('AdminPanel/ajoutPhoto/'.$annonce->id); ?>" class="btn btn-block btn-success"><i class="fas fa-plus-square"></i> Ajouter</a>
            <?php
            }
            ?>
        </h2>
    </div>
</div>

<div class="row pt-2 mx-0 mb-1">

    <?php
    foreach ($aToutesPhotos as $photo)
    {
    ?>
        <div class="col-md-6 col-lg-3">
            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header text-center">
                    <h2 class="h5 card-title"><?php echo $photo->ref; ?></h2><!-- Référence -->
                    <img class="card-img border border-success" src="<?php echo base_url("src/photos/".$photo->file); ?>"><!-- Photo -->
                </div>
                <div class="card-footer d-flex justify-content-between align-items-left">
                    <a href="<?php echo site_url('AdminPanel/suppPhoto/'.$photo->id); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</div>
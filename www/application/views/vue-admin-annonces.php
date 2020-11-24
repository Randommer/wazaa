<div class="row pt-2 mx-0 mb-1">
    <div class="col-12">
        <h1>Les Annonces</h1>
        <h2>
            <a href="<?php echo site_url('AdminPanel/ajout'); ?>" class="btn btn-block btn-success"><i class="fas fa-plus-square"></i> Ajouter</a>
        </h2>
    </div>
</div>

<div class="row pt-2 mx-0 mb-1">
    <div class="col-12">
        <table class="table table-sm table-bordered table-striped table-hover text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Référence</th>
                <th>Prix</th>
                <th>Vues</th>
                <th>Photos</th>
                <th>Ajout</th>
                <th>Modification</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($aToutesAnnonces as $annonce)
            {
            ?>
                <tr>
                    <td>
                        <?php echo $annonce->id; ?>
                    </td>
                    <td>
                        <?php echo $annonce->ref; ?>
                    </td>
                    <td>
                        <?php echo $annonce->prix; ?>€
                    </td>
                    <td>
                        <?php echo $annonce->vues; ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('AdminPanel/photos/'.$annonce->id); ?>" class="btn btn-sm btn-info"><?php echo $annonce->photos; ?></a>
                        <a href="<?php echo site_url('AdminPanel/ajoutPhoto/'.$annonce->id); ?>" class="btn btn-sm btn-success"><i class="fas fa-plus-square"></i></a>
                    </td>
                    <td>
                        <?php echo $annonce->ajout; ?>
                    </td>
                    <td>
                        <?php echo $annonce->modif; ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('AdminPanel/modif/'.$annonce->id); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('AdminPanel/supp/'.$annonce->id); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        <tbody>
        </table>
    </div>

</div>
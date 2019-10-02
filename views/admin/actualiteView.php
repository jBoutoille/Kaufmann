<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Gestion de l'actualité <span class="badge fs30">OFF</span></h1>
                <h2 class="page-subhead-line">Cette section permet de créer, modifier et supprimer des articles d'actualité</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <b>CETTE PAGE EST ACTUELLEMENT EN STANDY POUR LES RAISONS SUIVANTES :</b><br>
                    - Ce module est géré par le prestataire de manière externe
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $htmlTitle = "Gestion de l'actualité | Admin | Cabinet G.KAUFMANN";
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
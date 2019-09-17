<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Gestion de la Newsletter</h1>
                <h2 class="page-subhead-line">Cette section permet de télécharger la liste à jour des adresses mails inscrites à la newsletter</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    CETTE PAGE EST ACTUELLEMENT EN STANDBY PAR MANQUE D'INFORMATIONS POUR SON DEVELOPPEMENT.                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $htmlTitle = 'Gestion de la Newsletter | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
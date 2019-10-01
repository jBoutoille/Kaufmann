<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Gestion de la Newsletter <span class="badge fs30">OFF</span></h1>
                <h2 class="page-subhead-line">Cette section permet de télécharger la liste à jour des adresses mails inscrites à la newsletter</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <b>CETTE PAGE EST ACTUELLEMENT EN STANDY POUR LES RAISONS SUIVANTES :</b><br>
                    - Manque d'informations de la part du prestataire sur le fonctionnement du module<br>
                    - Problèmes de droits liés à la CNIL
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $htmlTitle = 'Gestion de la Newsletter | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
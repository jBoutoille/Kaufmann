<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Modifications - Bas de page</h1>
                <h2 class="page-subhead-line">Cette section permet de modifier le contenu du bloc "Bas de page" sur le site</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <?= $adminNotif ?>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        MODIFICATIONS DU BAS DE PAGE
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Titre des coordonnées</label>
                                <input class="form-control" type="text" name="adminEditFooterTitreCoordonnees" value="<?= $RFooter['footerTitreCoordonnees'] ?>" required>
                                <p class="help-block">Modifie le titre des coordonnées du bas de page</p>
                            </div>
                            <hr>
                                <p><strong>Les coordonnées sont à modifier dans la partie "Configuration du site"</strong></p>
                            <hr>
                            <div class="form-group">
                                <label>Lien linkedin</label>
                                <input class="form-control" type="text" name="adminEditFooterLinkedin" value="<?= $RFooter['footerLinkedin'] ?>" required>
                                <p class="help-block">Modifie le lien du bouton Linkedin</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Copyrights du site</label>
                                <input class="form-control" type="text" name="adminEditFooterCopyrights" value="<?= $RFooter['footerCopyrights'] ?>" required>
                                <p class="help-block">Modifie les copyrights présent tous en bas du site</p>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminEditFooter">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php
    $htmlTitle = 'Modifications - Bas de page | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
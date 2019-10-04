<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Modifications - Contact</h1>
                <h2 class="page-subhead-line">Cette section permet de modifier le contenu du bloc "Contact" sur le site</h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-12">

                <?= $adminNotif ?>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        MODIFICATIONS DU BLOC CONTACT
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Titre de la section</label>
                                <input class="form-control" type="text" name="adminEditContactTitre" value="<?= $RContact['contactTitre'] ?>" required>
                                <p class="help-block">Modifie le titre de la section "Contact"</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Titre du bloc "coordonnées"</label>
                                <input class="form-control" type="text" name="adminEditContactCoordonnees" value="<?= $RContact['contactCoordonnees'] ?>" required>
                                <p class="help-block">Modifie le titre du bloc "Coordonnées"</p>
                            </div>
                            <hr>
                                <p><strong>Les coordonnées sont à modifier dans la partie "Configuration du site"</strong></p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description du bouton "Demander un RDV"</label>
                                        <input class="form-control" type="text" name="adminEditContactDescBtn1" value="<?= $RContact['contactDescBtn1'] ?>" required>
                                        <p class="help-block">Modifie la description du bouton "Demander un RDV"</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Texte dans le bouton "Demander un RDV"</label>
                                        <input class="form-control" type="text" name="adminEditContactBtn1" value="<?= $RContact['contactBtn1'] ?>" required>
                                        <p class="help-block">Modifie le texte dans le bouton "Demander un RDV"</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description du bouton "Envoyer un CV"</label>
                                        <input class="form-control" type="text" name="adminEditContactDescBtn2" value="<?= $RContact['contactDescBtn2'] ?>" required>
                                        <p class="help-block">Modifie la description du bouton "Envoyer un CV"</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Texte dans le bouton "Envoyer un CV"</label>
                                        <input class="form-control" type="text" name="adminEditContactBtn2" value="<?= $RContact['contactBtn2'] ?>" required>
                                        <p class="help-block">Modifie le texte dans le bouton "Envoyer un CV"</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary"name="formAdminEditContact">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php
    $htmlTitle = 'Modifications - Contact | Admin | ' . $RConfig['configNomSite'];
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
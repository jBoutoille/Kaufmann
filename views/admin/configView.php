<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Configuration du site</h1>
                <h2 class="page-subhead-line">Cette section permet de configurer les informations de bases du site en cas de changements</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        CONFIGURATION DU SITE
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Nom du site</label>
                                <input class="form-control" type="text" name="adminConfig1NomSite" value="<?= $RConfig['configNomSite'] ?>" required>
                                <p class="help-block">Essentiel pour le référencement naturel - Idéalement entre 45 et 70 caractères</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Description du site</label>
                                <textarea class="form-control" type="text" row="4" name="adminConfig1Description" required><?= $RConfig['configDescription'] ?></textarea>
                                <p class="help-block">Essentiel pour le référencement naturel - Idéalement entre 150 et 200 caractères</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>URL du site</label>
                                <input class="form-control" type="text" name="adminConfig1URL" value="<?= $RConfig['configURL'] ?>" required>
                                <p class="help-block">Essentiel pour le référencement naturel</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Lien de l'espace client</label>
                                <input class="form-control" type="text" name="adminConfig1Client" value="<?= $RConfig['configClient'] ?>" required>
                                <p class="help-block">Modifie le lien du bouton "Espace client" en cas de changement</p>     
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminConfig1">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        COORDONNÉES DU CABINET
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Numéro et rue</label>
                                <input class="form-control" type="text" name="adminConfig2Adresse" value="<?= $RConfig['configAdresse'] ?>" required>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Code postal</label>
                                        <input class="form-control" type="number" name="adminConfig2CP" value="<?= $RConfig['configCP'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input class="form-control" type="text" name="adminConfig2Ville" value="<?= $RConfig['configVille'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>E-mail de contact</label>
                                <input class="form-control" type="text" name="adminConfig2Mail" value="<?= $RConfig['configMail'] ?>" required>
                                <p class="help-block">Modifie l'adresse e-mail de contact, présent dans la section "Contact" et le bas du site</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input class="form-control" type="text" name="adminConfig2Telephone" value="<?= $RConfig['configTelephone'] ?>" required>
                                <p class="help-block">Modifie le numéro de téléphone du cabinet, présent dans la section "Contact" et le bas du site</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>FAX</label>
                                <input class="form-control" type="text" name="adminConfig2Fax" value="<?= $RConfig['configFax'] ?>" required>
                                <p class="help-block">Modifie le numéro de FAX du cabinet, présent dans la section "Contact" et le bas du site</p>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminConfig2">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    $htmlTitle = 'Configuration du site | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
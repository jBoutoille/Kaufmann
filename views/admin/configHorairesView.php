<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Configuration - Horaires</h1>
                <h2 class="page-subhead-line">Cette section permet de configurer les horaires du cabinet en cas de changements</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <?= $adminNotif ?>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        CONFIGURATION DES HORAIRES
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Lundi</label>
                                <input class="form-control" type="text" name="adminConfig3Lundi" value="<?= $RConfig['configLundi'] ?>" required>                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Mardi</label>
                                <input class="form-control" type="text" name="adminConfig3Mardi" value="<?= $RConfig['configMardi'] ?>" required>                             </div>
                            <hr>
                            <div class="form-group">
                                <label>Mercredi</label>
                                <input class="form-control" type="text" name="adminConfig3Mercredi" value="<?= $RConfig['configMercredi'] ?>" required>                             </div>
                            <hr>
                            <div class="form-group">
                                <label>Jeudi</label>
                                <input class="form-control" type="text" name="adminConfig3Jeudi" value="<?= $RConfig['configJeudi'] ?>" required>                             </div>
                            <hr>
                            <div class="form-group">
                                <label>Vendredi</label>
                                <input class="form-control" type="text" name="adminConfig3Vendredi" value="<?= $RConfig['configVendredi'] ?>" required>                             </div>
                            <hr>
                            <div class="form-group">
                                <label>Samedi</label>
                                <input class="form-control" type="text" name="adminConfig3Samedi" value="<?= $RConfig['configSamedi'] ?>" required>                             </div>
                            <hr>
                            <div class="form-group">
                                <label>Dimanche</label>
                                <input class="form-control" type="text" name="adminConfig3Dimanche" value="<?= $RConfig['configDimanche'] ?>" required>                             </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminConfig3">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    $htmlTitle = 'Configuration - Horaires | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
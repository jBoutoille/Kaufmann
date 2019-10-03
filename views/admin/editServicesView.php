<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Modifications - Services</h1>
                <h2 class="page-subhead-line">Cette section permet de modifier le contenu du bloc "Services" sur le site</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <?= $adminNotif ?>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        MODIFICATIONS DES SERVICES
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Titre de la section</label>
                                <input class="form-control" type="text" name="adminEditServicesTitre" value="<?= $RServices['servicesTitre'] ?>" required>
                                <p class="help-block">Modifie le titre de la section "Services"</p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Service 1</div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Titre du service</label>
                                                <input class="form-control" type="text" name="adminEditServices1Titre" value="<?= $RServices['services1Titre'] ?>" required>
                                                <p class="help-block">Modifie le titre du service 1</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Description du service</label>
                                                <textarea class="form-control" type="text" rows="3" name="adminEditServices1Description" required><?= $RServices['services1Desc'] ?></textarea>
                                                <p class="help-block">Modifie la description du service 1</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 1</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS1" value="<?= $RServices['services1SS1'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 2</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS2" value="<?= $RServices['services1SS2'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 3</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS3" value="<?= $RServices['services1SS3'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 4</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS4" value="<?= $RServices['services1SS4'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 5</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS5" value="<?= $RServices['services1SS5'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Service 2</div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Titre du service</label>
                                                <input class="form-control" type="text" name="adminEditServices2Titre" value="<?= $RServices['services2Titre'] ?>" required>
                                                <p class="help-block">Modifie le titre du service 2</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Description du service</label>
                                                <textarea class="form-control" type="text" rows="3" name="adminEditServices2Description" required><?= $RServices['services2Desc'] ?></textarea>
                                                <p class="help-block">Modifie la description du service 2</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 1</label>
                                                <input class="form-control" type="text" name="adminEditServices2SS1" value="<?= $RServices['services2SS1'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 2</label>
                                                <input class="form-control" type="text" name="adminEditServices2SS2" value="<?= $RServices['services2SS2'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 3</label>
                                                <input class="form-control" type="text" name="adminEditServices2SS3" value="<?= $RServices['services2SS3'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 4</label>
                                                <input class="form-control" type="text" name="adminEditServices2SS4" value="<?= $RServices['services2SS4'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Service 3</div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Titre du service</label>
                                                <input class="form-control" type="text" name="adminEditServices3Titre" value="<?= $RServices['services3Titre'] ?>" required>
                                                <p class="help-block">Modifie le titre du service 3</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Description du service</label>
                                                <textarea class="form-control" type="text" rows="3" name="adminEditServices3Description" required><?= $RServices['services3Desc'] ?></textarea>
                                                <p class="help-block">Modifie la description du service 3</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 1</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS1" value="<?= $RServices['services3SS1'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 2</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS2" value="<?= $RServices['services3SS2'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 3</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS3" value="<?= $RServices['services3SS3'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 4</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS4" value="<?= $RServices['services3SS4'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 5</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS5" value="<?= $RServices['services3SS5'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminEditServices">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    $htmlTitle = 'Modifications - Services | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
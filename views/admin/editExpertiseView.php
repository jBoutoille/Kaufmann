<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Modifications - Expertise</h1>
                <h2 class="page-subhead-line">Cette section permet de modifier le contenu du bloc "Expertise" sur le site</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <?= $adminNotif ?>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        MODIFICATIONS DE L'EXPERTISE
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Titre de la section</label>
                                <input class="form-control" type="text" name="adminEditExpertiseTitre" value="<?= $RExpertise['expertiseTitre'] ?>" required>
                                <p class="help-block">Modifie le titre de la section "Expertise"</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Texte 1</label>
                                <input class="form-control" type="text" name="adminEditExpertiseTxt1" value="<?= $RExpertise['expertiseTxt1'] ?>" required>
                                <p class="help-block">Modifie le 1er texte de l'expertise</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Texte 2</label>
                                <input class="form-control" type="text" name="adminEditExpertiseTxt2" value="<?= $RExpertise['expertiseTxt2'] ?>" required>
                                <p class="help-block">Modifie le 2ème texte de l'expertise</p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Chiffre 1</label>
                                        <input class="form-control" type="number" name="adminEditExpertiseChiffre1" value="<?= $RExpertise['expertiseChiffre1'] ?>" required>
                                        <p class="help-block">Modifie le 1er chiffre de l'expertise</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>chiffre 2</label>
                                        <input class="form-control" type="number" name="adminEditExpertiseChiffre2" value="<?= $RExpertise['expertiseChiffre2'] ?>" required>
                                        <p class="help-block">Modifie le 2ème chiffre de l'expertise</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Titre du chiffre 1</label>
                                        <input class="form-control" type="text" name="adminEditExpertiseTitreChiffre1" value="<?= $RExpertise['expertiseTitre1'] ?>" required>
                                        <p class="help-block">Modifie le 1er titre du chiffre de l'expertise</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Titre du chiffre 2</label>
                                        <input class="form-control" type="text" name="adminEditExpertiseTitreChiffre2" value="<?= $RExpertise['expertiseTitre2'] ?>" required>
                                        <p class="help-block">Modifie le 2ème titre du chiffre de l'expertise</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminEditExpertise">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    $htmlTitle = 'Modifications - Expertise | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        MODIFICATIONS DES SERVICES
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Titre de la section</label>
                                <input class="form-control" type="text" name="adminEditServicesTitre" value="| Nos services" required>
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
                                                <input class="form-control" type="text" name="adminEditServices1Titre" value="AUDIT" required>
                                                <p class="help-block">Modifie le titre du service 1</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Description du service</label>
                                                <textarea class="form-control" type="text" rows="3" name="adminEditServices1Description" required>Nous intervenons au titre de vos besoins en matière de :</textarea>
                                                <p class="help-block">Modifie la description du service 1</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 1</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS1" value="Commissariat aux comptes" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 2</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS2" value="Audit Contractuel" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 3</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS3" value="Commissariat à la transformation" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 4</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS4" value="Commissariat à la fusion" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 5</label>
                                                <input class="form-control" type="text" name="adminEditServices1SS5" value="Audit d'acquisition" required>
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
                                                <input class="form-control" type="text" name="adminEditServices2Titre" value="EXPERTISE COMPTABLE" required>
                                                <p class="help-block">Modifie le titre du service 2</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Description du service</label>
                                                <textarea class="form-control" type="text" rows="3" name="adminEditServices2Description" required>Nous vous proposons un accompagnement sur mesure en comptabilité, fiscalité, social et juridique :</textarea>
                                                <p class="help-block">Modifie la description du service 2</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 1</label>
                                                <input class="form-control" type="text" name="adminEditServices2SS1" value="Professions libérales (déclaration fiscale annuelles, conseil patrimonial, assistance fiscale, paie...)" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 2</label>
                                                <input class="form-control" type="text" name="adminEditServices2SS2" value="Associations (tenue, accompagnement, révision...)" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 3</label>
                                                <input class="form-control" type="text" name="adminEditServices2SS3"value="Particuliers (impôts sur le revenu, IFI, conseil patrimonial...)" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 4</label>
                                                <input class="form-control" type="text" name="adminEditServices2SS4" value="Entreprises (tenue complète, comptabilité partagée, révision, secrétariat, paie...)" required>
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
                                                <input class="form-control" type="text" name="adminEditServices3Titre" value="CONSEIL ET ACCOMPAGNEMENT" required>
                                                <p class="help-block">Modifie le titre du service 3</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Description du service</label>
                                                <textarea class="form-control" type="text" rows="3" name="adminEditServices3Description" required>texte à définir :</textarea>
                                                <p class="help-block">Modifie la description du service 3</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 1</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS1" value="Création et reprise de sociétés" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 2</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS2" value="Mise en place de tableaux de bords" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 3</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS3" value="Prévisionnels" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 4</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS4" value="Évaluation de sociétés" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Sous service 5</label>
                                                <input class="form-control" type="text" name="adminEditServices3SS5" value="Mise à disposition de logiciels sans engagement à tarifs avantageux" required>
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
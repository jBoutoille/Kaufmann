<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Modifications - Le cabinet</h1>
                <h2 class="page-subhead-line">Cette section permet de modifier le contenu du bloc "Le cabinet" sur le site</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">MODIFICATIONS DE LA PRÉSENTATION DU CABINET</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Titre de la section</label>
                                <input class="form-control" type="text" name="adminEditLecabinetTitre" placeholder="Le cabinet" required>
                                <p class="help-block">Modifie le titre de la section "Le cabinet"</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>1er paragraphe</label>
                                <textarea class="form-control" type="text" rows="4" name="adminEditLecabinet1er" placeholder="On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.'" required></textarea>
                                <p class="help-block">Modifie le 1er paragraphe de la partie "Le cabinet" - Idéalement environ 250 caractères</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>2ème paragraphe</label>
                                <textarea class="form-control" type="text" rows="4" name="adminEditLecabinet2eme" placeholder="On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.'" required></textarea>
                                <p class="help-block">Modifie le 2ème paragraphe de la partie "Le cabinet" - Idéalement environ 250 caractères</p>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminEditLecabinet">Sauvegarder</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    $htmlTitle = 'Modifications > Le cabinet | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
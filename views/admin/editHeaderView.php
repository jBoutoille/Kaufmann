<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Modifications - Haut de page</h1>
                <h2 class="page-subhead-line">Cette section permet de modifier le contenu du bloc "Header (haut de page)" sur le site</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">MODIFICATIONS DU HAUT DE PAGE</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Type de société</label>
                                <input class="form-control" type="text" placeholder="S.A.R.L" required>
                                <p class="help-block">Modifie le type de société visible dans le haut de page</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Titre du site / Nom principal</label>
                                <input class="form-control" type="text" placeholder="G.KAUFMANN" required>
                                <p class="help-block">Modifie le titre principal le plus visible du haut de page</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Sous titres</label>
                                <input class="form-control" type="text" placeholder="Expertise comptable, Audit, Conseil & Accompagement" required>
                                <p class="help-block">Modifie les sous titres visibles sous le titre principal du haut de page</p>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    $htmlTitle = 'Modifications > Header | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
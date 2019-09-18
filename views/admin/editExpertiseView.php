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
                <div class="panel panel-primary">
                    <div class="panel-heading">MODIFICATIONS DE L'EXPERTISE</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Titre de la section</label>
                                <input class="form-control" type="text" placeholder="Notre expertise en quelques chiffres :" required>
                                <p class="help-block">Modifie le titre de la section</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Texte 1</label>
                                <input class="form-control" type="text" placeholder="Pourquoi faire du cabinet G.KAUFMANN votre partenaire ? Présent à Boulogne/Mer, nos compétences multiples ainsi que notre expertise feront de nous un allié de poids." required>
                                <p class="help-block">Modifie le 1er texte de l'expertise</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Texte 2</label>
                                <input class="form-control" type="text" placeholder="Confiez-nous vos retards de comptabilité, la gestion de vos projets, ou toute autres besoins." required>
                                <p class="help-block">Modifie le 2ème texte de l'expertise</p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Chiffre 1</label>
                                        <input class="form-control" type="numer" placeholder="350" required>
                                        <p class="help-block">Modifie le 1er chiffre de l'expertise</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>chiffre 2</label>
                                        <input class="form-control" type="number" placeholder="40" required>
                                        <p class="help-block">Modifie le 2ème chiffre de l'expertise</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Titre du chiffre 1</label>
                                        <input class="form-control" type="text" placeholder="Clients" required>
                                        <p class="help-block">Modifie le 1er titre du chiffre de l'expertise</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Titre du chiffre 2</label>
                                        <input class="form-control" type="text" placeholder="Années d'expertises" required>
                                        <p class="help-block">Modifie le 2ème titre du chiffre de l'expertise</p>
                                    </div>
                                </div>
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
    $htmlTitle = 'Modifications > Expertise | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
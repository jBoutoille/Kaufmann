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
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Titre de la section</label>
                            <input class="form-control" type="text" placeholder="Nos services" required>
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
                                            <input class="form-control" type="text" placeholder="AUDIT" required>
                                            <p class="help-block">Modifie le titre du service 1</p>
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
                                            <input class="form-control" type="text" placeholder="EXPERTISE COMPTABLE" required>
                                            <p class="help-block">Modifie le titre du service 2</p>
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
                                            <input class="form-control" type="text" placeholder="CONSEIL ET ACCOMPAGNEMENT" required>
                                            <p class="help-block">Modifie le titre du service 3</p>
                                        </div>
                                    </div>
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
    $htmlTitle = 'Modifications > Services | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
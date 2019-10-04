<?php ob_start(); ?>

    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Tableau de bord</h1>
                    <h2 class="page-subhead-line">Bienvenue sur le panel Administrateur du site G.Kaufmann !</h2>
                </div>
            </div>

            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-4">
                    <a href="./?page=gk-admin&p1=config-site" class="modulesLinks">
                        <div class="main-box mb-1">
                            <i class="fa fa-desktop fa-5x"></i>
                            <h5>Configuration</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="./?page=gk-admin&p1=edit-header" class="modulesLinks">
                        <div class="main-box mb-2">
                            <i class="fa fa-code fa-5x"></i>
                            <h5>Modifications</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="./?page=gk-admin&p1=newsletter" class="modulesLinks">
                        <div class="main-box mb-3">
                            <i class="fa fa-envelope fa-5x"></i>
                            <h5>Newsletter</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="./?page=gk-admin&p1=actualite" class="modulesLinks">
                        <div class="main-box mb-4">
                            <i class="fa fa-bullhorn fa-5x"></i>
                            <h5>Actualité</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="./?page=gk-admin&p1=candidatures" class="modulesLinks">
                        <div class="main-box mb-5">
                            <i class="fa fa-briefcase fa-5x"></i>
                            <h5>Candidatures</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="./?action=logout" class="modulesLinks">
                        <div class="main-box mb-6">
                            <i class="fa fa-power-off fa-5x"></i>
                            <h5>Déconnection</h5>
                        </div>
                    </a>
                </div>

            </div>
            <!-- /. ROW  -->   
        </div>
        <!-- /. PAGE INNER  -->
    </div>

<?php
    $htmlTitle = 'Tableau de bord | Admin | ' . $RConfig['configNomSite'];
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
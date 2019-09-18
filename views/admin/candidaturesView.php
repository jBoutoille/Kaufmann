<?php ob_start(); ?>

<script>
    function multiOpen(cv,lm){
        window.open(cv);
        window.open(lm);
    }
</script>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Candidatures reçues</h1>
                <h2 class="page-subhead-line">Cette section permet de voir, télécharger, répondre ou supprimer les candidatures spontannées</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Liste des candidatures reçues
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <p><strong>Il n'y a aucune candidature à afficher</strong></p>
                            <table class="table table-striped table-bordered table-hover adminTableTitles">
                                <thead>
                                    <tr>
                                        <th>Prénom Nom</th>
                                        <th>Poste recherché</th>
                                        <th>Adresse mail</th>
                                        <th>Téléphone</th>
                                        <th>Date d'envoi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="trCandid">Mark Otto</td>
                                        <td class="trCandid">Expert comptable</td>
                                        <td class="trCandid">democandidatures0@gmail.com</td>
                                        <td class="trCandid">06.06.06.06.06</td>
                                        <td class="trCandid">17/09/2019 à 11h49</td>
                                        <td>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Actions <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a onclick='multiOpen("","")'><i class="fa fa-search"></i> Aperçu</a></li>
                                                    <li><a onclick=''><i class="fa fa-download"></i> Télécharger</a></li>
                                                    <li><a href=""><i class="fa fa-envelope"></i> Répondre</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href=""><i class="fa fa-trash-o"></i> Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
    $htmlTitle = 'Candidatures reçues | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
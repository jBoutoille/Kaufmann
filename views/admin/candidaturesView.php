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
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark Otto</td>
                                        <td>Expert comptable</td>
                                        <td>democandidatures0@gmail.com</td>
                                        <td>06.06.06.06.06</td>
                                        <td>17/09/2019 à 11h49</td>
                                        <td style="letter-spacing:1vh;">
                                            <a href="javascript:multiOpen('./toto.php','tata.php')"><i class="fa fa-search" title="Voir les fichiers"></i></a>
                                            <a href=""><i class="fa fa-download" title="Télécharger les fichiers"></i></a>
                                            <a href=""><i class="fa fa-envelope" title="Répondre à la candidature"></i></a>
                                            <a href=""><i class="fa fa-trash-o" title="Supprimer la candidature"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gilles Kaufmann</td>
                                        <td>Expert comptable</td>
                                        <td>gkaumann@hotmail.fr</td>
                                        <td>07.70.07.70.07</td>
                                        <td>16/09/2019 à 14h37</td>
                                        <td style="letter-spacing:1vh;">
                                            <a href="#"><i class="fa fa-search" title="Voir les fichiers"></i></a>
                                            <a href="#"><i class="fa fa-download" title="Télécharger les fichiers"></i></a>
                                            <a href="#"><i class="fa fa-envelope" title="Répondre à la candidature"></i></a>
                                            <a href="#"><i class="fa fa-trash-o" title="Supprimer la candidature"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manuel Ligny</td>
                                        <td>Développeur Web</td>
                                        <td>simplonboulogne@gmail.com</td>
                                        <td>03.21.00.00.00</td>
                                        <td>17/09/2019 à 09h19</td>
                                        <td style="letter-spacing:1vh;">
                                            <a href="#"><i class="fa fa-search" title="Voir les fichiers"></i></a>
                                            <a href="#"><i class="fa fa-download" title="Télécharger les fichiers"></i></a>
                                            <a href="#"><i class="fa fa-envelope" title="Répondre à la candidature"></i></a>
                                            <a href="#"><i class="fa fa-trash-o" title="Supprimer la candidature"></i></a>
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
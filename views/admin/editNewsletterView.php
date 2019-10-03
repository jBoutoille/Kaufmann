<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Modifications - Newsletter</h1>
                <h2 class="page-subhead-line">Cette section permet de modifier le contenu du bloc "Newsletter" sur le site</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <?= $adminNotif ?>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        MODIFICATIONS DU BLOC NEWSLETTER
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Titre de la section</label>
                                <input class="form-control" type="text" name="adminEditNewsletterTitre" value="<?= $RNewsletter['newsletterTitre'] ?>" required>
                                <p class="help-block">Modifie le titre de la section "Newsletter"</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Texte dans le formulaire</label>
                                <input class="form-control" type="text" name="adminEditNewsletterTxtForm" value="<?= $RNewsletter['newsletterTxtForm'] ?>" required>
                                <p class="help-block">Modifie le texte dans le formulaire du bloc Newsletter</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Texte du bouton</label>
                                <input class="form-control" type="text" name="adminEditNewsletterTxtBtn" value="<?= $RNewsletter['newsletterTxtBtn'] ?>" required>
                                <p class="help-block">Modifie le texte du bouton pour s'abonner à la Newsletter</p>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminEditNewsletter">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    $htmlTitle = 'Modifications - Newsletter | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
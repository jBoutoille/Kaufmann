<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Candidatures reçues</h1>
                <h2 class="page-subhead-line">Ceci représente la page des candidatures reçues</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis molestiae sint debitis molestias tempora illum vero laborum veritatis. Ducimus aut necessitatibus in quibusdam similique vel quasi ab at sapiente, maxime iusto, nobis neque eum vitae tempore quidem saepe natus quis.
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
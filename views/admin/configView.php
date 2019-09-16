<?php ob_start(); ?>

    

<?php
    $htmlTitle = 'Configuration du site | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
<?php ob_start(); ?>

<?php require './views/inc/sections/dashboard.php' ?>

<?php
    $htmlTitle = 'Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/template.php';
?>
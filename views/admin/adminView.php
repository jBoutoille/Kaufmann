<?php ob_start(); ?>

<?php require './views/admin/sections/dashboard.php' ?>

<?php
    $htmlTitle = 'Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>
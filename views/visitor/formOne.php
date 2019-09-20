<?php ob_start(); ?>

<?php 
    require './views/visitor/inc/nav.php'; 
?>

<h1>Demandez un rdv</h1>

<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Rendez-vous | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>


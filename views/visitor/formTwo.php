<?php ob_start(); ?>

<?php 
    require './views/visitor/inc/nav.php'; 
?>

<h1>Envoyer un C.V</h1>

<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Candidature | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>
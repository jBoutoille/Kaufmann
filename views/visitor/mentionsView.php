<?php ob_start(); ?>
<?php 
    require './views/visitor/inc/nav.php'; 
?>



<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Demander un rendez-vous | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>


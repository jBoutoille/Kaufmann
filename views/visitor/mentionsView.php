<?php ob_start(); ?>
<?php 
    require './views/visitor/inc/nav.php'; 
?>



<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Mentions légales | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>


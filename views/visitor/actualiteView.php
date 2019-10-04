<?php ob_start(); ?>

	<?php require './views/visitor/inc/nav.php'; ?>


    <!-- HTML DE LA PAGE ACTUALITE -->
    <h1 style="text-align: center; padding: 20.5vh 10vh;">Service indisponible pour le moment</h1>

<?php
    $htmlTitle = 'Actualité | ' . $RConfig['configNomSite'];
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>
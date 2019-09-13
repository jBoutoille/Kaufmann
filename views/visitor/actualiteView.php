<?php ob_start(); ?>


    <!-- HTML DE LA PAGE ACTUALITE -->
    <p> test actu </p>

<?php
    $htmlTitle = 'Actualité | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>
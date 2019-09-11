<?php ob_start(); ?>


    <!-- HTML DE LA PAGE INDEX -->
    <p> test index </p>


<?php
    $htmlTitle = 'Accueil | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/template.php';
?>
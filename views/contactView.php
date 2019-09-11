<?php ob_start(); ?>


    <!-- HTML DE LA PAGE CONTACT -->
    <p> test contact </p>

<?php
    $htmlTitle = 'Nous contacter | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/template.php';
?>
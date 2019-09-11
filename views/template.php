<!DOCTYPE html>
<html lang="fr">

    <?php 
        require './views/inc/head.php';
    ?>

    <body>
    
        <?php

            echo $htmlContent;

            // on inclut le footer
            require './views/inc/footer.php';
            //on inclut les scripts JS
            require './views/inc/scripts.php';

        ?>
    
    </body>

</html>
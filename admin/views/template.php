<!DOCTYPE html>
<html lang="fr">

    <?php 
        require './views/inc/head.php';
    ?>

    <body>
    
        <?php

            // on inclut le header et la nav
            require './views/inc/header.php';
            require './views/inc/navbar.php';

            echo $htmlContent;

            // on inclut le footer et les scripts
            require './views/inc/footer.php';
            require './views/inc/scripts.php';

        ?>
    
    </body>

</html>
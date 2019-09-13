<!DOCTYPE html>
<html lang="fr">

    <?php 
        require './views/admin/inc/head.php';
    ?>

    <body>
    
        <?php

            // on inclut le header et la nav
            require './views/admin/inc/header.php';
            require './views/admin/inc/navbar.php';

            echo $htmlContent;

            // on inclut le footer et les scripts
            require './views/admin/inc/footer.php';
            require './views/admin/inc/scripts.php';

        ?>
    
    </body>

</html>
<!DOCTYPE html>
<html lang="fr">

    <?php 
        require './views/visitor/inc/head.php';
    ?>

    <body>

        <div class="se-pre-con"></div>
        <?php

            echo $htmlContent;

            // on inclut le footer
            require './views/visitor/inc/footer.php';
            //on inclut les scripts JS
            require './views/visitor/inc/scripts.php';

        ?>
    
    </body>

</html>
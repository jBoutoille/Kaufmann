<?php ob_start(); ?>


    <!-- HTML DE LA PAGE INDEX -->

    <div class="barOne"></div>
    <div class="barTwo"></div>
    <h1 id="sarl"> S.A.R.L 
    	<br id="kaufmann"> G.KAUFMANN 
    	<br id="text1"> Expertise comptable - Audit 
    	<br id="text2"> Conseil & Accompagement
    </h1>



<?php
    $htmlTitle = 'Accueil | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/template.php';
?>
<?php 

    session_start();   

    require 'controllers/control.php';

    try
    {
        // si j'ai pas de get j'affiche l'index
        if(empty($_GET)){
            getIndex();
        }
        // si j'ai le get page ET qu'il vaut 'contact' j'affiche la page contact
        elseif(isset($_GET['page']) && $_GET['page'] == 'contact'){
            getContact();
        }
        // si j'ai le get page ET qu'il vaut 'actualite' j'affiche la page actualite
        elseif(isset($_GET['page']) && $_GET['page'] == 'actualite'){
            getActualite();
        }
        else{
            // erreur 404
            getIndex();
        }
    }
    catch(Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }

?>
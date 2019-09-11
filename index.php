<?php 

    session_start();   

    require 'controllers/control.php';

    try
    {
        // si j'ai pas de get j'affiche l'index
        if(empty($_GET)){
            getIndex();
        }
        // si j'ai le get contact j'affiche la page contact
        elseif(isset($_GET['contact'])){
            getContact();
        }
        // si j'ai le get actualite j'affiche la page actualite
        elseif(isset($_GET['actualite'])){
            getActualite();
        }
        else{
            // erreur 404
            getError(404);
        }
    }
    catch(Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }

?>
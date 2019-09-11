<?php 

    session_start();

    require 'ctrl/control.php';

    try
    {
        // si j'ai pas de get j'affiche l'index
        if(empty($_GET)){
            getAdmin();
        }

        else{
            // erreur 404
            getAdmin();
        }
    }
    catch(Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }

?>
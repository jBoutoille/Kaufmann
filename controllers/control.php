<?php 

    function getIndex(){
        require './views/indexView.php';
    }

    function getContact(){
        require './views/contactView.php';
    }

    function getActualite(){
        require './views/actualiteView.php';
    }

    function getError($err){
        $error = $err;
    }
?>
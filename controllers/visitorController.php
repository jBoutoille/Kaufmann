<?php 

    require './models/visitorManager.php';

    function getIndex(){
        require './views/indexView.php';
    }

    function getContact(){
        require './views/contactView.php';
    }

    function getActualite(){
        require './views/actualiteView.php';
    }

    function get404(){
        require './views/others/404View.php';
    }

?>
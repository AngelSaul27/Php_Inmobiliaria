<?php

    class Logout extends Controller{

        function __construct(){
            parent::__construct();

            if($_SESSION){
                session_unset();
                session_destroy();
                header('Location:/');
                return false;
            }
        }

    }

?>
<?php
    class View{


        function __construct()
        {

        }

        function render($view_name)
        {
            $file = '../src/'.$view_name.'.php';
            if(file_exists($file)){
                require $file;
                return;
            }
            print_r("Error: Vista $view_name not found in view directory.");
        }

    }
?>
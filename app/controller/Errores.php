<?php

    class Errores extends Controller{

        function __construct(){
            parent::__construct();
        }
        
        public function render()
        {
            $this->view->render('404');
        }
    }
?>
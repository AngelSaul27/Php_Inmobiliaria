<?php

    class Home extends Controller{

        function __construct(){
            parent::__construct();
        }

        function list_properties(){
            $Object = $this->loadModel('HomeModel');
            $this->view->items = $Object->getPropertyList();
        }

        
        public function render()
        {
            self::list_properties();
            $this->view->render('home');
        }
    }

?>
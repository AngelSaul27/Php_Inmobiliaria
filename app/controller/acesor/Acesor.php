<?php

    class Acesor extends Controller{

        protected $model;

        function __construct(){
            parent::__construct();

            if($_SESSION['logged'] === 0 || $_SESSION['role'] !== 'acesor'){
                header('location: /');
            }
        }

        public function profile()
        {
            $this->view->render('Acesor');
            die();
        }

        public function propiedades()
        {
            $this->model = $this->loadModel('Acesor/AcesorModel');
            $this->view->items = $this->model->getListPropiedades();
            $this->view->render('AcesorPropiedades');
            die();
        }

        public function preguntas()
        {
            $this->view->render('AcesorPreguntas');
            die();
        }

        public function citas()
        {
            $this->model = $this->loadModel('Acesor/AcesorModel');
            $this->view->items = $this->model->getListCitas();
            $this->view->render('AcesorCitas');
            die();
        }

    }

?>
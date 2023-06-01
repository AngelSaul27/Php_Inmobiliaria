<?php

    class ClienteCitas extends Controller
    {

        protected $model;

        function __construct()
        {
            parent::__construct();

            if ($_SESSION['logged'] === 0 || $_SESSION['role'] !== 'cliente') {
                header('location: /');
            }
        }

        public function render()
        {
            $model = $this->loadModel('citas/citasmodel');
            $this->view->items = $model->getCitasItems();
            $this->view->render('ClienteCitas');
        }
    }

?>

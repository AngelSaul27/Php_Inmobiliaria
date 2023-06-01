<?php

    class Admin extends Controller{

        protected $model;

        function __construct(){
            parent::__construct();

            if($_SESSION['logged'] === 0 || $_SESSION['role'] !== 'admin'){
                header('location: /');
            }
        }

        public function Profile()
        {
            $this->view->render('Admin');
            die();
        }

        public function ListCitas(){
            $this->model = $this->loadModel('admin/AdminModel');
            $this->view->items = $this->model->getListCitas();

            $this->view->render('AdminListCitas');
            die();
        }

        public function DeletedCitas(){
            $this->model = $this->loadModel('admin/AdminModel');
            $this->view->items = $this->model->deleteCitas();

            $LOC = $_POST['cit_loc'];

            if($LOC === '/'){
                header("Location: http://localhost/");
            }else{
                header("Location: http://localhost/$LOC");
            }

            die();
        }

        public function ListClientes(){
            $this->model = $this->loadModel('admin/AdminModel');
            $this->view->items = $this->model->getListClientes();
            $this->view->render('AdminClientes');
            die();
        }

        public function ListAcesores(){
            $this->model = $this->loadModel('admin/AdminModel');
            $this->view->items = $this->model->getListAcesores();
            $this->view->render('AdminAcesores');
            die();
        }

        public function ListPropiedades(){
            $this->model = $this->loadModel('admin/AdminModel');
            $this->view->items = $this->model->getListPropiedades();
            $this->view->render('AdminListPropiedades');
            die();
        }

        public function DeletedUsuarios(){
            $this->model = $this->loadModel('admin/AdminModel');
            $this->view->items = $this->model->deleteUsuarios();
            $LOC = $_POST['use_loc'];

            if($LOC === '/'){
                header("Location: http://localhost/");
            }else{
                header("Location: http://localhost/$LOC");
            }

            die();
        }

        public function DeletedPropiedades(){
            $this->model = $this->loadModel('admin/AdminModel');
            $this->view->items = $this->model->deletePropiedad();
            $LOC = $_POST['pro_loc'];

            if($LOC === '/'){
                header("Location: http://localhost/");
            }else{
                header("Location: http://localhost/$LOC");
            }

            die();
        }
    }

?>
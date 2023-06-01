<?php

    class Propiedad extends Controller
    {

        function __construct()
        {
            parent::__construct();

        }

        function view($param){

            if(!is_numeric($_GET['id'])){
                $_SESSION['MENSSAGE'] = "ERROR: Invalid parameter passed to URL.";
                Header('Location: http://localhost/Error');
                die();
            }

            if($param === ''){
                $_SESSION['MENSSAGE'] = "ERROR: Invalid parameter passed to URL.";
                Header('Location: http://localhost/Error');
                die();
            }

            $model = $this->loadModel('properties/propertiesmodel');
            $this->view->data = $model->getDataProperty($param);

            $this->view->render('PropiedadesVista');
        }

        function edit($param){
            if(!is_numeric($_GET['id'])){
                $_SESSION['MENSSAGE'] = "ERROR: Invalid parameter passed to URL.";
                Header('Location: http://localhost/Error');
                die();
            }

            if($param === ''){
                $_SESSION['MENSSAGE'] = "ERROR: Invalid parameter passed to URL.";
                Header('Location: http://localhost/Error');
                die();
            }

            $model = $this->loadModel('properties/propertiesmodel');
            $this->view->data = $model->getDataEditPropiedad($param);
            $this->view->render('PropiedadesEdit');
        }

        function Update(){
            $model = $this->loadModel('properties/propertiesmodel');
            $model->updatePropiedad();

            $LOC = $_POST['pro_loc'];

            if($LOC === '/'){
                header("Location: http://localhost/");
            }else{
                header("Location: http://localhost/$LOC");
            }

            die();
        }

        function viewCreate(){
            $this->view->render('PropiedadesCreate');
            die();
        }

        function Create(){
            $model = $this->loadModel('properties/propertiesmodel');
            $model->createPropiedad();

            header("Location: http://localhost/propiedad/create");
            die();
        }
    }

?>

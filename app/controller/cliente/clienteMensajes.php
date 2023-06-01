<?php

    class ClienteMensajes extends Controller{

        protected $model;

        function __construct(){
            parent::__construct();

            if($_SESSION['logged'] === 0 || $_SESSION['role'] !== 'cliente'){
                header('location: /');
            }

        }

        public function deletedMensaje(){
            $model = $this->loadModel('MensajesModel');
            $model->queryDeletedMensaje();

            $LOC = $_POST['que_loc'];
            
            if($LOC === '/'){
                header("Location: http://localhost/");
            }else{
                header("Location: http://localhost/$LOC");
            }

            die();
        }
    
        public function render()
        {
            $model = $this->loadModel('MensajesModel');
            $this->view->data = $model->getDataMensajes();
            $this->view->render('ClienteMensajes');
        }
    }

?>
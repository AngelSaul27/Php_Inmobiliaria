<?php

    class FilterPropiedades extends Controller
    {

        function __construct()
        {
            parent::__construct();

        }

        function view(){
            if(!($_GET['type'])){
                $_SESSION['MENSSAGE'] = "ERROR: Invalid parameter passed to URL.";
                Header('Location: http://localhost/Error');
                die();
            }

            $model = $this->loadModel('FilterPropiedadesModel');
            $this->view->items = $model->getFilterProperties();
        
            $this->view->render('Propiedades');

            die();
        }
    }
?>
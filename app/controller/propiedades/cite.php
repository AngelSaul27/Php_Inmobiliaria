<?php

    class Cite extends Controller
    {

        function __construct()
        {
            parent::__construct();

        }

        function createCiteProperties(){
            $Object = $this->loadModel('Citas/CitasModel');
            $Object->addCiteProperties();
            $LOC = $_POST['cit_loc'];
            
            if($LOC === '/'){
                header("Location: http://localhost/");
            }else{
                header("Location: http://localhost/$LOC");
            }

            die();
        }

        function deletedCiteProperties(){
            $Object = $this->loadModel('Citas/CitasModel');
            $Object->deletedCiteProperties();
            $LOC = $_POST['cit_loc'];

            if($LOC === '/'){
                header("Location: http://localhost/");
            }else{
                header("Location: http://localhost/$LOC");
            }

            die();
        }
        
    }

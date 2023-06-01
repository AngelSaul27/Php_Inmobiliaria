<?php
    class Controller{

        function __construct()
        {
            session_start();
            $this->view = new View();
        }

        function loadModel($model){
            $URL = '../app/model/'.$model.'.php';
            $strpos = strpos($model,'/');
            if($strpos !== false){
                $model = substr($model, strrpos($model,'/')+1, strlen($model));
            }
            $modelName = $model;
            //Comprobamos que los archivos models existan
            if(file_exists($URL)){
                require $URL;
                
                return $this->model = new $modelName(); //Llamamos al modelo
            }
        }

    }
?>
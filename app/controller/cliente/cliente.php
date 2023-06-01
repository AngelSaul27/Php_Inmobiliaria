<?php

    class Cliente extends Controller{

        protected $model;

        function __construct(){
            parent::__construct();

            if($_SESSION['logged'] === 0 || $_SESSION['role'] !== 'cliente'){
                header('location: /');
            }

            $this->model = $this->loadModel('cliente/profile');
            $this->view->favorite = $this->model->getClienteProfile();
        }

        function updateProfile(){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $validate = new Validation();
            $resultEmail = $validate->emailValidator($email);
            $resultName = $validate->fieldValidator($name);
            $resultPhone = $validate->fieldValidator($phone);
            $resultPhoneNumber = $validate->validateNumber($phone);
            
            if(!$resultEmail){
                $_SESSION['MENSSAGE'] = "ERROR ESTRUCTURA DE CORREO INCORRECTA";
                return false;
            }

            if(!$resultName){
                $_SESSION['MENSSAGE'] = "ERROR CAMPO NOMBRE VACIO";
                return false;
            }

            if(!$resultPhone && !$resultPhoneNumber){
                $_SESSION['MENSSAGE'] = "ERROR ESTRUCTURA DE NOMBRE INCORRECTA";
                return false;
            }

            $this->model->updateClienteProfile();

            header('Location: http://localhost/cliente');
        }

        function deletedFavoriteProfile(){
            $fav_id = $_POST['fav_id'];

            if (!ctype_digit($fav_id)) {
                $_SESSION['MENSSAGE'] = "ERROR ESTRUCTURA DE NOMBRE INCORRECTA";
                return false;
            }

            $this->model->removeFavoriteProperties($fav_id);

            header('Location: http://localhost/cliente');
        }
        
        public function render()
        {
            $this->view->render('cliente');
        }
    }

?>
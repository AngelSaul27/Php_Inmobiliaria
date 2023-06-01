<?php

    class Register extends Controller
    {

        function __construct()
        {
            parent::__construct();
        }

        public function validation()
        {
            $nombre = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $validate = new Validation();
            $resultEmail = $validate->emailValidator($email);
            $resultPass = $validate->fieldValidator($password);
            $resultNombre = $validate->fieldValidator($nombre);

            if ($resultEmail && $resultPass && $resultNombre) {
                $model = $this->loadModel('auth/authenticar');
                $model->register_user();
            }else{
                $_SESSION['MENSSAGE'] = "REGISTRO FALLIDO";
            }

            header('Location: http://localhost/');
            die();
        }
    }

?>
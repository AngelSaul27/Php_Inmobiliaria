<?php

class Login extends Controller{

        function __construct(){
            parent::__construct();
        }
        
        public function validation(){
            $password = $_POST['password'];
            $email = $_POST['email']; 

            $validate = new Validation();
            $resultEmail = $validate->emailValidator($email);
            $resultPass = $validate->fieldValidator($password);

            if($resultEmail && $resultPass){
                $model = $this->loadModel('auth/authenticar');
                $model->login_users();

                if($_SESSION['logged'] === 1){
                    
                    switch($_SESSION['role']){
                        case 'acesor':
                            header('Location: http://localhost/acesor');
                        break;
                        case 'admin': 
                            header('Location: http://localhost/admin');
                            break;
                        case 'cliente':
                            header('Location: http://localhost/cliente');
                            break;
                    }
                    die();
                }
            }

            header('Location: http://localhost/');
        }
    }

?>
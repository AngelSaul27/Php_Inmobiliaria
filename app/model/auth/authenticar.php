<?php 
    class Authenticar extends Model {

        function __construct()
        {
            parent::__construct();
        }

        function login_users(){
            $password = $_POST['password'];
            $email = $_POST['email'];

            try {
                $items = [];
                $consult = Query::queryLogin($email, $password);
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                while ($row = $query->fetch()) {
                    array_push($items, $row['use_id']);
                    array_push($items, $row['use_name']);
                    array_push($items, $row['use_email']);
                    array_push($items, $row['use_date']);
                    array_push($items, $row['use_phone']);
                    array_push($items, $row['use_role']);
                }

                print_r($items);

                if(!empty($items)){
                    $_SESSION['logged'] = 1;
                    $_SESSION['role'] = $items[5];
                    $_SESSION['use_data'] = $items;
                }else{
                    $_SESSION['MENSSAGE'] = "CREDENTIALS INCORRECT";
                }
                
            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "ERROR AL INICIAR SESIÓN";
                return false;
            }
        }

        function register_user(){
            $nombre = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            try {
                $consult = Query::queryRegisterUser($nombre, $email, $password);
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                if ($query) {
                    $_SESSION['MENSSAGE_SUCCESS'] = "REGISTRO EXITOSO, AHORA PUEDE INICIAR SESION";
                } else {
                    $_SESSION['MENSSAGE'] = "REGISTRO FALLIDO";
                }

            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "ESTA CUENTA YA ESTA CUENTA REGISTRADA";
            }
        }

    }



?>
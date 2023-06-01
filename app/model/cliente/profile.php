<?php

    class Profile extends Model{

        function __construct(){
            parent::__construct();
        }

        function updateClienteProfile(){
            try{
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $consult = Query::queryUpdateDataCliente($name, $email, $phone);
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                if ($query) {
                    ($_SESSION['use_data'])[1] = $name;
                    ($_SESSION['use_data'])[2] = $email;
                    ($_SESSION['use_data'])[4] = $phone;

                    $_SESSION['MENSSAGE_SUCCESS'] = "DATOS ACTUALIZADOS EXITOSAMENTE";
                } else {
                    $_SESSION['MENSSAGE'] = "ERROR AL ACTUALIZAR LOS DATOS";
                }

            }catch(Exception $e){
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }

        function getClienteProfile(){
            try {
                $consult = Query::queryGetPropertierFavorites();
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                $favorite = [];
                $favorieAux = [];
                
                while ($row = $query->fetch()) {
                    array_push($favorieAux, $row['fav_id']);
                    array_push($favorieAux, $row['pro_title']);
                    array_push($favorieAux, $row['pro_type']);
                    array_push($favorieAux, $row['pro_price']);
                    array_push($favorieAux, $row['pro_address']);
                    array_push($favorieAux, $row['fav_date']);
                    array_push($favorite, $favorieAux);
                    $favorieAux = [];
                }

                return $favorite;

            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "ERROR AL OBTENER SUS DATOS, RECARGE LA PAGINA";
                return false;
            }

        }

        function removeFavoriteProperties($id){
            try{
                $consult = Query::queryRemovePropertierFavorites($id);
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                if ($query) {
                    $_SESSION['MENSSAGE_SUCCESS'] = "SE REMOVIO EXITOSAMENTE";
                } else {
                    $_SESSION['MENSSAGE'] = "ERROR AL REMOVER LA PROPIEDAD";
                }

            }catch(Exception $e){
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }
    }

?>
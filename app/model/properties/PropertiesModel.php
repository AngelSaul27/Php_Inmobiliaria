<?php 
    class PropertiesModel extends Model {

        function __construct()
        {
            parent::__construct();
        }

        function getDataProperty($id)
        {
            try{
                $consult = Query::queryGetPropertieByID($id);
                $query = $this->db->connect()->prepare($consult);
                $query->execute();
                $items = [];
                while ($row = $query->fetch()) {
                    array_push($items, $row['pro_id']);
                    array_push($items, $row['pro_title']);
                    array_push($items, $row['pro_description']);
                    array_push($items, $row['pro_type']);
                    array_push($items, $row['pro_price']);
                    array_push($items, $row['pro_rooms']);
                    array_push($items, $row['pro_bathrooms']);
                    array_push($items, $row['pro_address']);
                    array_push($items, $row['pro_pais']);
                    array_push($items, $row['pro_ciudad']);
                    array_push($items, $row['pro_cover']);
                    array_push($items, $row['pro_date_publication']);
                    array_push($items, $row['pro_broker']);
                    if(isset($_SESSION['use_data'])){
                        array_push($items, $row['isAdded']);
                    }
                }

                if (!$items) {
                    $_SESSION['MENSSAGE'] = "ERROR NO SE ENCONTRO DICHA PUBLICACIÓN";
                    Header('Location: http://localhost/Error');
                    die();
                }

                return $items;
            }catch(Exception $e){
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }

        function getDataEditPropiedad($id)
        {
            try{
                $consult = Query::queryGetPropertieByID($id);
                $query = $this->db->connect()->prepare($consult);
                $query->execute();
                $items = [];

                while ($row = $query->fetch()) {
                    array_push($items, $row['pro_id']);
                    array_push($items, $row['pro_title']);
                    array_push($items, $row['pro_description']);
                    array_push($items, $row['pro_type']);
                    array_push($items, $row['pro_price']);
                    array_push($items, $row['pro_rooms']);
                    array_push($items, $row['pro_bathrooms']);
                    array_push($items, $row['pro_address']);
                    array_push($items, $row['pro_pais']);
                    array_push($items, $row['pro_ciudad']);
                    array_push($items, $row['pro_cover']);
                    array_push($items, $row['pro_date_publication']);
                    array_push($items, $row['pro_broker']);
                }

                if (!$items) {
                    $_SESSION['MENSSAGE'] = "ERROR NO SE ENCONTRO DICHA PUBLICACIÓN";
                    Header('Location: http://localhost/Error');
                    die();
                }

                if($items[12] !== ($_SESSION['use_data'])[0]){
                    if($_SESSION['role'] !== 'acesor' && $_SESSION['role'] !== 'admin'){
                        $_SESSION['MENSSAGE'] = "ERROR NO SE ENCONTRO DICHA PUBLICACIÓN";
                        Header('Location: http://localhost/Error');
                        die();
                    }
                }

                return $items;
            }catch(Exception $e){
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }

        function updatePropiedad()
        {
            try{
                $consult = Query::queryUpdatePropiedades();
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                if ($query) {
                    $_SESSION['MENSSAGE_SUCCESS'] = "DATOS ACTUALIZADOS EXITOSAMENTE";
                } else {
                    $_SESSION['MENSSAGE'] = "ERROR AL ACTUALIZAR LOS DATOS";
                }

            }catch(Exception $e){
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }

        function createPropiedad(){
            try {
                $consult = Query::queryCreatePropiedades();
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                if ($query) {
                    $_SESSION['MENSSAGE_SUCCESS'] = "PROPIEDAD CREADA CORRECTAMENTE";
                } else {
                    $_SESSION['MENSSAGE'] = "CREACIÓN FALLIDA";
                }

            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "NO SE PUDO PROCESAR LA CONSULTA";
            }
        }
    }
?>
<?php 

    class CitasModel extends Model{

        function __construct()
        {
            parent::__construct();
        }

        function getCitasItems(){
            try {
                $items = [];
                $itemsAux = [];

                $consult = Query::queryGetListCiteProperties();
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

               while ($row = $query->fetch()) {
                    array_push($itemsAux, $row['cit_id']);
                    array_push($itemsAux, $row['cit_day']);
                    array_push($itemsAux, $row['cit_time']);
                    array_push($itemsAux, $row['pro_title']);
                    array_push($itemsAux, $row['pro_description']);
                    array_push($itemsAux, $row['pro_type']);
                    array_push($itemsAux, $row['pro_price']);
                    array_push($itemsAux, $row['pro_address']);
                    array_push($itemsAux, $row['pro_pais']);
                    array_push($itemsAux, $row['pro_ciudad']);
                    array_push($itemsAux, $row['pro_date_publication']);
                    array_push($itemsAux, $row['pro_broker']);
                    array_push($itemsAux, $row['use_name']);
                    array_push($items, $itemsAux);
                    $itemsAux = [];
                }

                return $items;
            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }

        function addCiteProperties(){
            try {
                $consult = Query::queryAddCiteProperties();
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                if ($query) {
                    $_SESSION['MENSSAGE_SUCCESS'] = "CITA CREADA EXITOSAMENTE Y EN REVISIÓN.";
                } else {
                    $_SESSION['MENSSAGE'] = "ERROR NO SE PUDO CREAR ESTA CITA";
                }
                
            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }

        function deletedCiteProperties(){
            try {
                $consult = Query::queryDeletedCiteProperties();
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                if ($query) {
                    $_SESSION['MENSSAGE_SUCCESS'] = "CITA ELIMINADA EXITOSAMENTE.";
                } else {
                    $_SESSION['MENSSAGE'] = "ERROR NO SE PUDO ELIMINAR ESTA CITA";
                }
                
            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }
    }

?>
<?php 
    class MensajesModel extends Model {

        function __construct()
        {
            parent::__construct();
        }

        function getDataMensajes()
        {
            try{
                $consult = Query::queryGetMessage();
                $query = $this->db->connect()->prepare($consult);
                $query->execute();
                $items = [];
                $itemsAux = [];

                while ($row = $query->fetch()) {
                    array_push($itemsAux, $row['que_id']);
                    array_push($itemsAux, $row['que_message']);
                    array_push($itemsAux, $row['use_name']);
                    array_push($itemsAux, $row['rep_answer']);
                    array_push($itemsAux, $row['que_date']);
                    array_push($items, $itemsAux);
                    $itemsAux = [];
                }

                return $items;
            }catch(Exception $e){
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }

        function queryDeletedMensaje(){
            try {
                $consult = Query::queryDeletedMessage();
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                if ($query) {
                    $_SESSION['MENSSAGE_SUCCESS'] = "MENSAJE ENVIADO EXITOSAMENTE";
                } else {
                    $_SESSION['MENSSAGE'] = "ERROR NO SE PUDO ENVIAR SU MENSAJE";
                }

            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }
    }
?>
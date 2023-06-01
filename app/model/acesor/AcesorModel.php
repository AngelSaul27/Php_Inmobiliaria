
<?php

class AcesorModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getListCitas()
    {
        try {
            $consult = Query::queryGetCitasAcesor();
            $query = $this->db->connect()->prepare($consult);
            $query->execute();

            $citas = [];
            $citasAux = [];

            while ($row = $query->fetch()) {
                array_push($citasAux, $row['cit_id']);
                array_push($citasAux, $row['cit_day']);
                array_push($citasAux, $row['cit_time']);
                array_push($citasAux, $row['cit_acesor_name']);
                array_push($citasAux, $row['cit_cliente_name']);
                array_push($citasAux, $row['pro_id']);
                array_push($citasAux, $row['pro_title']);
                array_push($citasAux, $row['pro_description']);
                array_push($citasAux, $row['pro_type']);
                array_push($citasAux, $row['pro_price']);
                array_push($citasAux, $row['pro_rooms']);
                array_push($citasAux, $row['pro_bathrooms']);
                array_push($citasAux, $row['pro_address']);
                array_push($citasAux, $row['pro_pais']);
                array_push($citasAux, $row['pro_ciudad']);
                array_push($citasAux, $row['pro_cover']);
                array_push($citasAux, $row['pro_date_publication']);
                array_push($citasAux, $row['pro_broker']);
                array_push($citasAux, $row['cit_fk_user']);
                array_push($citas, $citasAux);
                $citasAux = [];
            }

            return $citas;
        } catch (Exception $e) {
            $_SESSION['MENSSAGE'] = "ERROR AL OBTENER SUS DATOS, RECARGE LA PAGINA";
            return false;
        }
    }

    function deleteCitas()
    {
        try {
            $consult = Query::queryDeletedCitasAdmin();
            $query = $this->db->connect()->prepare($consult);
            $query->execute();

            if ($query) {
                $_SESSION['MENSSAGE_SUCCESS'] = "CITA ELIMINADA CORRECTAMENTE";
            } else {
                $_SESSION['MENSSAGE'] = "ERROR NO SE PUDO ELIMINAR LA CITA";
            }
        } catch (Exception $e) {
            $_SESSION['MENSSAGE'] = "ERROR AL OBTENER SUS DATOS, RECARGE LA PAGINA";
            return false;
        }
    }

    /*INHABILITADO*/
    function getListMensajes()
    {
        try {
            $consult = Query::queryGetClientesAdmin();
            $query = $this->db->connect()->prepare($consult);
            $query->execute();

            $clientes = [];
            $clientesAux = [];

            while ($row = $query->fetch()) {
                array_push($clientesAux, $row['use_id']);
                array_push($clientesAux, $row['use_name']);
                array_push($clientesAux, $row['use_email']);
                array_push($clientesAux, $row['use_date']);
                array_push($clientesAux, $row['use_phone']);
                array_push($clientesAux, $row['use_role']);
                array_push($clientes, $clientesAux);
                $clientesAux = [];
            }

            return $clientes;
        } catch (Exception $e) {
            $_SESSION['MENSSAGE'] = "ERROR AL OBTENER SUS DATOS, RECARGE LA PAGINA";
            return false;
        }
    }
    
    /*FIN DE INHABILITADO*/

    function getListPropiedades()
    {
        try {
            $consult = Query::queryGetPropiedadesAcesor();
            $query = $this->db->connect()->prepare($consult);
            $query->execute();

            $citas = [];
            $citasAux = [];

            while ($row = $query->fetch()) {
                array_push($citasAux, $row['pro_id']);
                array_push($citasAux, $row['pro_title']);
                array_push($citasAux, $row['pro_description']);
                array_push($citasAux, $row['pro_type']);
                array_push($citasAux, $row['pro_price']);
                array_push($citasAux, $row['pro_rooms']);
                array_push($citasAux, $row['pro_bathrooms']);
                array_push($citasAux, $row['pro_address']);
                array_push($citasAux, $row['pro_pais']);
                array_push($citasAux, $row['pro_ciudad']);
                array_push($citasAux, $row['pro_cover']);
                array_push($citasAux, $row['pro_date_publication']);
                array_push($citasAux, $row['pro_broker']);
                array_push($citas, $citasAux);
                $citasAux = [];
            }

            return $citas;
        } catch (Exception $e) {
            $_SESSION['MENSSAGE'] = "ERROR AL OBTENER SUS DATOS, RECARGE LA PAGINA";
            return false;
        }
    }

    function deletePropiedad()
    {
        try {
            $consult = Query::queryDeletedPropiedadesAdmin();
            $query = $this->db->connect()->prepare($consult);
            $query->execute();

            if ($query) {
                $_SESSION['MENSSAGE_SUCCESS'] = "PROPIEDAD ELIMINADA CORRECTAMENTE";
            } else {
                $_SESSION['MENSSAGE'] = "ERROR NO SE PUDO ELIMINAR LA PROPIEDA";
            }
        } catch (Exception $e) {
            $_SESSION['MENSSAGE'] = "ERROR AL OBTENER SUS DATOS, RECARGE LA PAGINA";
            return false;
        }
    }
}

?>
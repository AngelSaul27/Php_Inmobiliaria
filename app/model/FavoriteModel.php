<?php

    class FavoriteModel extends Model{

        function __construct(){
            parent::__construct();
        }

        function addFavoriteProperties(){
            try {
                $consult = Query::queryAddPropertierFavorites();
                $query = $this->db->connect()->prepare($consult);
                $query->execute();

                if ($query) {
                    $_SESSION['MENSSAGE_SUCCESS'] = "AÑADIDO EXITOSAMENTE";
                } else {
                    $_SESSION['MENSSAGE'] = "ERROR NO SE PUDO AÑADIR";
                }
            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }

    }

<?php

    class FilterPropiedadesModel extends Model{

        function __construct(){
            parent::__construct();
        }

        function getFilterProperties(){
            try {
                $items = [];
                $itemsAux = [];

                $consult = Query::queryFilterProperties($_GET['type']);
                $query = $this->db->connect()->prepare($consult);
                $query->execute();


                while ($row = $query->fetch()) {
                    array_push($itemsAux, $row['pro_id']);
                    array_push($itemsAux, $row['pro_title']);
                    array_push($itemsAux, $row['pro_description']);
                    array_push($itemsAux, $row['pro_type']);
                    array_push($itemsAux, $row['pro_price']);
                    array_push($itemsAux, $row['pro_rooms']);
                    array_push($itemsAux, $row['pro_bathrooms']);
                    array_push($itemsAux, $row['pro_address']);
                    array_push($itemsAux, $row['pro_pais']);
                    array_push($itemsAux, $row['pro_ciudad']);
                    array_push($itemsAux, $row['pro_cover']);
                    array_push($itemsAux, $row['pro_date_publication']);
                    array_push($itemsAux, $row['pro_broker']);
                    if (isset($_SESSION['use_data'])) {
                        array_push($itemsAux, $row['isAdded']);
                    }
                    array_push($items, $itemsAux);
                    $itemsAux = [];
                }

                return $items;
            } catch (Exception $e) {
                $_SESSION['MENSSAGE'] = "ERROR LA CONSULTA NO SE PUDO REALIZAR";
            }
        }

    }

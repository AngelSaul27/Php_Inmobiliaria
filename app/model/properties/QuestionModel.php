<?php

    class QuestionModel extends Model{

        function __construct(){
            parent::__construct();
        }

        function addQuestionProperties(){
            try {
                $consult = Query::queryAddQuestionProperties();
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

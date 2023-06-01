<?php 

    class Validation {

        public static function emailValidator($email)
        {
            if(self::fieldValidator($email)){
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return false;
                }
            }
            return true;
        }

        public static function fieldValidator($field){

            if (empty($field)) {
                return false;
            }

            if (!preg_match('/^[a-zA-Z0-9]+$/', $field)) {
                return "El campo '$field' contiene caracteres no permitidos.";
            }

            return true;
        }

        public static function validateNumber($numero){
            $numero = str_replace(' ', '', $numero);
            $numero = str_replace('-', '', $numero);
            
            // Verificar si el número tiene exactamente 10 dígitos
            if (strlen($numero) !== 10) {
                return false;
            }
            
            // Verificar si todos los caracteres son dígitos
            if (!ctype_digit($numero)) {
                return false;
            }
            
            return true;
        }

    }


?>
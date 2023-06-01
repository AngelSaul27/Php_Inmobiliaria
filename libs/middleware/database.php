<?php

class Database{

    private $host;
    private $database;
    private $username;
    private $password;
    private $charset;

    public function __construct(){
        //inicializamos las variables
        $this->host = constant('HOST');
        $this->database = constant('DATABASE');
        $this->username = constant('USERNAME');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    function connect(){
        try{
            //String conection
            $conection = "mysql:host=".$this->host.";dbname=".$this->database.";charset=".$this->charset;
            //Opciones para visualizar los errores de la base de datos
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            //CREAMOS LA CONEXIÓN A LA BASE DE DATOS
            $PDO = new PDO($conection, $this->username, $this->password, $options);
                        
            //RETORNAMOS EL OBJETO PDO
            return $PDO;
        }catch(PDOException $e){
            print_r("Error: ". $e->getMessage());
        }
    }

}

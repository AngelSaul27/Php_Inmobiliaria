<?php

    class Query{

        function __construct(){
            
        }

        public static function queryLogin($email, $password){
            return  "SELECT usr.*, rol.rol_name as use_role "
                    ."FROM usuario usr "
                    ."INNER JOIN role rol ON rol.rol_id = usr.use_fk_role "
                    ."WHERE use_email = '$email' AND use_password = '$password'";
        }

        public static function queryRegisterUser($name, $email, $password){
            $fecha = new DateTime();
            $fecha = $fecha->format('Y-m-d');

            return  "INSERT INTO usuario(use_name, use_email, use_password, use_date, use_fk_role) VALUES('$name', '$email', '$password', '$fecha', 1)";
        }

        public static function queryUpdateDataCliente($name, $email, $phone = null){
            $ID = ($_SESSION['use_data'])[0];
            return "UPDATE usuario SET use_name = '$name', use_email = '$email', use_phone = '$phone'  WHERE use_id = '$ID'";
        }

        public static function queryGetPropertierFavorites(){
            $ID = ($_SESSION['use_data'])[0];
            return ("SELECT fav.*, pro.* FROM favorito fav
                    INNER JOIN propiedad pro ON pro.pro_id = fav.fav_fk_properties
                    WHERE fav_fk_user = '$ID'");
        }

        public static function queryRemovePropertierFavorites($id){
            $ID = ($_SESSION['use_data'])[0];
            return ("DELETE FROM favorito WHERE fav_fk_user = '$ID' AND fav_id = '$id';");
        }

        public static function queryHomeGetProperties(){
            if(isset($_SESSION['use_data'])){
                $ID = ($_SESSION['use_data'])[0];
                return ("SELECT *, (SELECT fav.fav_id FROM favorito fav WHERE fav.fav_fk_properties = pro.pro_id AND fav.fav_fk_user = '$ID') AS 'isAdded' FROM propiedad pro limit 7");
            }else{
                return ("SELECT * FROM propiedad limit 7");
            }
        }

        public static function queryAddPropertierFavorites(){
            $fecha = new DateTime();
            $fecha = $fecha->format('Y-m-d');
            $fav_user = ($_SESSION['use_data'])[0];
            $fav_properties = $_POST['fav_properties'];
            return  "INSERT INTO favorito(fav_date, fav_fk_user, fav_fk_properties) VALUES('$fecha', '$fav_user', '$fav_properties')";
        }

        public static function queryGetPropertieByID($id){
            if(isset($_SESSION['use_data'])){
                $ID = ($_SESSION['use_data'])[0];
                return ("SELECT *, (SELECT fav.fav_id FROM favorito fav WHERE fav.fav_fk_properties = pro.pro_id AND fav.fav_fk_user = '$ID') AS 'isAdded' FROM propiedad pro WHERE pro_id = '$id'");
            }else{
                return ("SELECT * FROM propiedad WHERE pro_id = '$id'");
            }
        }

        public static function queryAddQuestionProperties(){
            $fecha = new DateTime();
            $FECHA = $fecha->format('Y-m-d');
            $MESSAGE = $_POST['message'];
            $NAME = $_POST['name'];
            $email = $_POST['email'];
            $ID = ($_SESSION['use_data'])[0];
            return  "INSERT INTO pregunta(que_message, que_date, que_fk_user, que_name, que_email) VALUES('$MESSAGE', '$FECHA', '$ID', '$NAME' , '$email')";
        }

        public static function queryAddCiteProperties(){
            $DAY = $_POST['day'];
            $TIME = $_POST['time'];
            $PROPERTIE = $_POST['propertie'];
            $ID = ($_SESSION['use_data'])[0];
            return "INSERT INTO cita(cit_day, cit_time, cit_fk_properties, cit_fk_user) VALUES('$DAY', '$TIME', '$PROPERTIE', '$ID')";
        }

        public static function queryGetListCiteProperties(){
            $ID = ($_SESSION['use_data'])[0];
            return "SELECT cit.*, pro.*, usr.use_name FROM cita cit 
                    INNER JOIN propiedad pro ON cit.cit_fk_properties = pro.pro_id 
                    INNER JOIN acesor ace ON ace.bro_id = pro.pro_broker
                    INNER JOIN usuario usr ON usr.use_id = ace.bro_fk_user WHERE cit.cit_fk_user = '$ID'";
        }

        public static function queryDeletedCiteProperties(){
            $ID = $_POST['cit_id'];
            $IDUSR = ($_SESSION['use_data'])[0];
            return "DELETE FROM cita WHERE cit_id = '$ID' AND cit_fk_user = '$IDUSR'";
        }

        public static function queryGetMessage(){
            $ID = ($_SESSION['use_data'])[0];
            return "SELECT * FROM pregunta pre LEFT JOIN respuesta rep ON rep.rep_fk_contact = pre.que_id 
            LEFT JOIN acesor ace ON ace.bro_id = rep.rep_fk_broker LEFT JOIN usuario usr ON usr.use_id = ace.bro_fk_user 
            WHERE que_fk_user = '$ID'";
        }

        public static function queryDeletedMessage(){
            $ID = $_POST['que_id'];
            $IDUSR = ($_SESSION['use_data'])[0];
            return "DELETE FROM pregunta WHERE que_id = '$ID' AND que_fk_user = '$IDUSR'";
        }

        public static function queryFilterProperties($type){
            if (isset($_SESSION['use_data'])) {
                $ID = ($_SESSION['use_data'])[0];

                if($type === 'all'){
                    return ("SELECT *, (SELECT fav.fav_id FROM favorito fav WHERE fav.fav_fk_properties = pro.pro_id 
                        AND fav.fav_fk_user = '$ID') AS 'isAdded' FROM propiedad pro");
                }else{
                    return ("SELECT *, (SELECT fav.fav_id FROM favorito fav WHERE fav.fav_fk_properties = pro.pro_id 
                    AND fav.fav_fk_user = '$ID') AS 'isAdded' FROM propiedad pro WHERE pro_type = '$type'");
                }
            } else {
                if ($type === 'all') {
                    return ("SELECT * FROM propiedad");
                } else {
                    return ("SELECT * FROM propiedad WHERE pro_type = '$type'");
                }
            }
        }

        public static function queryGetCitasAdmin(){
            return "SELECT 
                        cit_id, cit_day, cit_time, 
                        use_ace.use_name as cit_acesor_name, 
                        use_cli.use_name as cit_cliente_name,
                        pro.*, cit_fk_user
                    FROM cita cit 
                        INNER JOIN propiedad pro ON cit.cit_id = pro.pro_id 
                        INNER JOIN acesor ace ON ace.bro_id = pro.pro_broker
                        INNER JOIN usuario use_ace ON use_ace.use_id = ace.bro_fk_user
                        INNER JOIN usuario use_cli ON use_cli.use_id = cit_fk_user";
        }

        public static function queryDeletedCitasAdmin(){
            $id = $_POST['cit_id'];
            return "DELETE FROM cita WHERE cit_id = '$id'";
        }

        public static function queryGetClientesAdmin(){
            return  "SELECT usr.*, rol.rol_name as use_role FROM usuario usr 
            INNER JOIN role rol ON rol.rol_id = usr.use_fk_role WHERE usr.use_fk_role = 1";
        }

        public static function queryGetAcesoresAdmin(){
            return "SELECT usr.*, rol.rol_name as use_role FROM usuario usr 
            INNER JOIN role rol ON rol.rol_id = usr.use_fk_role WHERE usr.use_fk_role = 3";
        }

        public static function queryDeletedUsuariosAdmin(){
            $id = $_POST['use_id'];
            return "DELETE FROM usuario WHERE use_id = '$id'";
        }

        public static function queryGetPropiedadesAdmin(){
            return "SELECT pro.*, ace.*, usr.use_name FROM propiedad pro 
            INNER JOIN acesor ace ON ace.bro_id = pro.pro_broker
            INNER JOIN usuario usr ON usr.use_id = ace.bro_fk_user ORDER BY pro.pro_id";
        }

        public static function queryDeletedPropiedadesAdmin(){
            $id = $_POST['pro_id'];
            return "DELETE FROM propiedad WHERE pro_id = '$id'";
        }

        public static function queryGetCitasAcesor(){
            $ID = ($_SESSION['use_data'])[0];
            return "SELECT 
                        cit_id, cit_day, cit_time, 
                        use_ace.use_name as cit_acesor_name, 
                        use_cli.use_name as cit_cliente_name,
                        pro.*, cit_fk_user
                    FROM cita cit 
                        INNER JOIN propiedad pro ON cit.cit_fk_properties = pro.pro_id 
                        INNER JOIN acesor ace ON ace.bro_id = pro.pro_broker
                        INNER JOIN usuario use_ace ON use_ace.use_id = ace.bro_fk_user
                        INNER JOIN usuario use_cli ON use_cli.use_id = cit_fk_user WHERE pro_broker = '$ID'";
        }

        public static function queryGetPropiedadesAcesor(){
            $ID = ($_SESSION['use_data'])[0];
            return "SELECT * FROM propiedad pro WHERE pro.pro_broker = '$ID'";
        } 

        public static function queryGetMessageAcesor(){
            return "SELECT * FROM pregunta pre LEFT JOIN respuesta rep 
            ON rep.rep_fk_contact = pre.que_id LEFT JOIN acesor ace ON 
            ace.bro_id = rep.rep_fk_broker LEFT JOIN usuario usr ON 
            usr.use_id = ace.bro_fk_user";
        }

        public static function queryUpdatePropiedades(){
            $pro_id = $_POST['pro_id'];
            $pro_title = $_POST['pro_title'];
            $pro_description = $_POST['pro_description'];
            $pro_type = $_POST['pro_type'];
            $pro_price = $_POST['pro_price'];
            $pro_rooms = $_POST['pro_rooms'];
            $pro_bathrooms = $_POST['pro_bathrooms'];
            $pro_address = $_POST['pro_address'];
            $pro_pais = $_POST['pro_pais'];
            $pro_ciudad = $_POST['pro_ciudad'];
            $pro_cover = $_POST['pro_cover'];

            return "UPDATE propiedad SET pro_id = '$pro_id', pro_title = '$pro_title', pro_description = '$pro_description' 
            , pro_type = '$pro_type', pro_price = '$pro_price', pro_rooms = '$pro_rooms', pro_bathrooms = '$pro_bathrooms'
            , pro_address = '$pro_address', pro_pais = '$pro_pais', pro_ciudad = '$pro_ciudad', pro_cover = '$pro_cover' WHERE pro_id = '$pro_id'";
        }

        public static function queryCreatePropiedades(){
            $pro_title = $_POST['pro_title'];
            $pro_description = $_POST['pro_description'];
            $pro_type = $_POST['pro_type'];
            $pro_price = $_POST['pro_price'];
            $pro_rooms = $_POST['pro_rooms'];
            $pro_bathrooms = $_POST['pro_bathrooms'];
            $pro_address = $_POST['pro_address'];
            $pro_pais = $_POST['pro_pais'];
            $pro_ciudad = $_POST['pro_ciudad'];
            $pro_cover = $_POST['pro_cover'];
            $fecha = new DateTime();
            $FECHA = $fecha->format('Y-m-d');

            $ID = ($_SESSION['use_data'])[0];

            return "INSERT INTO 
                propiedad(pro_title, pro_description, pro_type, pro_price, 
                pro_rooms, pro_bathrooms, pro_address, pro_pais, pro_ciudad, pro_cover, pro_broker, pro_date_publication) VALUES(
                '$pro_title','$pro_description','$pro_type','$pro_price','$pro_rooms','$pro_bathrooms',
                '$pro_address','$pro_pais','$pro_ciudad','$pro_cover', '$ID', '$FECHA')";
        }
    }
?>
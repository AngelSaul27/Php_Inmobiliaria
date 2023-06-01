<?php 

    class Favorite extends Controller {

        function __construct() {
            parent::__construct();
        }

        function add_favorite(){
            $Object = $this->loadModel('FavoriteModel');
            $Object->addFavoriteProperties();
            $LOC = $_POST['fav_loc'];
            
            if($LOC === '/'){
                header("Location: http://localhost/");
            }else{
                header("Location: http://localhost/$LOC");
            }

            die();
        }

    }

?>
<?php
    class Router {
        
        public static function Errores($controller)
        {
            $file = '../app/controller/' . $controller . '.php';
            if(file_exists($file)){
                require_once $file;
                $Object = new $controller();

                if(method_exists($Object, 'render'))
                {
                    $Object->render();
                    die();
                }else{
                    $_SESSION['MENSSAGE'] = "ERROR: The rendering method was not found or the Controller file does not exist.";
                    Header('Location: http://localhost/Error');
                }

                die();
            }
        }

        public static function getResquest($url, $controller, $method = null, $param = null)
        {
            if ($_SERVER['REQUEST_METHOD'] != 'GET') {
                return false;
            }

            $URL_HTACCESS = isset($_GET['url']) ? $_GET['url'] : false;
                        
            if(empty(rtrim($URL_HTACCESS, '/'))){
                self::loaderHomePage($controller);
            }

            if(rtrim($URL_HTACCESS, '/') === $url)
            {
                $file = '../app/controller/' . $controller . '.php';
                if(file_exists($file)){
                    require_once $file;
                    
                    $strposClass = strpos($controller, '/');
                    
                    if($strposClass !== false){
                        $clase = explode('/', $controller);
                        $longitud = sizeof($clase);
                        $controller = $clase[$longitud-1];
                    }

                    $Object = new $controller();

                    if(method_exists($Object, 'render'))
                    {
                        $Object->render();
                        die();
                    }

                    if($method !== null && method_exists($Object, $method)){
                        if($param != null && $param == true){
                            $param = isset($_GET['id']) ? $_GET['id'] : false;

                            if($param === false){
                                $_SESSION['MENSSAGE'] = "ERROR: Invalid parameter passed to URL.";
                                Header('Location: http://localhost/Error');
                                die();
                            }

                            $Object->$method(intval($param));
                            die();
                        }

                        $Object->$method();
                    } else {
                        $_SESSION['MENSSAGE'] = "ERROR: The rendering method was not found or the Controller file does not exist..";
                        Header('Location: http://localhost/Error');
                        die();
                    }
                }
                
                $_SESSION['MENSSAGE'] = "ERROR: The controller file not found";
                Header('Location: http://localhost/Error');
                die();
            }
        }

        public static function postRequest($url, $controller, $method = null, $param = null)
        {

            if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                return false;
            }

            $URL_HTACCESS = isset($_GET['url']) ? $_GET['url'] : false;

            if (rtrim($URL_HTACCESS, '/') === $url) {

                $file = '../app/controller/' . $controller . '.php';

                if (file_exists($file)) 
                {
                    require_once $file;
                    
                    $strposClass = strpos($controller, '/');
                    
                    if($strposClass !== false){
                        $clase = explode('/', $controller);
                        $longitud = sizeof($clase);
                        $controller = $clase[$longitud-1];
                    }

                    $Object = new $controller();

                    if($method !== null){
                        if(method_exists($Object, $method)){
                            $Object->$method();
                        }
                    }

                    die();
                }
            }
        }

        protected static function loaderHomePage($controller)
        {
            $file = '../app/controller/' . $controller . '.php';

            if (file_exists($file)) 
            {
                require_once $file;
                $Object = new $controller();

                if(method_exists($Object, 'render'))
                {
                    $Object->render();
                    die();
                }
            }

            $_SESSION['MENSSAGE'] = "ERROR: The rendering method was not found or the Controller file does not exist.";
            Header('Location: http://localhost/Error');
            die();
        }
    }
?>
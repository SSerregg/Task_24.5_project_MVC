<?php

namespace app;


class Route {

    public static function error() {
        header('HTTP/1.1 404 Not Found');
    }
    public static function start() {
    
        $controllerClassname = 'home';
        $method = 'index';
        $payload = [];

	    $routes = explode('/',$_SERVER["REQUEST_URI"]);
        if(!empty($routes[1])){
        $controllerClassname = $routes[1];
        }
        if(!empty($routes[2])){
        $method = $routes[2];
        }
        if(!empty($routes[3])){
        $payload = array_slice($routes, 3);
        }

        $controllerFile = CONTROLLER.strtolower($controllerClassname).'.php';
     
        
        if(file_exists($controllerFile)) {
            include_once $controllerFile;
            $controller = "app\\$controllerClassname";
       

            if (class_exists($controller)){
                $actionName = new $controller();

                    if(method_exists($actionName, $method)){
                        
                        $actionName->$method();
                    }else{
                        self::error();
                    }
            }else{
                self::error();
            }
        }else{
            self::error();
        }
        
        $model_path = MODEL.'model.php';
        if(file_exists($model_path)){
			include_once $model_path;
		}             
}
}

?>
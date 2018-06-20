<?php

class Router {

    private static $routes;
    
    public static function dispatch($url) {
        
        if (isset(self::$routes[$url])) {
            $controller = self::$routes[$url]['controller'] . 'Controller';
            $controller = new $controller();

            if(method_exists($controller, self::$routes[$url]['action'] . 'Action')) {
                $action = self::$routes[$url]['action'] . 'Action'; 
                $controller->$action(); 
            } else {
                echo 'Error 404';
            }
        } else {
            echo 'Error 404';
        }
        
    }

    public static function addRoute($url, $controller, $action) {
        self::$routes[$url] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

}
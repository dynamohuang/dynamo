<?php

namespace Core;


class Route {

    public static function run() {
       
        
        if(isset($_SERVER['PATH_INFO'])===false){
            echo $className = DEFAULT_CONTROLLER;
            die();
        }
        

        $part = explode('/', $_SERVER['PATH_INFO']);        
        $className = "App\\Controller\\" . ucwords($part[1]);
        if(!class_exists($className)) {
            return 'Routed Not Exists';
        }

        $methodName = $part[2];
        if(!method_exists($className, $methodName)) {
            return 'Action Not Exists';
        }

        $ctrl = new $className();
        return $ctrl->$methodName();

    }

}

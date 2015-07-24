<?php
namespace Core;

class Route
{

    public static function run()
    {
        if (isset($_SERVER['PATH_INFO']) === false) {
            $className = "App\\Controller\\" . DEFAULT_CONTROLLER;
            $ctrl = new $className();
            $methodName = $ctrl->default_function;
        } else {
            
            $part = explode('/', $_SERVER['PATH_INFO']);
            $className = "App\\Controller\\" . ucwords($part[1]);
            $ctrl = new $className();
            
            if (! class_exists($className)) {
                return 'Routed Not Exists';
            }
            
            $methodName = isset($part[2]) ? $part[2] : $ctrl->default_function;
            if (! method_exists($className, $methodName)) {
                return 'Action Not Exists';
            }
        }
        return $ctrl->$methodName();
    }
}

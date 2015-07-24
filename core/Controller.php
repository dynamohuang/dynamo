<?php

namespace Core;


class Controller {
    
    public $default_function = "index";
    protected $view = null;
    
    public function __construct(){
        $view = new View();
        $this -> view = $view -> view;
    }
    
    public function __call($name,$arguments){
       
    }
    
}
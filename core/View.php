<?php
namespace Core;


class View {

    public $view = null;
    public function __construct(){
        //使用composer安装的twig模板引擎
        \Twig_Autoloader::register();
        $loader = new \Twig_Loader_Filesystem(APP_PATH . "app/view/");
        $twig = new \Twig_Environment($loader, array(
            'cache' => APP_PATH . "app/cache",
        ));
        $this -> view = $twig;
    }

}
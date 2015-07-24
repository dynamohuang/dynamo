<?php
namespace Core;

//使用Composer安装的Model
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

//创建model类继承，并创建连接
class Model extends \Illuminate\Database\Eloquent\Model{
    public function __construct(){
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'cqdayuw',
            'username'  => 'root',
            'password'  => '143439',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
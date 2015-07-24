<?php
namespace App\Controller;
use Core\Controller;
use App\Model\Info;
class Welcome extends Controller{
    public function index(){
        echo "welcome to use dynamo";
    }
    
    public function test() {
        $res = Info::find(1);
        $data= array(
          "test"=>$res->count  
        );
        $template = $this -> view -> loadTemplate('test.html');
        echo $template->render($data);
    }
}   
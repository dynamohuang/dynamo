<?php
namespace Core;

class Tool {

    public function json($state, $msg = '', $append = array()) {
        $return = array(
            'state' => $state,
            'msg' => $msg
        ) + $append;
        return json_encode($return);
    }
    
    public function jsonp($state, $msg = '', $append = array(),$callback = "jsonpCallback"){
    
        return $callback.'('.$this->json($state, $msg = '', $append).');';
    
    }
    
    public function param($method, $key, $default = '') {
        switch($method) {
            case 'get':
                $param = $_GET;
                break;
            case 'post':
                $param = $_POST;
                break;
            default:
                return '';
        }
    
        return isset($param[$key]) ? $param[$key] : $default;
    }
    
    public function getIp() {
        if (getenv('http_client_ip')) {
            $ip = getenv('http_client_ip');
        } else if (getenv('http_x_forwarded_for')) {
            $ip = getenv('http_x_forwarded_for');
        } else if (getenv('remote_addr')) {
            $ip = getenv('remote_addr');
        } else {
            $ip = $_SERVER['remote_addr'];
        }
        return $ip;
    }

}
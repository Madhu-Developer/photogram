<?php
class session{

    public static function start(){
        session_start();
    }
    public static function unset(){
        session_unset();
    }
    public static function destroy(){
        session_destroy();
    }
    public static function set($key , $value){
        $_SESSION[$key] = $value ;
    }
    public static function delete(){
        unset($_SESSION[$key]);

    }

    public static function isset(){
        return isset($session[$key]);
    }
    public static function get($key , $default=false){
        if(isset($key)){
return $_SESSION[$key] ;
        }else{
return $default ;
        }
    }

}
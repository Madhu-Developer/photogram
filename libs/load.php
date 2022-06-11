<?php
include_once 'includes/user.class.php';
include_once 'includes/database.class.php';
include_once 'includes/session.class.php';

global $__site__config ;

$__site__config = file_get_contents($_SERVER['DOCUMENT_ROOT']."/../photogramconfig.json");

session::start();

function get_config($key , $default = null ){
    global $__site__config;
    $array = json_decode($__site__config,true) ;
    if(isset($array[$key])){
        return $array[$key] ;
    } else {
        return $default ;
    }
}


function load_Template($name){
    //  print(" includeing ". __DIR__."/../_templates/$name.php ");   *path* 
    include __DIR__."/../_templates/$name.php";  
}

function validate_credientials($username, $password)
{

  
    if ($username=="madhu@mad.com" and md5($password=="12345")) {
       // echo "$password";
        return 1 ;
    } else {
        echo "error" ;
        return 0;
    }
}









<?php
include_once 'includes/user.class.php';
include_once 'includes/database.class.php';
include_once 'includes/session.class.php';
session::start();


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









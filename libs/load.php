<?php
include_once 'includes/user.class.php';
include_once 'includes/database.class.php';



function load_Template($name){
    //  print(" includeing ". __DIR__."/../_templates/$name.php ");   *path* 
    include __DIR__."/../_templates/$name.php";  
}

function validate_credientials($username, $password)
{
    if ($username=="madhu@mad.com" and $password=="1234") {
        return 1 ;
    } else {
        return 0;
    }
}






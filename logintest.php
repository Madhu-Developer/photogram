<?php
include "libs/load.php" ;

$user = "self" ;
$pass = "self";

$result = User::login($user , $pass );
if(isset($_GET['logout'])){
    session::destroy();
    die("session destroyed , <a href='login.php'> login here </a>");
    
}

if(session::get('is_loggedin')){
    $username  = session::get('session_name');
    $userobj = new user($username);

    print(" welcome back to sna , " . $userobj->getfirstname());
    print(" <br> ". $userobj->getbio());
    $userobj->setbio("setting up bio...");
    print(" <br> ". $userobj->getbio());
    return $userdata ;

}else{
    print("no session found , trying to login....\n");
    $result = User::login($user , $pass );
    if($result){
        $userobj = new user($username);

        echo "loged in as ,". $userobj->getusername(); 
        session::set('is_loggedin' , true);
        session::set('session_username', $result);

    }else{
        printf("login failed\n");
    }

}

echo <<<eol
<br><br><a href="logintest.php?logout">logout</a>
eol;
<?php
include "libs/load.php" ;

$user = "ganesh" ;
$pass = "abcd" ;

$result = User::login($user , $pass );
if(isset($_GET[logout])){
    session::destroy();
    die("session destroyed , <a href='login.php'> login here </a>");
    
}

if(session::get('is_loggedin')){
    $userdata = session::get('session_user');
    print(" welcome back to sna , $userdata[username]");
    return $userdata ;

}else{
    print("no session found , trying to login....\n");
    $result = User::login($user , $pass );
    if($result){
        echo "loged in as , $userdata[username]" ;
        session::set('is_loggedin' , true);
        session::set('session_user', $result);

    }else{
        printf("login failed\n");
    }

}

echo <<<eol
<br><br><a href="logintest.php?logout">logout</a>
eol;
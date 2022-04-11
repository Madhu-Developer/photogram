<pre>
<?php
include 'libs/load.php';

session_start();
printf("_session");
print_r($_SESSION);
//print_r($_SERVER );

if(isset($_GET['clear'])){
    printf("clearing....\n");
    session_unset();
}

if(isset ($_SESSION['a'])){
     echo "already  value for a exist ... value of a = $_SESSION[a] \n " ;
} else {
    $_SESSION['a'] = time() ;
    echo "assining value for a... value of a = $_SESSION[a] \n " ;
}

if(isset($_GET['destroy'])){
    printf("destroying..");
    Session_destroy();
}

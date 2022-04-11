<pre>
<?php
include 'libs/load.php';

printf("_session");
print_r($_SESSION);
//print_r($_SERVER );

if(isset($_GET['clear'])){
    printf("clearing....\n");
    session::unset();
}

if(session::isset('a')){
     printf("already  value for a exist ... value of a  is  ".Session::get('a'). "\n " );
} else {
    session::set('a' , time());
    printf( "assining value for a... value of a = $_SESSION[a] \n " );
}

if(isset($_GET['destroy'])){
    printf("destroying...\n");
    session::destroy();
}

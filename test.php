<pre>
<?php
include 'libs/load.php';

    //print("_server\n");
   // print_r($_SERVER);
    //print("_globals\n");
    //print_r($GLOBALS);
    //print("_session\n");
    //print_r($_SESSION);
    //print("_cookie\n");
    //  print("_get\n");
    //print_r($_COOKIE);
     // print_r($_GET);
     //print("_POST\n");
      //print_r($_POST);
    //print("_request\n");
    //print_r($_REQUEST);//

  
    
    if (signup( "admin", "admin", "madhu@admin" , "9876543210" )){
      echo true ;

    }else{
      echo false;
    }


    ?>
</pre>






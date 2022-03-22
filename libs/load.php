<?php
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

function signup($user,$pass,$email,$phone){
   
   $conn = database::getconnection();

$sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";

if ($conn->query($sql) === TRUE) {
  $error= false;
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
$error=$conn->error ;

}

$conn->close();
return $error ;
}




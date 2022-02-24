<?php
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
   
    
$servername = "mysql.selfmade.ninja";
$username = "photogram";
$password = "photo123";
$dbname = "photogram_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else {
    echo ('sucess');
}

$sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


?>

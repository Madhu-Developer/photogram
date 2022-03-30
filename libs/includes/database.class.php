<?php
class Database{
    public static $conn  = null ;

    public static function getconnection(){
       if(database::$conn == null)
       {
        $servername = "mysql.selfmade.ninja";
        $username = "madhu";
        $password = "123456789";
        $dbname = "madhu_ph";
        
        // Create connection
        $connection = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($connection->connect_error) {
          die("Connection failed: " . $connection->connect_error);
        }else{
            
            database::$conn = $connection ;//replacing with actuall connection 
            return database::$conn ;

        }

       }else{
           return database:: $conn;
       }
    }
}

<?php

class User
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $pass = md5($pass);
        $conn = Database::getConnection();
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `active`)
        VALUES ('$user', '$pass', '$email', '$phone', '1');";
        $error = false;
        if ($conn->query($sql) === true) {
            $error = false;
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            $error = $conn->error;
        }
    
        // $conn->close();
        return $error;
    }

    public static function login($user , $pass ){
        $pass = md5($pass);
        $conn = Database::getConnection();
        $query = "SELECT * FROM `auth` WHERE `username` = '$user'" ;
        $result = $conn->query($query) ; 
        if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 if($row["password"] == $pass ){
    return $row ;
 }else{
     return false ;
 }
        }else{
            return false ;
        }


    }


    public function setbio(){

    }

    public function getbio(){

    }

    public function setavatar(){

    }

    public function getavatar(){

    }

    public function authentication(){


    }

         
    public function __construct($username){
        $this->conn = Database::getConnection();
        $this->conn->query();
    }

}

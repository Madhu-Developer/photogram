<?php

class User
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $options = [
            'cost' => 7,
        ];
        
        $pass = password_hash($pass, PASSWORD_BCRYPT, $options);
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
       
        $conn = Database::getConnection();
        $query = "SELECT * FROM `auth` WHERE `username` = '$user'" ;
        $result = $conn->query($query) ; 
        if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(password_verify($pass, $row['password'])){
        return $row ;
         }else{
     return false ;
 }
        }else{
            return false ;
        }


    }

          
    public function __construct($username){
        $this->conn = Database::getConnection(); // checking the connection
        $sql = "SELECT * FROM `auth` WHERE `username` = $username LIMIT 1 "; 
        $result = $this->$conn->query($sql); // get data from the database 
        if( $result->num_rows ){ // checking wheter the data is in the result vriyable 
            $row = $result->fetch_assoc(); // fetching data 
            $this->id= $row['id'];
        } else {
            throw new Expection ("no username found");
                  }
    }
/// this is the function to get data from the database 
    private function  _get_data ($var)
    { 
        if(!$this->conn ){
            $this->conn = Database::getconnection();
        }
        $sql= "SELECT `$var` FROM `user` WHERE `id` = $this->id "; 
        $result = $this->conn->query($sql);
        if($result->num_rows ){
            return $result->fetch_asso()["$var"] ;
        } else {
            return null ;
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

    

}

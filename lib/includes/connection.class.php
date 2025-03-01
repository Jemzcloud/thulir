<?php 

class Database{
    public static $conn = null;

    public static function connection(){
        if (DataBase::$conn == null) {
            $servername = 'localhost';
            $username = 'phpmyadmin';
            $password = 'kali';
            $dbname = 'phpmyadmin';

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error); //TODO: Replace this with exception handling
            } else {
                // printf("New connection establishing...");
                DataBase::$conn = $connection; //replacing null with actual connection
                return DataBase::$conn;
            }
        } else {
            // printf("Returning existing establishing...");
            return DataBase::$conn;
        }
    }
    // public function __construct(){
    //     if(cookie::get_cookie()){
    //         echo "cookie already exist";
    //     }
    //     else{
    //         cookie::set_cookie();
    //     }
    // }


}
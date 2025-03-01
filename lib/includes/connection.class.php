<?php 
//
class Database{
    public static $conn = null;

    public static function connection(){
        if (DataBase::$conn == null) {
            $servername = 'bgck9sbmqlbsct1j7ulz-mysql.services.clever-cloud.com';
            $username = 'uj1cbguq4yog3vyr';
            $password = 'YnmfDtAf3xIQ6Arm5gCN';
            $dbname = 'bgck9sbmqlbsct1j7ulz';

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error); 
            } else {
                // printf("New connection establishing...");
                DataBase::$conn = $connection;
                return DataBase::$conn;
            }
        } else {
            // printf("Returning existing establishing...");
            return DataBase::$conn;
        }
    }


}
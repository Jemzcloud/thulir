<?php 

class cookie{
    private $conn = null;
    public $id;
    // public function __construct(){
    //     $this->conn = Database::connection();
    //     $sql = "INSERT INTO thulir_like WHERE agent = $this->agent";  
    //     $result = $this->conn->query($sql);
    //     if ($result->num_rows) {
    //         $row = $result->fetch_assoc();
    //         $this->id = $row['id']; //Updating this from database
    //     } else {
    //         throw new Exception("Username does't exist");
    //     }
    // }

    public static function get_cookie($agent){       
        $conn = Database::connection();
        $sql = "SELECT agent FROM thulir_like WHERE agent = '$agent';";
        $result = $conn->query($sql);
        if($result->num_rows){
            return true;
        }else{
            return false;
        }
    }
    public static function set_cookie($agent){
        $conn = Database::connection();
        $sql = "INSERT INTO thulir_like (`agent`) VALUES ('$agent');";
        $result = $conn->query($sql);
        if($result){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
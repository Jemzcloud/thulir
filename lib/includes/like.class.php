<?php 

class Like{
    public static function check_agent($id,$agent){
        
        if(cookie::get_cookie($agent)){
            echo "You already like this image";
        }
        else{
            // cookie::set_cookie($agent);
            echo "New cookie added";
            Like::add_like($id,$agent);
        }
    }
    public static function add_like($id,$agent){
        $conn = Database::connection();
        $sql = "INSERT INTO thulir_like (`agent`,`post$id`) VALUES ('$agent','1');";
        $result = $conn->query($sql);
        if($result){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}
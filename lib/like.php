<?php 
include '../lib/load.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['like'];
    $agent = $_SERVER['HTTP_USER_AGENT'];
    Like::check_agent($id,$agent);
}
else{
    echo "something went wrong!";
}
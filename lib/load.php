<?php 
include_once 'includes/connection.class.php';
include_once 'includes/cookie.class.php';
include_once 'includes/like.class.php';
function load_template($name){
    include __DIR__ . "/../templates/$name.php";
}
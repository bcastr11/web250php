<?php

$db_host = 'localhost';           
$db_user = 'root';              
$db_pass = '';                  
$db_name = 'cars';            


$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_error) {
    
    $mysqli = new mysqli($db_host, $db_user, $db_pass);
    
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    

    $mysqli->query("CREATE DATABASE IF NOT EXISTS $db_name");
    $mysqli->select_db($db_name);
}
?>
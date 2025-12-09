<?php
echo "<h2>Testing Wasmer MySQL</h2>";

$credentials = [
    ['localhost', 'root', ''],
    ['localhost', 'root', 'root'],
    ['127.0.0.1', 'root', ''],
    ['mysql', 'root', 'root'],
    ['mysql', 'root', '']
];

foreach ($credentials as $cred) {
    list($host, $user, $pass) = $cred;
    echo "Trying: $host, $user, $pass... ";
    
    $mysqli = @new mysqli($host, $user, $pass);
    if ($mysqli->connect_error) {
        echo "FAILED<br>";
    } else {
        echo "SUCCESS!<br>";
        
        // Try to create database
        if ($mysqli->query("CREATE DATABASE IF NOT EXISTS Cars")) {
            echo "Database 'Cars' ready<br>";
            $mysqli->select_db('Cars');
            
            // Try to create table
            $query = "CREATE TABLE IF NOT EXISTS inventory (VIN varchar(17) PRIMARY KEY, YEAR INT, Make varchar(50))";
            if ($mysqli->query($query)) {
                echo "Table 'inventory' created!<br>";
            }
        }
        break;
    }
}
?>
 <?php
$host = 'gateway01.us-east-1.prod.aws.tidbcloud.com';
$user = '29XCQK7XySi18S8.root';
$pass = 'HJmLyp8ClNoIuNIC'; 
$db = 'test';
$port = 4000;

// MUST USE SSL FOR TiDB
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, NULL, NULL, NULL); // Enable SSL
if (!$mysqli->real_connect($host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("TiDB SSL Connection failed: " . $mysqli->connect_error);
}

// Now select database
$mysqli->select_db("Cars");
?>
 <?php
$host = 'gateway01.us-west-2.prod.aws.tidbcloud.com';
$user = 'root';
$pass = 'HJmLyp8ClNoIuNIC';
$db = 'test';
$port = 4000;

// Enable SSL for TiDB
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, NULL, NULL, NULL);
$mysqli->real_connect($host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL);
/* check connection */
if ($mysqli->connect_error) {
    die("TiDB SSL Connection failed: " . $mysqli->connect_error);
}

$mysqli->query("SELECT 1");

//select a database to work with
$mysqli->select_db("Cars");
 
?>
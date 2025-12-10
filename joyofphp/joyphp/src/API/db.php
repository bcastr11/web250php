 <?php
$host = 'gateway01.us-west-2.prod.aws.tidbcloud.com';
$user = 'root';
$pass = 'hLLlzOJ19LardaLu';
$db = 'test';
$port = 4000;

// Enable SSL for TiDB
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, NULL, NULL, NULL);
$mysqli->real_connect($host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("Cars");
 
?>
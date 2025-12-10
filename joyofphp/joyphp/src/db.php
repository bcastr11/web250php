 <?php
$host = 'gateway01.us-east-1.prod.aws.tidbcloud.com';
$user = '29XCQK7XySi18S8.root';
$pass = 'HJmLyp8ClNoIuNIC'; 
$db = 'test';
$port = 4000;

$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, NULL, NULL, NULL);
if (!$mysqli->real_connect($host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("TiDB Connection failed: " . $mysqli->connect_error);
}

// Create database and table if they don't exist
$mysqli->query("CREATE DATABASE IF NOT EXISTS Cars");
$mysqli->select_db("Cars");

$table_sql = "CREATE TABLE IF NOT EXISTS inventory (
    VIN varchar(17) PRIMARY KEY, 
    YEAR INT, 
    Make varchar(50), 
    Model varchar(100),
    ASKING_PRICE DECIMAL(10,2)
)";
$mysqli->query($table_sql);

echo "<!-- Database and table ready -->";
?>
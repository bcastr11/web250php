<?php
// db-tidb.php - TiDB Cloud connection (MySQL compatible)
$db_host = 'gateway01.us-west-2.prod.aws.tidbcloud.com'; // Your TiDB host
$db_port = '4000'; // TiDB uses port 4000
$db_user = '29XCQK7XySi18S8.root'; // Your TiDB username
$db_pass = 'hLLlzOJ19LardaLu'; // Your TiDB password
$db_name = 'test'; // Default database or your DB name

// TiDB is MySQL compatible, use mysqli
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

if ($mysqli->connect_error) {
    die("TiDB Connection failed: " . $mysqli->connect_error);
}

// TiDB-specific: Enable ANSI_QUOTES if needed
$mysqli->query("SET sql_mode='ANSI_QUOTES'");

echo "<!-- Connected to TiDB Cloud -->";
?>
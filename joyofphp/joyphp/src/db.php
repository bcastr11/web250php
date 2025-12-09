 <?php
$mysqli = new mysqli('gateway01.us-west-2.prod.aws.tidbcloud.com', 'root', 'hLLlzOJ19LardaLu', 'test','4000');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("Cars");
 
?>
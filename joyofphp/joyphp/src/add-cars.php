<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Adding Sample Cars to TiDB</h2>";

// Use your TiDB connection
require_once 'db-tidb.php';

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected to TiDB Cloud<br>";

// First, make sure we're using the right database
$mysqli->select_db("Cars");
echo "Using database: Cars<br>";

// Add 3 sample cars
$cars = [
    ["1HGBH41JXMN109186", 2020, "Toyota", "Camry", 18000, 50000],
    ["2C3CDXBG4KH123456", 2019, "Honda", "Civic", 15000, 45000],
    ["3FAHP0HA2AR123456", 2021, "Ford", "Focus", 16500, 35000]
];

foreach ($cars as $car) {
    list($vin, $year, $make, $model, $price, $mileage) = $car;
    
    $query = "INSERT INTO inventory (VIN, YEAR, Make, Model, ASKING_PRICE, MILEAGE) 
              VALUES ('$vin', $year, '$make', '$model', $price, $mileage)
              ON DUPLICATE KEY UPDATE VIN=VIN";
    
    if ($mysqli->query($query)) {
        echo "✓ Added: $year $make $model<br>";
    } else {
        echo "✗ Error: " . $mysqli->error . "<br>";
    }
}

echo "<hr><h3>Done!</h3>";
echo '<a href="ViewCars.php">View Cars</a><br>';
echo '<a href="samsusedcars.html">Back to Home</a>';

$mysqli->close();
?>
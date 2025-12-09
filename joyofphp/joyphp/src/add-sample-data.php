<?php
require_once 'db-tidb.php';

echo "Adding sample cars to TiDB...<br>";

$cars = [
    ["1HGBH41JXMN109186", 2020, "Toyota", "Camry", 18000],
    ["2C3CDXBG4KH123456", 2019, "Honda", "Civic", 15000],
    ["3FAHP0HA2AR123456", 2021, "Ford", "Focus", 16500]
];

foreach ($cars as $car) {
    list($vin, $year, $make, $model, $price) = $car;
    $query = "INSERT IGNORE INTO inventory (VIN, YEAR, Make, Model, ASKING_PRICE) 
              VALUES ('$vin', $year, '$make', '$model', $price)";
    
    if ($mysqli->query($query)) {
        echo "Added: $year $make $model<br>";
    }
}

echo "<br>Done! <a href='ViewCars.php'>View Cars</a>";
?>
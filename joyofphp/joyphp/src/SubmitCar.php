
<html>
<head>
    <title>Car Saved</title>
</head>
<body bgcolor="#FFFFFF" text="#000000" >

<?php 

$db = new SQLite3('cars.db');

$VIN = $_POST['VIN'];
$Make = $_POST['Make'];
$Model = $_POST['Model'];
$Price = $_POST['Asking_Price'];

$stmt = $db->prepare("INSERT INTO inventory (VIN, Make, Model, ASKING_PRICE) VALUES (:vin, :make, :model, :price)");
$stmt->bindValue(':vin', $VIN);
$stmt->bindValue(':make', $Make);
$stmt->bindValue(':model', $Model);
$stmt->bindValue(':price', $Price);

if ($stmt->execute()) {
    echo "Car added successfully!";
} else {
    echo "Error adding car";
}
?>
</body>
</html>
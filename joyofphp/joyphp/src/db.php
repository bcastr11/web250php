<?php
// SQLite version for Wasmer
$db = new SQLite3('cars.db');

// Create table if not exists
$db->exec("CREATE TABLE IF NOT EXISTS inventory (
    VIN TEXT PRIMARY KEY,
    Make TEXT,
    Model TEXT,
    ASKING_PRICE REAL
)");
?>
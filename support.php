<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=inventory_system", "root", "Yadav@567");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("Connection failed: " . $e->getMessage());
}
?>
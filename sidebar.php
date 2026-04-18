<?php
include "../config/db.php";

$stmt = $conn->prepare("DELETE FROM products WHERE id=?");
$stmt->execute([$_GET['id']]);

header("Location: manage_products.php");
?>
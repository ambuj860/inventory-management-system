<?php
include "../config/db.php";

if(isset($_POST['update'])){
    $stmt = $conn->prepare("UPDATE products SET name=?, quantity=?, price=? WHERE id=?");
    $stmt->execute([
        $_POST['name'],
        $_POST['quantity'],
        $_POST['price'],
        $_POST['id']
    ]);

    header("Location: manage_products.php");
}
?>
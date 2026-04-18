<?php
include "../config/db.php";
include "sidebar.php";

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    $path = "../uploads/products/".$img;
    move_uploaded_file($tmp, $path);

    $stmt = $conn->prepare("INSERT INTO products(name,quantity,price,image) VALUES(?,?,?,?)");
    $stmt->execute([$name, $qty, $price, $img]);
    
    header("Location: manage_products.php");
    exit();
}
?>

<link rel="stylesheet" href="../assets/css/style.css">

<div class="main-content">
    <h2>➕ Add New Product</h2>

    <div style="max-width: 500px;">
        <div class="card">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" placeholder="Enter product name" required>
                </div>

                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="quantity" placeholder="Enter quantity" required>
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" placeholder="Enter price" step="0.01" required>
                </div>

                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" name="image" accept="image/*" required>
                </div>

                <button type="submit" name="add" class="success">✅ Add Product</button>
            </form>
        </div>
    </div>
</div>
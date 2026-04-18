<?php
session_start();

if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}


?>

<link rel="stylesheet" href="../assets/css/style.css">

<div class="main-content">
    <h2>📊 Admin Dashboard</h2>

    <div class="dashboard-grid">

         <div class="card">
            <h3>👤 My Profile</h3>
            <p>Edit your profile</p>
            <a href="../profile.php"><button>Open</button></a>
        </div>

        <div class="card">
            <h3>➕ Add Product</h3>
            <p>Create new products</p>
            <a href="add_product.php"><button>Go</button></a>
        </div>

        <div class="card">
            <h3>📦 Manage Products</h3>
            <p>Edit & remove products</p>
            <a href="manage_products.php"><button>Go</button></a>
        </div>

        <div class="card">
            <h3>📋 Requests</h3>
            <p>View user requests</p>
            <a href="view_requests.php"><button>Go</button></a>
        </div>

         <a href="../auth/logout.php"><button style="background: linear-gradient(135deg, #ff4757 0%, #ff6348 100%); border-color: #ff4757;">🚪 Logout</button></a>

       

    </div>
</div>
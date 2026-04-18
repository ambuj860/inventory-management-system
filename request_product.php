<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>

<link rel="stylesheet" href="../assets/css/style.css">

<div style="display:flex; justify-content:space-between; padding:15px; background:#111;">
    
    <h3>Inventory System</h3>

    <div>
        <a href="../profile.php"><button>Profile</button></a>

        <?php if(isset($_SESSION['user'])) { ?>
            <a href="../auth/logout.php">
                <button style="background:red;">Logout</button>
            </a>
        <?php } ?>
    </div>
</div>
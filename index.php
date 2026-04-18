<?php
include "../config/db.php";

$success = false;
$error = false;

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['role'];

    $stmt = $conn->prepare("INSERT INTO users (name,email,password,role) VALUES (?,?,?,?)");
    
    if($stmt->execute([$name, $email, $password, $role])){
        $success = "✅ Registration successful! <a href='login.php' style='color: #667eea; text-decoration: none; font-weight: bold;'>Login now</a>";
    } else {
        $error = "❌ Error registering. Email might already exist.";
    }
}
?>

<link rel="stylesheet" href="../assets/css/style.css">

<div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
    <div style="width: 100%; max-width: 400px; padding: 20px;">
        <div class="card">
            <h2 style="text-align: center; margin-bottom: 30px;">📝 Register</h2>

            <?php if($success): ?>
                <div style="background: #d4edda; color: #155724; padding: 12px; border-radius: 8px; margin-bottom: 20px;">
                    <?php echo $success; ?>
                </div>
            <?php elseif($error): ?>
                <div style="background: #f8d7da; color: #721c24; padding: 12px; border-radius: 8px; margin-bottom: 20px;">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Create a strong password" required>
                </div>

                <div class="form-group">
                    <label>Account Type</label>
                    <select name="role" required>
                        <option value="user">💼 Regular User</option>
                        <option value="admin">👑 Admin</option>
                    </select>
                </div>

                <button type="submit" name="register" class="success" style="width: 100%; padding: 12px;">✅ Register</button>
            </form>

            <p style="text-align: center; margin-top: 20px; color: #666;">
                Already have an account? <a href="login.php" style="color: #667eea; text-decoration: none; font-weight: bold;">Login</a>
            </p>
        </div>
    </div>
</div>
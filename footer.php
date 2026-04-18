<?php
session_start();
include "../config/db.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ✅ Prepared statement (SECURE)
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    // ✅ PDO fetch
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['user'] = $user;

        if($user['role'] == 'admin'){
            header("Location: ../admin/dashboard.php");
        } else {
            header("Location: ../user/dashboard.php");
        }
        exit();
    } else {
        $error = "❌ Invalid email or password";
    }
}
?>

<link rel="stylesheet" href="../assets/css/style.css">

<div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
    <div style="width: 100%; max-width: 400px; padding: 20px;">
        <div class="card">
            <h2 style="text-align: center; margin-bottom: 30px;">🔐 Login</h2>

            <?php if(isset($error)): ?>
                <div style="background: #f8d7da; color: #721c24; padding: 12px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" name="login" class="success" style="width: 100%; padding: 12px;">🔓 Login</button>
            </form>

            <p style="text-align: center; margin-top: 20px; color: #666;">
                Don't have an account? <a href="register.php" style="color: #667eea; text-decoration: none; font-weight: bold;">Sign up</a>
            </p>
        </div>
    </div>
</div>
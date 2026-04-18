<?php include "includes/header.php"; ?>

<link rel="stylesheet" href="assets/css/style.css">

<style>
    .page-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 15px 40px;
        color: white;
    }

    .page-nav a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .page-nav a:hover {
        opacity: 0.8;
    }

    .page-content {
        max-width: 900px;
        margin: 60px auto;
        padding: 0 20px;
    }

    .page-content h1 {
        color: #667eea;
        font-size: 36px;
        margin-bottom: 30px;
    }

    .page-content p {
        color: #666;
        line-height: 1.8;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .highlight-box {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 30px;
        border-radius: 12px;
        margin: 30px 0;
    }
</style>

<div class="page-nav">
    <h3>📱 About Us</h3>
    <div>
        <a href="index.php">← Back to Home</a>
    </div>
</div>

<div class="page-content">
    <h1>About Inventory Management System</h1>

    <p>
        The <strong>Inventory Management System (IMS)</strong> is a modern, user-friendly platform designed to help businesses of all sizes efficiently manage their products, inventory levels, and sales operations.
    </p>

    <div class="highlight-box">
        <h2 style="margin-top: 0; color: white;">Our Mission</h2>
        <p style="color: white; margin-bottom: 0;">
            To provide businesses with a reliable, secure, and easy-to-use inventory management solution that streamlines operations and increases productivity.
        </p>
    </div>

    <h2 style="color: #667eea; margin-top: 40px;">Why Choose IMS?</h2>

    <p>✅ <strong>User-Friendly Interface:</strong> Intuitive design makes it easy for anyone to use, regardless of technical expertise.</p>

    <p>✅ <strong>Built with Modern Technology:</strong> PHP + MySQL backend with responsive frontend for seamless performance.</p>

    <p>✅ <strong>Secure & Reliable:</strong> Encrypted authentication, secure data storage, and regular backups to protect your valuable data.</p>

    <p>✅ <strong>Scalable Solution:</strong> Works for small startups and large enterprises alike.</p>

    <p>✅ <strong>Real-time Analytics:</strong> Get instant insights into your inventory and sales performance.</p>

    <h2 style="color: #667eea; margin-top: 40px;">Key Features</h2>

    <p>
        🏢 <strong>Product Management:</strong> Create, edit, and manage your entire product catalog.<br>
        📊 <strong>Inventory Tracking:</strong> Monitor stock levels in real-time.<br>
        🛒 <strong>Sales Management:</strong> Process orders and manage customer requests.<br>
        👥 <strong>Role-Based Access:</strong> Different permissions for admins and regular users.<br>
        🔐 <strong>Data Security:</strong> Industry-standard encryption and protection protocols.
    </p>

    <h2 style="color: #667eea; margin-top: 40px;">Contact Us</h2>

    <p>
        Have questions? We'd love to hear from you! Reach out to our support team at <strong>support@ims.com</strong> or visit our <a href="support.php" style="color: #667eea; font-weight: bold;">Support</a> page.
    </p>
</div>

<?php include "includes/footer.php"; ?>
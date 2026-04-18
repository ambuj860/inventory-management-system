<?php
session_start();
include "../config/db.php";

// admin check
if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

include "sidebar.php";

// fetch requests with joins
$stmt = $conn->query("
SELECT r.*, u.name as user_name, p.name as product_name 
FROM requests r
JOIN users u ON r.user_id = u.id
JOIN products p ON r.product_id = p.id
ORDER BY r.id DESC
");
?>

<link rel="stylesheet" href="../assets/css/style.css">
<style>
    .request-card {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 20px;
        align-items: center;
    }

    .request-info p {
        margin: 8px 0;
    }

    .request-actions {
        display: flex;
        gap: 10px;
        flex-direction: column;
    }

    .request-actions a {
        text-decoration: none;
    }

    .request-actions button {
        padding: 10px 15px;
        font-size: 13px;
        width: auto;
    }
</style>

<div class="main-content">
    <h2>📋 Product Requests</h2>

    <div style="display: grid; gap: 20px;">
        <?php if($stmt->rowCount() == 0): ?>
            <div class="card" style="text-align: center;">
                <p style="font-size: 18px; color: #999;">No requests yet</p>
            </div>
        <?php else: ?>
            <?php foreach($stmt as $r){ ?>
                <div class="card request-card">
                    <div class="request-info">
                        <h3 style="margin-top: 0;">👤 <?php echo htmlspecialchars($r['user_name']); ?></h3>
                        <p><strong>Product:</strong> <?php echo htmlspecialchars($r['product_name']); ?></p>
                        <p><strong>Quantity Requested:</strong> <?php echo htmlspecialchars($r['quantity']); ?></p>
                        <p>
                            <strong>Status:</strong>
                            <?php
                                if($r['status'] == 'pending'){
                                    echo '<span class="status-pending">⏳ PENDING</span>';
                                } elseif($r['status'] == 'approved'){
                                    echo '<span class="status-approved">✅ APPROVED</span>';
                                } else {
                                    echo '<span class="status-rejected">❌ REJECTED</span>';
                                }
                            ?>
                        </p>
                    </div>

                    <?php if($r['status'] == 'pending'){ ?>
                        <div class="request-actions">
                            <a href="update_request.php?id=<?php echo htmlspecialchars($r['id']); ?>&status=approved">
                                <button class="success">✅ Approve</button>
                            </a>

                            <a href="update_request.php?id=<?php echo htmlspecialchars($r['id']); ?>&status=rejected" onclick="return confirm('Reject this request?');">
                                <button class="danger">❌ Reject</button>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php endif; ?>
    </div>
</div>
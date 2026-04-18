<?php
include "../config/db.php";
include "sidebar.php";

$stmt = $conn->query("SELECT * FROM products");
?>

<link rel="stylesheet" href="../assets/css/style.css">
<style>
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .modal-overlay.show {
        display: flex;
    }

    .modal-content {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        width: 90%;
        max-width: 400px;
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .modal-content h2 {
        color: #667eea;
        margin-top: 0;
    }

    .modal-content input {
        margin-bottom: 15px;
    }

    .modal-buttons {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .modal-buttons button {
        flex: 1;
        width: 100%;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 25px;
        margin-top: 25px;
    }
</style>

<script>
function openModal(id, name, qty, price){
    document.getElementById('pid').value = id;
    document.getElementById('pname').value = name;
    document.getElementById('pqty').value = qty;
    document.getElementById('pprice').value = price;
    document.getElementById('modal').classList.add('show');
}

function closeModal(){
    document.getElementById('modal').classList.remove('show');
}

document.addEventListener('DOMContentLoaded', function(){
    const editBtns = document.querySelectorAll('.edit-btn');
    editBtns.forEach(btn => {
        btn.addEventListener('click', function(){
            openModal(
                this.getAttribute('data-id'),
                this.getAttribute('data-name'),
                this.getAttribute('data-qty'),
                this.getAttribute('data-price')
            );
        });
    });

    document.getElementById('modal').addEventListener('click', function(e){
        if(e.target === this) closeModal();
    });
});
</script>

<div class="main-content">
    <h2>📦 Manage Products</h2>

    <div class="product-grid">
        <?php foreach($stmt as $row){ ?>
            <div class="card">
                <img src="../uploads/products/<?php echo htmlspecialchars($row['image']); ?>" width="100%" style="height: 200px; object-fit: cover;">

                <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                <p><strong>Quantity:</strong> <?php echo htmlspecialchars($row['quantity']); ?></p>
                <p><strong>Price:</strong> ₹<?php echo htmlspecialchars($row['price']); ?></p>

                <button type="button" class="edit-btn" data-id="<?php echo htmlspecialchars($row['id']); ?>" data-name="<?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?>" data-qty="<?php echo htmlspecialchars($row['quantity'], ENT_QUOTES, 'UTF-8'); ?>" data-price="<?php echo htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8'); ?>">✏️ Edit</button>

                <a href="delete_product.php?id=<?php echo htmlspecialchars($row['id']); ?>" onclick="return confirm('Are you sure?');">
                    <button type="button" class="danger">🗑️ Delete</button>
                </a>
            </div>
        <?php } ?>
    </div>

    <!-- MODAL -->
    <div id="modal" class="modal-overlay">
        <div class="modal-content">
            <h2>Update Product</h2>
            <form method="POST" action="update_product.php">
                <input type="hidden" name="id" id="pid">
                
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" id="pname" required>
                </div>

                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="quantity" id="pqty" required>
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" id="pprice" step="0.01" required>
                </div>

                <div class="modal-buttons">
                    <button type="submit" name="update" class="success">Update</button>
                    <button type="button" onclick="closeModal()" class="danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
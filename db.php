* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #333;
    min-height: 100vh;
}

/* ==================== NAVBAR ==================== */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    position: sticky;
    top: 0;
    z-index: 100;
}

.navbar h3 {
    color: white;
    font-size: 22px;
    font-weight: 600;
}

.navbar div {
    display: flex;
    gap: 10px;
}

.navbar button, .navbar a button {
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 8px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}

.navbar button:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

/* ==================== SIDEBAR ==================== */
.sidebar {
    width: 250px;
    height: 100vh;
    background: linear-gradient(180deg, #2d3561 0%, #1a1f3a 100%);
    padding: 30px 20px;
    position: fixed;
    left: 0;
    top: 0;
    box-shadow: 4px 0 15px rgba(0, 0, 0, 0.2);
    overflow-y: auto;
}

.sidebar h2 {
    color: #667eea;
    font-size: 24px;
    margin-bottom: 30px;
    text-align: center;
    font-weight: 700;
}

.sidebar a {
    display: block;
    text-decoration: none;
    margin-bottom: 12px;
}

.sidebar button {
    width: 100%;
    padding: 12px;
    background: rgba(102, 126, 234, 0.2);
    color: #fff;
    border: 1px solid #667eea;
    border-radius: 8px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.sidebar button:hover {
    background: #667eea;
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
}

.sidebar button[style*="background:red"] {
    border-color: #ff4757;
    background: rgba(255, 71, 87, 0.2);
}

.sidebar button[style*="background:red"]:hover {
    background: #ff4757;
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(255, 71, 87, 0.4);
}

/* ==================== MAIN CONTENT ==================== */
.main-content {
    margin-left: 250px;
    padding: 30px;
    min-height: 100vh;
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.container h1, .container h2, .main-content h1, .main-content h2 {
    color: white;
    margin-bottom: 30px;
    font-size: 32px;
    font-weight: 700;
}

/* ==================== CARDS ==================== */
.card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    margin-bottom: 20px;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}

.card h3 {
    color: #667eea;
    margin-top: 0;
    font-size: 20px;
    margin-bottom: 15px;
}

.card p {
    color: #666;
    margin: 10px 0;
    font-size: 14px;
}

.card img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
}

.card img:hover {
    transform: scale(1.05);
}

/* ==================== GRID LAYOUTS ==================== */
.card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 25px;
    margin-bottom: 30px;
}

.dashboard-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

/* ==================== FORMS ==================== */
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #333;
    font-weight: 600;
    font-size: 14px;
}

input, select, textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 14px;
    font-family: inherit;
    transition: all 0.3s ease;
}

input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

textarea {
    resize: vertical;
    min-height: 100px;
}

/* ==================== BUTTONS ==================== */
button, .btn {
    padding: 12px 24px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
    text-decoration: none;
    width: auto;
    margin-top: 10px;
}

button:hover, .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}

button:active, .btn:active {
    transform: translateY(0);
}

button.danger, button[style*="background:red"] {
    background: linear-gradient(135deg, #ff4757 0%, #ff6348 100%);
}

button.danger:hover, button[style*="background:red"]:hover {
    box-shadow: 0 6px 20px rgba(255, 71, 87, 0.4);
}

button.success {
    background: linear-gradient(135deg, #2ed573 0%, #26de81 100%);
}

button.success:hover {
    box-shadow: 0 6px 20px rgba(46, 213, 115, 0.4);
}

/* ==================== STATUS BADGES ==================== */
.status-pending {
    display: inline-block;
    padding: 6px 12px;
    background: #fff3cd;
    color: #856404;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

.status-approved {
    display: inline-block;
    padding: 6px 12px;
    background: #d4edda;
    color: #155724;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

.status-rejected {
    display: inline-block;
    padding: 6px 12px;
    background: #f8d7da;
    color: #721c24;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

/* ==================== RESPONSIVE ==================== */
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        height: auto;
        padding: 15px;
        position: relative;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .main-content {
        margin-left: 0;
        padding: 15px;
    }

    .card-grid {
        grid-template-columns: 1fr;
    }

    .dashboard-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    button, input, select {
        font-size: 16px;
    }
}

/* ==================== ANIMATIONS ==================== */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card, .container {
    animation: fadeIn 0.5s ease-out;
}

/* ==================== HERO SECTION ==================== */
.hero {
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 12px;
    margin-bottom: 30px;
}

.hero h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 15px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 30px;
    opacity: 0.9;
}

.hero button {
    font-size: 16px;
    padding: 14px 40px;
}
<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

?>
<head>
<link rel="stylesheet" href="../assets/css/mycss.css">
</head>
<div class="dashboard-container">
    <aside class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="users.php">Users</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="#">Product Categories</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </aside>

    <main class="dashboard-content">
    <h1>Welcome, <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Admin'; ?>!</h1>

        <p>Choose a menu from the sidebar to manage your data.</p>
    </main>
</div>

<?php include_once '../inc/footer.php'; ?>

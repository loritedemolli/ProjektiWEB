<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

include_once '../database/db.php';
include_once '../database/user.php';

$db = new Database();
$user = new User($db->getConnection());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Mere rolin nga forma

    if ($user->createUser($name, $surname, $username, $password, $role)) {
        header("Location: users.php");
        exit;
    } else {
        echo "<p>Error adding user.</p>";
    }
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
            <li><a href="categories.php">Product Categories</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </aside>

    <main class="dashboard-content">
        <h1>Add New User</h1>
        <form class="fo" action="user_create.php" method="POST">
            <label>Name:</label>
            <input type="text" name="name" required>
            <label>Surname:</label>
            <input type="text" name="surname" required>
            <label>Username (Email):</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <label>Role:</label>
            <select name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Create User</button>
        </form>
    </main>
</div>

<?php include_once '../inc/footer.php'; ?>

<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

include_once '../database/db.php';
include_once '../database/user.php';

$db = new Database();
$userObj = new User($db->getConnection());


if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    if ($userObj->deleteUser($delete_id)) {
        header("Location: users.php");
        exit;
    } else {
        echo "<p>Error deleting user.</p>";
    }
}

$query = "SELECT id, name, surname, username, role FROM users";
$users = $db->getConnection()->query($query)->fetchAll(PDO::FETCH_ASSOC);
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
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </aside>

    <main class="dashboard-content">
        <h1>User Management</h1>
        <a href="user_create.php" class="btn">Add New User</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo htmlspecialchars($user['name']); ?></td>
                    <td><?php echo htmlspecialchars($user['surname']); ?></td>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td><?php echo htmlspecialchars($user['role']); ?></td>
                    <td>
                        <a href="user_edit.php?id=<?php echo $user['id']; ?>">Edit</a> |
                        <a href="users.php?delete_id=<?php echo $user['id']; ?>" 
                           onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</div>



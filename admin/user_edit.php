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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $role = $_POST['role'];

    if ($userObj->updateUser($id, $name, $surname, $username, $role)) {
        header("Location: users.php");
        exit;
    } else {
        echo "<p>Error updating user.</p>";
    }
}

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = :id";
$stmt = $db->getConnection()->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
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
        <h1>Edit User</h1>
        <form class="fo" action="user_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>

            <label>Surname:</label>
            <input type="text" name="surname" value="<?php echo htmlspecialchars($user['surname']); ?>" required>

            <label>Username (Email):</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>

            <label>Role:</label>
            <select name="role" required>
                <option value="user" <?php if ($user['role'] == 'user') echo 'selected'; ?>>User</option>
                <option value="admin" <?php if ($user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
            </select>

            <button type="submit">Update User</button>
        </form>
    </main>
</div>

<?php include_once '../inc/footer.php'; ?>

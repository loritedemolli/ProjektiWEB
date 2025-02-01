<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

include_once '../database/db.php';
include_once '../database/Product.php';

$db = new Database();
$productObj = new Product($db->getConnection());

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    if ($productObj->deleteProduct($delete_id)) {
        header("Location: products.php");
        exit;
    } else {
        echo "<p>Error deleting product.</p>";
    }
}

$products = $productObj->getAllProducts(); 
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
        <h1>Product Management</h1>
        <a href="product_create.php" class="btn">Add New Product</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Discount Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Category</th> 
                <th>Actions</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td><?php echo htmlspecialchars($product['brand']); ?></td>
                    <td><?php echo htmlspecialchars($product['price']); ?>€</td>
                    <td><?php echo htmlspecialchars($product['discount_price']); ?>€</td>
                    <td><?php echo htmlspecialchars($product['short_description']); ?></td>
                    <td><img src="../<?php echo $product['image']; ?>" width="50"></td>
                    <td><?php echo htmlspecialchars($product['category']); ?></td> 
                    <td>
                        <a href="product_edit.php?id=<?php echo $product['id']; ?>">Edit</a> |
                        <a href="products.php?delete_id=<?php echo $product['id']; ?>" 
                           onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</div>



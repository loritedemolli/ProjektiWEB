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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $discount_price = $_POST['discount_price'];
    $short_description = $_POST['short_description'];
    $category = $_POST['category']; 
    $image = 'assets/img/pages/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], '../' . $image);

    if ($productObj->createProduct($name, $brand, $price, $discount_price, $short_description, $image, $category)) {
        header("Location: products.php");
        exit;
    } else {
        echo "<p>Error adding product.</p>";
    }
}
?>

<head>
    <link rel="stylesheet" href="../assets/css/mycss.css">
</head>

<form class="fo" action="product_create.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="text" name="brand" placeholder="Brand">
    <input type="number" name="price" placeholder="Price" required>
    <input type="number" name="discount_price" placeholder="Discount Price">
    <textarea name="short_description" placeholder="Short Description"></textarea>
    <input type="file" name="image" required>

    <select name="category" required>
        <option value="makeup">Makeup</option>
        <option value="skincare">Skincare</option>
        <option value="perfume">Perfume</option>
    </select>

    <button type="submit">Add Product</button>
</form>

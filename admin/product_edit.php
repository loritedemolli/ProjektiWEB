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

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $product = $productObj->getProductById($product_id); 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $discount_price = $_POST['discount_price'];
    $short_description = $_POST['short_description'];
    $category = $_POST['category']; 
    $image = $product['image']; 

    if ($_FILES['image']['name']) {
        $image = 'assets/img/pages/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], '../' . $image);
    }

    if ($productObj->updateProduct($product_id, $name, $brand, $price, $discount_price, $short_description, $image, $category)) {
        header("Location: products.php");
        exit;
    } else {
        echo "<p>Error updating product.</p>";
    }
}
?>

<head>
    <link rel="stylesheet" href="../assets/css/mycss.css">
</head>

<form class="fo" action="product_edit.php?id=<?php echo $product['id']; ?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Product Name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
    <input type="text" name="brand" placeholder="Brand" value="<?php echo htmlspecialchars($product['brand']); ?>">
    <input type="number" name="price" placeholder="Price" value="<?php echo htmlspecialchars($product['price']); ?>" required>
    <input type="number" name="discount_price" placeholder="Discount Price" value="<?php echo htmlspecialchars($product['discount_price']); ?>">
    <textarea name="short_description" placeholder="Short Description"><?php echo htmlspecialchars($product['short_description']); ?></textarea>
    <input type="file" name="image">
    
    <select name="category" required>
        <option value="makeup" <?php echo ($product['category'] == 'makeup') ? 'selected' : ''; ?>>Makeup</option>
        <option value="skincare" <?php echo ($product['category'] == 'skincare') ? 'selected' : ''; ?>>Skincare</option>
        <option value="perfume" <?php echo ($product['category'] == 'perfume') ? 'selected' : ''; ?>>Perfume</option>
    </select>

    <button type="submit">Update Product</button>
</form>

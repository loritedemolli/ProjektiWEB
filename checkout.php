<?php
require 'auth.php';
require 'cart.class.php';

if (!$auth->isAuthenticated()) {
    header("Location: login.php");
    exit();
}

$cart = new Cart($pdo);
$userId = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process payment (fake for now)
    echo "Order Placed!";
    exit();
}
?>
<form method="POST">
    <button type="submit">Place Order</button>
</form>

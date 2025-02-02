<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include_once 'inc/header.php';
?>

<head>
    <link rel="stylesheet" href="assets/css/mycss.css">
</head>
<section class="cart-container">
    <h2>Your Shopping Cart</h2>
    <div id="cart-items">
        <!-- Cart items will be dynamically added here -->
    </div>
    <div class="cart-footer">
        <p id="empty-cart-message">Your cart is empty. Add some products to continue.</p>
        <p id="total-price">Total: €0.00</p>
    </div>
</section>


<?php
include_once 'inc/footer.php';
?>
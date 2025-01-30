<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include_once 'inc/header.php';
?>

<main>
    <section class="cart-container">
        <h2>Your Shopping Cart</h2>
        <div id="cart-items">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div class="cart-footer">
            <p id="empty-cart-message">Your cart is empty. Add some products to continue.</p>
            <button id="checkout-btn" disabled>Proceed to Checkout</button>
        </div>
    </section>
</main>
<script src="assets/js/cart.js"></script>   
<?php
include_once 'inc/footer.php';
?>
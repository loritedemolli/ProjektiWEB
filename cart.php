<?php
session_start();

class Cart {
    public function __construct() {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function addItem($item) {
        $_SESSION['cart'][] = $item;
    }

    public function removeItem($index) {
        if (isset($_SESSION['cart'][$index])) {
            unset($_SESSION['cart'][$index]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
        }
    }

    public function getCart() {
        return $_SESSION['cart'];
    }
}

class Auth {
    private $users = [
        'user@example.com' => 'password123' // This should be stored securely using hashing in a database
    ];

    public function login($email, $password) {
        if (isset($this->users[$email]) && $this->users[$email] === $password) {
            $_SESSION['user'] = $email;
            return true;
        }
        return false;
    }

    public function logout() {
        session_destroy();
        header("Location: login.php");
        exit();
    }

    public function isAuthenticated() {
        return isset($_SESSION['user']);
    }
}

$auth = new Auth();
if (!$auth->isAuthenticated() && basename($_SERVER['PHP_SELF']) !== 'login.php') {
    header("Location: login.php");
    exit();
}

$cart = new Cart();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $item = [
            'name' => $_POST['name'],
            'price' => $_POST['price']
        ];
        $cart->addItem($item);
    }
    if (isset($_POST['remove'])) {
        $cart->removeItem($_POST['index']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="css/cart.css">
</head>
<body>
    
    <header>
        <div id = "header-bar">
            <p><b>FREE SHIPPING WITH 50€ PURCHASE</b></p>
        </div>
    <div class="navbar">
        <h1>Diva Glow</h1>
      <nav>
        <a href="projekti.html">Home</a>
        <a href="bestsellers.html">Best Sellers</a>
        <a href="aboutus.html">About Us</a>
        <a href="contactus.html">Contact</a>
        <a href="loginform.html">Log In</a>
        <a href="cart.html"><img src="fotot/cart.png" alt="Cart" class="cart-icon"> Cart</a>
      </nav>
    </div>
    </header>

    
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

    
    <footer>
        <div class="footer-main">
            <div class="footer-section brand-info">
                <h3>Diva Glow</h3>
                <p>Explore our premium range of beauty products and find your perfect look.</p>
            </div>
    
        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>  
    
        <div class="footer-section support">
            <h3>Customer Support</h3>
            <ul>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Shipping & Returns</a></li>
            </ul>
        </div>
    
        <div class="footer-section payment-methods">git 
            <h3>Payment Methods</h3>
            <img src="fotot/visa.png" alt="Visa">
            <img src="fotot/mastercard.png" alt="Mastercard">
            <img src="fotot/pay.png" alt="PayPal">
        </div>
    
        <div class="footer-section social-media">
            <h3>Follow Us</h3>
            <a href="https://facebook.com"><img src="fotot/facebook.png" alt="facebook"></a>
            <a href="https://instagram.com"><img src="fotot/i.png" alt="instagram"></a>
            <a href="https://tiktok.com"><img src="fotot/ti.png" alt="tik tok"></a>
        </div>
        </div>
    
    <div class="footer-bottom">
        <p>&copy; 2024 Diva Glow. All Rights Reserved.</p>
    </div>
    </footer>

    <script src="js/cart.js"></script>
</body>
</html>


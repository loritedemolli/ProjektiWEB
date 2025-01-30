<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$base_url = "/ProjektiWEB/"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diva Glow</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
   
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/mycss.css">
</head>
<body>
    <header>
        <div id="header-bar">
            <p><b>FREE SHIPPING WITH 50€ PURCHASE</b></p>
        </div>
        <div class="nav-bar">
            <h1>Diva Glow</h1>
            <nav>
                <a href="<?php echo $base_url; ?>index.php">Home</a>
                <a href="<?php echo $base_url; ?>bestsellers.php">Best Sellers</a>
                <a href="<?php echo $base_url; ?>aboutus.php">About Us</a>
                <a href="<?php echo $base_url; ?>contactus.php">Contact</a>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="<?php echo $base_url; ?>logout.php">Logout</a>
                <?php else: ?>
                    <a href="<?php echo $base_url; ?>login.php">Log In</a>
                <?php endif; ?>

                <a href="<?php echo $base_url; ?>cart.php">
                    <img src="<?php echo $base_url; ?>assets/img/pages/cart.png" alt="Shopping Cart" class="cart-icon">Cart
                </a>
            </nav>
        </div>
    </header>




<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include_once 'inc/header.php';
?>
<section class="hero-section">
    <div class="hero-content">
        <h2>Discover Your Inner Diva</h2>
        <p>Find the best products for beauty, skincare and fragrance. Up to 60% off on selected items.</p>
        <button class="search-button">
            <input type="text" placeholder="Search...">
        </button>
    </div>
</section>

<div class="container">
    <div class="product-category">
        <a href="makeup.php">
            <img src="assets/img/pages/make.jpg" alt="Make up pic">
            <div class="product-info">
                <p>Make Up</p>
                <p>Discover the best make up products!</p>
            </div>
        </a>
    </div>

    <div class="product-category">
        <a href="perfume.php">
            <img src="assets/img/pages/prada.jpg" alt="perfume">
            <div class="product-info">
                <p>Perfumes</p>
                <p>Elegant perfumes for every ocassion!</p>
            </div>
        </a>
    </div>

    <div class="product-category">
        <a href="skincare.php">
            <img src="assets/img/pages/skincare.jpg" alt="skincare">
            <div class="product-info">
                <p>Skincare</p>
                <p>Keep your skin glowing and fresh</p>
            </div>
        </a>
    </div>
</div>

<?php
include_once 'inc/footer.php';
?>
<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include_once 'inc/header.php';

include_once 'database/db.php';
include_once 'database/product.php';

$db = new Database();
$productObj = new Product($db->getConnection());

$products = $productObj->getAllProducts();
$category = 'makeup';
$products = $productObj->getProductsByCategory($category);


?>

<!--Pershkrimi per produktet dhe dropdown boxi per kategorizimin sipas brendeve-->
<section id="makeup-products">
    <div class="intro">
        <h2>Explore Our Premium Make Up Collection</h2>
        <p>Browse through our exclusive selection of beauty products. Whether you are looking for a flawless foundation
            or bold lip colors, Diva Glow has got you covered!</p>
    </div>

    <div class="brands-category">
        <h3>Browse by Brand</h3>
        <select id="brand-dropdown" class="dropdown-box">
            <option value="" disabled selected>Select a Brand</option>
            <option value="all">All Products</option>
            <option value="ysl">Yves Saint Laurent</option>
            <option value="rare-beauty">Rare Beauty</option>
            <option value="charlotte-tilbury">Charlotte Tilbury</option>
            <option value="chanel">Chanel</option>
        </select>
    </div>
    <div class="product-container">
        <?php foreach ($products as $product): ?>
            <div class="produkti" data-brand="<?php echo htmlspecialchars($product['brand']); ?>">
                <img src="<?php echo htmlspecialchars($product['image']); ?>"
                    alt="<?php echo htmlspecialchars($product['brand']); ?>">
                <div class="produkti-info">
                    <p><?php echo htmlspecialchars($product['name']); ?></p>
                    <?php if (!empty($product['discount_price']) && $product['discount_price'] > 0): ?>
                        <p class="zbritja"><?php echo htmlspecialchars($product['discount_price']); ?>€</p>
                        <p class="original-price"><?php echo htmlspecialchars($product['price']); ?>€</p>
                    <?php else: ?>
                        <p class="normal-price"><?php echo htmlspecialchars($product['price']); ?>€</p>
                    <?php endif; ?>
                    <p class="short-description">
                        <?php echo !empty($product['short_description']) ? htmlspecialchars($product['short_description']) : 'No description available'; ?>
                    </p>
                    <button class="buy-now">Buy Now</button>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<script>
    document.getElementById("brand-dropdown").addEventListener("change", function () {
        let selected = this.value;
        let produktet = document.querySelectorAll(".produkti");
        //for each loop me i shfaq ose fsheh produktet
        produktet.forEach(function (product) {
            if (selected === "all" || product.getAttribute("data-brand") === selected) {
                product.style.display = "flex"; //shfaqe
            } else {
                product.style.display = "none";
            }
        });
    });
</script>
<?php
include_once 'inc/footer.php';
?>
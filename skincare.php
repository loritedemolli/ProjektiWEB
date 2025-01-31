<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include_once 'inc/header.php';
?>
<section id="makeup-products">
         <div class="intro">
            <h2>Explore Our Premium Skincare Collection</h2>
            <p>The best products of skincare. Make your skin glow with Diva Glow!</p>
        </div>
           <div class="brands-category">
            <h3>Browse by Brand</h3>
            <select id="brand-dropdown" class="dropdown-box">
                <option value="" disabled selected>Select a Brand</option>
                <option value="all">All Products</option>
                <option value="fenty">Fenty Skin</option>
                <option value="cerave">Cera Ve</option>
                <option value="laroche">La Roche Posay</option>
                <option value="ordinary">The Ordinary</option>
            </select>
     </div>
     <div class="product-container">
        <div class="produkti" data-brand="laroche">
            <img src="assets/img/pages/skincare/larochecleanser.jpg" alt="larochecleanser">
            <div class="produkti-info">
                <p>La Roche Posay Toleriane Hydrating Gentle Facial Cleanser 400ml</p>
                <p class="zbritja">25.00€</p>  
                <p class="original-price">31.00€</p> 
                <p class="short-description">For normal to dry skin.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
        <div class="produkti"data-brand="fenty">
            <img src="assets/img/pages/skincare/fentygel.jpg" alt="fg">
            <div class="produkti-info">
                <p>Fenty Skin Instant Reset Overnight Recovery Gel-Cream</p>
                <p>14.00€</p>
                <p class="short-description">Facial skin care for fine lines , wrinkles , dull and dry skin.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>

        <div class="produkti"data-brand="ordinary">
            <img src="assets/img/pages/skincare/glycolic.jpg" alt="glycolic">
            <div class="produkti-info">
                <p>The Ordinary Glycolic Acid 7% Toning Solution-240ml</p>
                <p class="zbritja">15.00€</p>  
                <p class="original-price">22.00€</p> 
                <p class="short-description">Dark spots whitening , fights acne and exfoliates.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
   
        <div class="produkti"data-brand="laroche">
            <img src="assets/img/pages/skincare/larochespf.jpg" alt="spf">
            <div class="produkti-info">
                <p>La Roche-Posay Anthelios Gel-Cream Mattifying Sunscreen Gel 50+</p>
                <p>31.00€</p>
                <p class="short-description">For oily sensitive skin.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
   
    <div class="produkti" data-brand="cerave">
        <img src="assets/img/pages/skincare/ceraacne.jpg" alt="ceraa">
        <div class="produkti-info">
            <p>CeraVe Face Wash Acne Treatment Salicylic Acid Cleanser with Purifying Clay 237ml</p>
            <p class="zbritja">13.00€</p>  
            <p class="original-price">17.00€</p> 
            <p class="short-description">For oily skin, reduces blackheads and fights acne.</p>
            <button class="buy-now">Buy Now</button>
            <button class="add-to-cart">Add to Cart</button>
    </div>
</div>

    <div class="produkti" data-brand="ordinary">
        <img src="assets/img/pages/skincare/niacinamide.jpg" alt="ni">
        <div class="produkti-info">
            <p>The Ordinary Niacinamide 10% + Zinc 1% Oil Control Serum 30ml</p>
            <p>9.00€</p>
            <p class="short-description">Controls oil , fades dark spots.</p>
            <button class="buy-now">Buy Now</button>
            <button class="add-to-cart">Add to Cart</button>
    </div>
</div>
<div class="produkti" data-brand="fenty">
    <img src="assets/img/pages/skincare/fentytoner.jpg" alt="toner">
    <div class="produkti-info">
        <p>Fenty Skin Fat Water Hydrating Milky Toner Essence with Hyaluronic Acid + Tamarind 150ml</p>
        <p class="zbritja">20.00€</p>  
        <p class="original-price">29.00€</p> 
        <p class="short-description">A toner-essence with a thick, milky texture that’s packed with hydrating ingredients .</p>
        <button class="buy-now">Buy Now</button>
        <button class="add-to-cart">Add to Cart</button>
</div>
</div>
<div class="produkti"data-brand="cerave">
<img src="assets/img/pages/skincare/cera.jpg" alt="cc">
<div class="produkti-info">
    <p>Cera Ve Moisturizing Cream With 3 Essential Ceramides 453g</p>
    <p>15.00€</p>
    <p class="short-description">Moisturizes & helps restore the protective skin barrier.</p>
    <button class="buy-now">Buy Now</button>
    <button class="add-to-cart">Add to Cart</button>
</div>
</div>
<div class="produkti"data-brand="cerave">
<img src="assets/img/pages/skincare/fentymc.jpg" alt="fmc">
<div class="produkti-info">
    <p>Fenty Skin Total Cleans'r Makeup Removing Cleanser 50ml</p>
    <p>29.00€</p>
    <p class="short-description">Cleanses and deeply removes make up.</p>
    <button class="buy-now">Buy Now</button>
    <button class="add-to-cart">Add to Cart</button>
</div>
</div>
<div class="produkti"data-brand="cerave">
<img src="assets/img/pages/skincare/ceracleanser.jpg" alt="ccc">
<div class="produkti-info">
    <p>Cerave Hydrating Face Wash With Hyaluronic Acid And Glycerin 473ml </p>
    <p>25.00€</p>
    <p class="short-description">For normal to dry skin , gently cleanses and hydrates.</p>
    <button class="buy-now">Buy Now</button>
    <button class="add-to-cart">Add to Cart</button>
</div>
</div>
<div class="produkti"data-brand="laroche">
<img src="assets/img/pages/skincare/laa.jpg" alt="laa">
<div class="produkti-info">
    <p>La Roche Posay Effaclar Salicylic Acid Acne Treatment Serum 30ml</p>
    <p>31.00€</p>
    <p class="short-description">Clears acne blemishes and helps prevent new breakouts, while also visibly reducing pores.</p>
    <button class="buy-now">Buy Now</button>
    <button class="add-to-cart">Add to Cart</button>
</div>
</div>
<div class="produkti" data-brand="ordinary">
<img src="assets/img/pages/skincare/retinol.jpg" alt="retinol">
<div class="produkti-info">
    <p>The Ordinary Retinol 0.5% in Squalane 30ml</p>
    <p>11.00€</p>
    <p class="short-description">A moderate-strength retinol serum that targets general signs of skin aging.</p>
    <button class="buy-now">Buy Now</button>
    <button class="add-to-cart">Add to Cart</button>
</div>
</div>
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
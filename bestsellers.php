<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include_once 'inc/header.php';
?>

<section id="best-sellers">
    <div class="intro">
        <h2>Best Sellers</h2>
        <p>These products are loved by our customers. Find your next beauty favorite!</p>
    </div>

    <div class="product-container">
        <div class="produkti best-seller">
            <img src="assets/img/pages/make-up/yslfoundation.jpg" alt="YSL Foundation">
            <div class="produkti-info">
                <p>Yves Saint Laurent Golden Foundation</p>
                <p class="price">65.00€</p>
                <p class="short-description">A long-lasting foundation for flawless skin.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

    
        <div class="produkti best-seller">
            <img src="assets/img/pages/make-up/chanelf.jpg" alt="Chanel Foundation">
            <div class="produkti-info">
                <p>Chanel Les Beiges Healthy Glow Foundation</p>
                <p class="zbritja">65.00€</p>
                <p class="original-price">90.00€</p>
                <p class="short-description">A lightweight glowy foundation with SPF 25.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti best-seller">
            <img src="assets/img/pages/make-up/charblush.jpg" alt="Charlotte Blush">
            <div class="produkti-info">
                <p>Charlotte Tilbury Liquid Blush & Highlighter</p>
                <p class="zbritja">32.00€</p>
                <p class="original-price">42.00€</p>
                <p class="short-description">For a two-way use: glow and tint.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti best-seller">
            <img src="assets/img/pages/make-up/raremascara.jpg" alt="Rare Beauty Mascara">
            <div class="produkti-info">
                <p>Rare Beauty Bold Black Mascara</p>
                <p class="price">25.00€</p>
                <p class="short-description">Black mascara for long, pretty lashes.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti best-seller">
            <img src="assets/img/pages/make-up/charpal.jpg" alt="Charlotte Palette">
            <div class="produkti-info">
                <p>Charlotte Tilbury Glitter Palette</p>
                <p class="price">50.00€</p>
                <p class="short-description">Shine and glow with our glitter palette.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti">
            <img src="assets/img/pages/skincare/fentygel.jpg" alt="fg">
            <div class="produkti-info">
                <p>Fenty Skin Instant Reset Overnight Recovery Gel-Cream</p>
                <p>14.00€</p>
                <p class="short-description">Facial skin care for fine lines , wrinkles , dull and dry skin.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti">
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
        <div class="produkti">
            <img src="assets/img/pages/skincare/larochespf.jpg" alt="spf">
            <div class="produkti-info">
                <p>La Roche-Posay Anthelios Gel-Cream Mattifying Sunscreen Gel 50+</p>
                <p>31.00€</p>
                <p class="short-description">For oily sensitive skin.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>

        </div>
        <div class="produkti">
            <img src="assets/img/pages/skincare/laa.jpg" alt="laa">
            <div class="produkti-info">
                <p>La Roche Posay Effaclar Salicylic Acid Acne Treatment Serum 30ml</p>
                <p>31.00€</p>
                <p class="short-description">Clears acne blemishes and helps prevent new breakouts, while also visibly
                    reducing pores.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti">
            <img src="assets/img/pages/make-up/ysllipstick.jpg" alt="ysl red">
            <div class="produkti-info">
                <p>Yves Saint Laurent Red Lipstick</p>
                <p>30.00€</p>
                <p class="short-description">Redish strong tone , bold color.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti">
            <img src="assets/img/pages/make-up/charbronzer.jpg" alt="charlotte bronz">
            <div class="produkti-info">
                <p>Charlotte Tilbury Sun Tan Bronzer</p>
                <p>28.00€</p>
                <p class="short-description">For that bronze and tan look.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti">
            <img src="assets/img/pages/make-up/chanelmascara.jpg" alt="chanelmascara">
            <div class="produkti-info">
                <p>Chanel Inimitable Volume Length Mascara</p>
                <p>24.00€</p>
                <p class="short-description">For mega voluminous and dramatic lashes.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>

        </div>



        <div class="produkti">
            <img src="assets/img/pages/perfumes/Jeanbelle.jpg" alt="belle">
            <div class="produkti-info">
                <p>Jean Paul Gaultier La Belle Eau de Parfum Intense 50ml</p>
                <p>89.00€</p>
                <p class="short-description">Oriental vanilla fragrance with pear and bergamot.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti">
            <img src="assets/img/pages/perfumes/prada.jpg" alt="prada">
            <div class="produkti-info">
                <p>Prada Paradoxe Eau de Parfum 30ml</p>
                <p class="zbritja">55.00€</p>
                <p class="original-price">75.00€</p>
                <p class="short-description">The perfect warm floral fragrance.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>


        <div class="produkti">
            <img src="assets/img/pages/perfumes/manifesto.jpg" alt="yslm">
            <div class="produkti-info">
                <p>Yves Saint Laurent Manifesto Eau de Parfum 90ml</p>
                <p>101.00€</p>
                <p class="short-description">Vanilla , fruity , jasmine sweet fragrance.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti">
            <img src="assets/img/pages/perfumes/lostcherry.jpg" alt="lost">
            <div class="produkti-info">
                <p>Tom Ford Lost Cherry Eau de Parfum 100ml</p>
                <p>200.00€</p>
                <p class="short-description">Juicy cherry and warm floral feminine tones.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti">
            <img src="assets/img/pages/perfumes/Jeandivine.jpg" alt="divine">
            <div class="produkti-info">
                <p>Jean Paul Gaultier Divine Eau de Parfum 90ml</p>
                <p>134.00€</p>
                <p class="short-description">Notes of lily and meringue.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti">
            <img src="assets/img/pages/make-up/charlottelipstick.jpg" alt="charlotte burgundy">
            <div class="produkti-info">
                <p>Charlotte Tilbury Burgundy Lipstick</p>
                <p>38.00€</p>
                <p class="short-description">Burgundy lip color , just the right fit.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
</section>

<?php
include_once 'inc/footer.php';
?>
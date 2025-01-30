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
        <h2>Explore Our Premium Perfume Collection</h2>
        <p>Luxury and elegant perfumes. Find your signature scent and let it leave a lasting impression with Diva Glow!
        </p>
    </div>
    <div class="brands-category">
        <h3>Browse by Brand</h3>
        <select id="brand-dropdown" class="dropdown-box">
            <option value="" disabled selected>Select a Brand</option>
            <option value="all">All Products</option>
            <option value="ysl">Yves Saint Laurent</option>
            <option value="prada">Prada</option>
            <option value="valentino">Valentino</option>
            <option value="jeanpaul">Jean Paul Gaultier</option>
            <option value="xerjoff">Xerjoff</option>
            <option value="tomford">Tom Ford</option>
        </select>
    </div>
    <div class="product-container">
        <div class="produkti" data-brand="xerjoff">
            <img src="assets/img/pages/perfumes/alexandria.jpg" alt="alexandria">
            <div class="produkti-info">
                <p>Xerjoff Alexandria II Eau de Parfum 100ml</p>
                <p class="zbritja">340.00€</p>
                <p class="original-price">378.00€</p>
                <p class="short-description">Woody , amber , warm-spicy sensual smell.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="jeanpaul">
            <img src="assets/img/pages/perfumes/Jeanbelle.jpg" alt="belle">
            <div class="produkti-info">
                <p>Jean Paul Gaultier La Belle Eau de Parfum Intense 50ml</p>
                <p>89.00€</p>
                <p class="short-description">Oriental vanilla fragrance with pear and bergamot.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="prada">
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

        <div class="produkti" data-brand="ysl">
            <img src="assets/img/pages/perfumes/manifesto.jpg" alt="yslm">
            <div class="produkti-info">
                <p>Yves Saint Laurent Manifesto Eau de Parfum 90ml</p>
                <p>101.00€</p>
                <p class="short-description">Vanilla , fruity , jasmine sweet fragrance.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="xerjoff">
            <img src="assets/img/pages/perfumes/erbapura.jpg" alt="erbapura">
            <div class="produkti-info">
                <p>Xerjoff Erba Pura Eau de Parfum 100ml </p>
                <p class="zbritja">210.00€</p>
                <p class="original-price">245.00€</p>
                <p class="short-description">Fresh, fruity and thoroughly contemporary in spirit.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="ysl">
            <img src="assets/img/pages/perfumes/yslintense.jpg" alt="ysli">
            <div class="produkti-info">
                <p>Yves Saint Laurent Lbre Eau de Parfum Intense 90ml</p>
                <p>115.00€</p>
                <p class="short-description">Lavender , orange blossom and orchid.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="valentino">
            <img src="assets/img/pages/perfumes/valentinopink.jpg" alt="valentino">
            <div class="produkti-info">
                <p>Valentino Donna Born in Roma Eau de Parfum 30ml</p>
                <p class="zbritja">60.00€</p>
                <p class="original-price">85.00€</p>
                <p class="short-description">A trio of jasmine flowers and sparkling blackcurrant fuse.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="tomford">
            <img src="assets/img/pages/perfumes/lostcherry.jpg" alt="lost">
            <div class="produkti-info">
                <p>Tom Ford Lost Cherry Eau de Parfum 100ml</p>
                <p>200.00€</p>
                <p class="short-description">Juicy cherry and warm floral feminine tones.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="jeanpaul">
            <img src="assets/img/pages/perfumes/Jeandivine.jpg" alt="divine">
            <div class="produkti-info">
                <p>Jean Paul Gaultier Divine Eau de Parfum 90ml</p>
                <p>134.00€</p>
                <p class="short-description">Notes of lily and meringue.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="tomford">
            <img src="assets/img/pages/perfumes/rose.jpg" alt="rose">
            <div class="produkti-info">
                <p>Tom Ford Rose Prick Eau de Parfum 50ml</p>
                <p>190.00€</p>
                <p class="short-description">A wild bouquet of rose notes.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="valentino">
            <img src="assets/img/pages/perfumes/green.jpg" alt="green">
            <div class="produkti-info">
                <p>Valentino Donna Born in Roma Green Stravaganza Eau de Parfum 100ml</p>
                <p>150.00€</p>
                <p class="short-description">The essence of Rome's lush gardens and vibrant spirit.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="prada">
            <img src="assets/img/pages/perfumes/pr.jpg" alt="pr">
            <div class="produkti-info">
                <p>Prada La Femme Intense Eau de Parfum 50ml</p>
                <p>98.00€</p>
                <p class="short-description">A hyper-sensual floral enhanced with tuberose.</p>
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
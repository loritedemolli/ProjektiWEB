<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include_once 'inc/header.php';
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

    <!--Pjesa per shfaqjen e produkteve(fotot)-->

    <div class="product-container">
        <div class="produkti" data-brand="ysl">
            <img src="assets/img/pages/make-up/yslfoundation.jpg" alt="foto 1">
            <div class="produkti-info">
                <p>Yves Saint Laurent Golden Foundation</p>
                <p>65.00€</p>
                <p class="short-description">A long-lasting foundation for flawless skin.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="chanel">
            <img src="assets/img/pages/make-up/chanelf.jpg" alt="chanel foundation">
            <div class="produkti-info">
                <p>Chanel Les Beiges Healthy Glow Foundation</p>
                <p class="zbritja">65.00€</p>
                <p class="original-price">90.00€</p>
                <p class="short-description">A light-weight glowy foundation with 25 spf.</p>
                <div class="butonat">
                    <button class="buy-now">Buy Now</button>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="produkti" data-brand="rare-beauty">
            <img src="assets/img/pages/make-up/raremascara.jpg" alt="rare beauty mascara">
            <div class="produkti-info">
                <p>Rare Beauty Bold Black Mascara</p>
                <p>25.00€</p>
                <p class="short-description">Black mascara for long pretty lashes.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="ysl">
            <img src="assets/img/pages/make-up/yslp3.jpg" alt="ysl">
            <div class="produkti-info">
                <p>Yves Saint Laurent Pinky Shades Matte Palette</p>
                <p class="zbritja">25.00€</p>
                <p class="original-price">40.00€</p>
                <p class="short-description">Your perfect palette for a pinky look.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="chanel">
            <img src="assets/img/pages/make-up/chanellip.jpg" alt="chanel lipstick">
            <div class="produkti-info">
                <p>Chanel Matte Lipstick</p>
                <p>17.00€</p>
                <p class="short-description">Creamy, pretty long-lasting lipstick.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="charlotte-tilbury">
            <img src="assets/img/pages/make-up/charblush.jpg" alt="charlotte blush">
            <div class="produkti-info">
                <p>Charlotte Tilbury Liquid Blush & Highlighter</p>
                <p class="discounted-price">32.00€</p>
                <p class="original-price">42.00€</p>
                <p class="short-description">For a two-way use , glow and tint.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="ysl">
            <img src="assets/img/pages/make-up/ysllipstick.jpg" alt="ysl red">
            <div class="produkti-info">
                <p>Yves Saint Laurent Red Lipstick</p>
                <p>30.00€</p>
                <p class="short-description">Redish strong tone , bold color.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="rare-beauty">
            <img src="assets/img/pages/make-up/rareblush.jpg" alt="rare beauty blush">
            <div class="produkti-info">
                <p>Rare Beauty Pink Liquid Blush</p>
                <p class="discounted-price">28.00€</p>
                <p class="original-price">35.00€</p>
                <p class="short-description">Beautiful , pigmented and long-lasting on skin.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="charlotte-tilbury">
            <img src="assets/img/pages/make-up/charpal.jpg" alt="charlotte palette">
            <div class="produkti-info">
                <p>Charlotte Tilbury Glitter Palette</p>
                <p>50.00€</p>
                <p class="short-description">Shine and Glow with our glitter palette.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="charlotte-tilbury">
            <img src="assets/img/pages/make-up/charbronzer.jpg" alt="charlotte bronz">
            <div class="produkti-info">
                <p>Charlotte Tilbury Sun Tan Bronzer</p>
                <p>28.00€</p>
                <p class="short-description">For that bronze and tan look.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="ysl">
            <img src="assets/img/pages/make-up/yslf2.jpf.jpg" alt="ysl foundatin 2">
            <div class="produkti-info">
                <p>Yves Saint Laurent All Hours Foundation</p>
                <p>70.00€</p>
                <p class="short-description">Matte and full coverage foundation.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="rare-beauty">
            <img src="assets/img/pages/make-up/rarepalette.jpg" alt="rare palette">
            <div class="produkti-info">
                <p>Rare Beauty Sheer Eyeshadow Palette</p>
                <p>43.00€</p>
                <p class="short-description">Light colors , both matte and glittery.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="ysl">
            <img src="assets/img/pages/make-up/ysll4.jpg" alt="ysl blushh">
            <div class="produkti-info">
                <p>Yves Saint Laurent Make Me Blush</p>
                <p>21.00€</p>
                <p class="short-description">Liquid peachy toned blush.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="charlotte-tilbury">
            <img src="assets/img/pages/make-up/charfoundtion.jpg" alt="charf">
            <div class="produkti-info">
                <p>Charlotte Tilbury Hollywood Flawless Filter</p>
                <p>30.00€</p>
                <p class="short-description">Foundation for a superstar youth glow.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="ysl">
            <img src="assets/img/pages/make-up/yslp2.jpg" alt="yslp">
            <div class="produkti-info">
                <p>Yves Saint Laurent Red Eyeshadow All Hours Palette</p>
                <p>46.00€</p>
                <p class="short-description">Nude colors for an everyday look.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="chanel">
            <img src="assets/img/pages/make-up/chaneleye.jpg" alt="eyeliner">
            <div class="produkti-info">
                <p>Chanel Black Eyeliner</p>
                <p>19.00€</p>
                <p class="short-description">A great choice for a super black winged eyeliner.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="rare-beauty">
            <img src="assets/img/pages/make-up/rarefoundation.jpg" alt="raref">
            <div class="produkti-info">
                <p>Rare Beauty Foundation</p>
                <p>49.00€</p>
                <p class="short-description">Liquid touch weightless foundation.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="ysl">
            <img src="assets/img/pages/make-up/yslpalette.jpg" alt="yslpale">
            <div class="produkti-info">
                <p>Yves Saint Laurent Golden Palette</p>
                <p>50.00€</p>
                <p class="short-description">Golden sheer and glowy touch.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="chanel">
            <img src="assets/img/pages/make-up/chanelmascara.jpg" alt="chanelmascara">
            <div class="produkti-info">
                <p>Chanel Inimitable Volume Length Mascara</p>
                <p>24.00€</p>
                <p class="short-description">For mega voluminous and dramatic lashes.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="rare-beauty">
            <img src="assets/img/pages/make-up/rarelipstick.jpg" alt="rarelipstick">
            <div class="produkti-info">
                <p>Rare Beauty Pink Lipstick</p>
                <p>13.00€</p>
                <p class="short-description">For soft , smooth and tinted lips.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="charlotte-tilbury">
            <img src="assets/img/pages/make-up/charlip2.jpg" alt="char red">
            <div class="produkti-info">
                <p>Charlotte Tilbury Red Lip</p>
                <p>45.00€</p>
                <p class="short-description">A luxurious red matte shade.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="rare-beauty">
            <img src="assets/img/pages/make-up/rarebronzer.jpg" alt="rb">
            <div class="produkti-info">
                <p>Rare Beauty Stick Bronzer</p>
                <p>33.00€</p>
                <p class="short-description">Brown liquid bronzer for a bronzed face.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="produkti" data-brand="charlotte-tilbury">
            <img src="assets/img/pages/make-up/charlottelipstick.jpg" alt="charlotte burgundy">
            <div class="produkti-info">
                <p>Charlotte Tilbury Burgundy Lipstick</p>
                <p>38.00€</p>
                <p class="short-description">Burgundy lip color , just the right fit.</p>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="produkti" data-brand="chanel">
            <img src="assets/img/pages/make-up/chanelblush.jpg" alt="chb">
            <div class="produkti-info">
                <p>Chanel Compact Blush</p>
                <p>20.00€</p>
                <p class="short-description">Matte pink compact powdery blush.</p>
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
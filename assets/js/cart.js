
const cartItemsContainer = document.getElementById("cart-items");
const checkoutButton = document.getElementById("checkout-btn");
const emptyCartMessage = document.getElementById("empty-cart-message");


const products = [
    { id: 1, name: "Face Mask", price: 15.35, quantity: 1 },
    { id: 2, name: "Perfume", price: 49.75, quantity: 1 },
];

// Funksioni per produktet
function renderCartItems() {
    cartItemsContainer.innerHTML = ""; 
    if (products.length === 0) {
        emptyCartMessage.style.display = "block";
        checkoutButton.disabled = true;
    } else {
        emptyCartMessage.style.display = "none";
        checkoutButton.disabled = false;
        products.forEach((product) => {
            const productDiv = document.createElement("div");
            productDiv.classList.add("product-box");
            productDiv.innerHTML = `
                <div class="product-info">
                    <h3 class="product-title">${product.name}</h3>
                    <p class="product-description">Price: $${product.price.toFixed(2)}</p>
                    <p class="product-description">Quantity: ${product.quantity}</p>
                    <button class="remove-btn" data-id="${product.id}">Remove</button>
                </div>
            `;
            cartItemsContainer.appendChild(productDiv);
        });
    }
}

// funksioni per largimin(fshirjen) e produkteve nga karta
function removeItem(productId) {
    const productIndex = products.findIndex((product) => product.id === productId);
    if (productIndex !== -1) {
        products.splice(productIndex, 1); 
        renderCartItems(); 
        alert("Product removed successfully.");
    }
}

cartItemsContainer.addEventListener("click", (event) => {
    if (event.target.classList.contains("remove-btn")) {
        const productId = parseInt(event.target.getAttribute("data-id"));
        removeItem(productId);
    }
});


checkoutButton.addEventListener("click", () => {
    if (products.length > 0) {
        alert("Thank you for your purchase! Proceeding to checkout...");
        
    } else {
        alert("Your cart is empty. Please add items before proceeding.");
    }
});

renderCartItems();

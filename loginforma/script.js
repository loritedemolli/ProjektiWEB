
document.getElementById("loginForm").addEventListener("submit", function(event) {
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();
    const errorMessage = document.getElementById("error-message");

    errorMessage.textContent = "";

    //validoje username-in//
    if (username === "") {
        errorMessage.textContent = "Username is required.";
        event.preventDefault();
        return;
    }

    //validoje passwordin//
    if (password === "") {
        errorMessage.textContent = "Password is required.";
        event.preventDefault();
        return;
    }

    
    alert("Login successful!");
});

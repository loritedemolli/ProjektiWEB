// validimi me java script i login formes
document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault(); 
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    // Error message elements
    const usernameError = document.getElementById('usernameError');
    const passwordError = document.getElementById('passwordError');

    // error messages
    usernameError.textContent = "";
    passwordError.textContent = "";

    const usernamePattern = /^[a-zA-Z0-9_]{3,}$/; // Accepts alphanumeric usernames (minimumi 3 characters)
    const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/; // Password: 8+ characters, 1 uppercase, 1 number, 1 symbol

    let isValid = true;

    // Validate username (allow emails OR usernames)
    if (!usernamePattern.test(username) && !username.includes('@')) {
        usernameError.textContent = "Username must be at least 3 characters long or a valid email.";
        isValid = false;
    }
    // Validate pass
    if (!passwordPattern.test(password)) {
        passwordError.textContent = "Password must be at least 8 characters long, include 1 uppercase letter, 1 number, and 1 special character.";
        isValid = false;
    }
    // Submit the form only if valid
    if (isValid) {
        this.submit();
    }
});






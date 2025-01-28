
// validimi me java script i login formes
document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();

    // fushat e inputeve
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    // mesazhet ne rat errori
    const usernameError = document.getElementById('usernameError');
    const passwordError = document.getElementById('passwordError');

    // paterni i regex
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Emaili duhet patjeter me pas ni domain  (e.g., .com, .org, etc.)
    const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/; // Password: 8+ karaktere, 1 shkronje te madhe, 1 numer, 1 simbol

    
    let isValid = true;

    //Validimi i Username(email)
    if (!emailPattern.test(username)) {
        alert('Please enter a valid email address ending with a domain (e.g., .com)');
        isValid = false;
    } 

    // validimi i passwordit
    if (!passwordPattern.test(password)) {
        alert('Password must be at least 8 characters long, include 1 uppercase letter, 1 number, and 1 special symbol.');
        isValid = false;
    } 

    // nese PO valide ateher kaloje 
    if (!valid) {
        event.preventDefault();
    }
   
});


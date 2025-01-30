
document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault();

    // fushat e inputeve
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    // mesazhet ne rast se error
    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const messageError = document.getElementById('messageError');

    // paternet e regex
    const namePattern = /^[A-Za-z\s]{3,50}$/; // Name: 3-50 shkronja (can include spaces)
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Valid email formati

    
    let isValid = true;

    // validimi i pjeses se emrit
    if (!namePattern.test(name)) {
        nameError.textContent = "Name must be 3-50 characters long and contain only letters and spaces.";
        isValid = false;
    } else {
        nameError.textContent = "";
    }

    // validimi i email
    if (!emailPattern.test(email)) {
        emailError.textContent = "Please enter a valid email address.";
        isValid = false;
    } else {
        emailError.textContent = "";
    }

    // validimi i mesazhit
    if (message.length < 10 || message.length > 500) {
        messageError.textContent = "Message must be between 10 and 500 characters.";
        isValid = false;
    } else {
        messageError.textContent = "";
    }


    if (isValid) {
        alert('Thank you for contacting us! Your message has been sent.');
        
    }
});

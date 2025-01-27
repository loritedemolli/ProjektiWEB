document.addEventListener('DOMContentLoaded', function() {
const form = document.getElementById('loginForm');
    form.addEventListener('submit', function(event) {
        let valid = true;
        const name = document.getElementById('name').value;
        const surname = document.getElementById('surname').value;
        const email = document.getElementById('email').value;
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
            const namePattern = /^[a-zA-Z]+$/; // e perdorim per te dyjat emrin dhe mbiemrin
        if (!namePattern.test(name)) {
            alert('Please enter a valid name.');
            valid = false;
        }
        if (!namePattern.test(surname)) {
            alert('Please enter a valid surname.');
            valid = false;
        }
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email. The email must include a valid domain.');
            valid = false;
        }
        const usernamePattern = /^[a-zA-Z0-9]+$/;
        if (!usernamePattern.test(username)) {
            alert('Username can contain only letters and numbers. Please enter a valid username.');
            valid = false;
        }
        const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (!passwordPattern.test(password)) {
            alert('Password must be at least 8 characters long, include 1 uppercase letter, 1 number, and 1 special symbol.');
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }
       
    });
});

        
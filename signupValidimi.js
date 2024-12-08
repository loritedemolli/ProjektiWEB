document.addEventListener('DOMContentLoaded', function() {
const form = document.getElementById('loginForm');

    form.addEventListener('submit', function(event) {
        let valid = true;
        const name = document.getElementById('name').value;
        const surname = document.getElementById('surname').value;
        const email = document.getElementById('email').value;
        const username = document.getElementById('username').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;
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
        const phonePattern = /^\+?[0-9]{10,15}$/;
        if (!phonePattern.test(phone)) {
            alert('Please enter a valid phone number. (Allowed length of numbers is 10-15)');
            valid = false;
        }
        if (address.trim() === '') {
            alert('Please enter your delivery address.');
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});

        
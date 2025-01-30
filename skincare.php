<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include_once 'inc/header.php';
?>

<div class="contact-container">
    <h1 class="contact-title">Contact Us</h1>

    <div class="contact-info">
        <h2>Our Contact Information</h2>
        <p>Feel free to reach out to us through the form below or the following:</p>
        <ul>
            <li>Email: <a href="mailto:support@divaglow.com">support@divaglow.com</a></li>
            <li>Phone: <a href="tel:+1234567890">+1 234 567 890</a></li>
            <li>Address: 120524 Main Street, Prishtinë, Kosova</li>
        </ul>
    </div>

    <div class="contact-form">
        <h2>Send Us a Message</h2>
        <form id="contactForm" action="#" method="POST">
            <label class="contact-label" for="name">Full Name</label>
            <input class="contact-input" type="text" id="name" name="name" placeholder="Enter your full name" required>
            <p id="nameError" class="error-message"></p>

            <label class="contact-label" for="email">Email Address</label>
            <input class="contact-input" type="email" id="email" name="email" placeholder="Enter your email" required>
            <p id="emailError" class="error-message"></p>

            <label class="contact-label" for="message">Message</label>
            <textarea class="contact-textarea" id="message" name="message" rows="5" placeholder="Your message..."
                required></textarea>
            <p id="messageError" class="error-message"></p>
            <button class="contact-button" type="submit">Send Message</button>
        </form>
    </div>
</div>

<script src="assets/js/contactus.js"></script>
<?php
include_once 'inc/footer.php';
?>
<?php

include_once 'database/db.php';
include_once 'database/user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $user = new User($db->getConnection());
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user->signup($name, $surname, $username, $password)) {
        header("Location: login.php");
        exit;
    } else {
        echo "An error occurred while registration.";
    }
} 
?>
<head>
<link rel="stylesheet" href="assets/css/mycss.css">
</head>
<div class="wrapcont">
    <div class="login-container">
        <h1 class="login-title">Sign Up</h1>
        <form class="login-form " id="loginForm" action="signup.php" method="POST">
            <label class="login-label" for="name">First Name</label>
            <input class="login-input" type="text" id="name" name="name" placeholder="Enter your name" required>
            <label class="login-label" for="surname">Last Name</label>
            <input class="login-input" type="text" id="surname" name="surname" placeholder="Enter your last name"
                required>
            <label class="login-label" for="username">Username</label>
            <input class="login-input" type="text" id="username" name="username" placeholder="Enter your username"
                required>
            <label class="login-label" for="password">Password</label>
            <input class="login-input" type="password" id="password" name="password" placeholder="Enter your password"
                required>
            <button class="login-button" type="submit">Register</button>
        </form>
        <div class="options">
            <a href="login.php" class="option-link">Back To Login</a>
        </div>
    </div>
</div>
<script src="assets/js/signupValidimi.js"></script>
<?php
include_once 'inc/footer.php';
?>
<?php
session_start();
include_once 'database/db.php';
include_once 'database/user.php';

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $user = new User($db->getConnection());

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error_message = "Both fields are required.";
    } else {
        $loggedInUser = $user->login($username, $password);
       
        if ($loggedInUser) {
            $_SESSION['user_id'] = $loggedInUser['id'];  
            $_SESSION['role'] = $loggedInUser['role']; // Marrim rolin nga databaza
           
            if ($_SESSION['role'] === 'admin') {
                header("Location: admin/dashboard.php");
            } else {
                header("Location: index.php");
            }
            exit;
        } else {
            $error_message = "Invalid username or password.";
        }
    }
}
?>


<head>
<link rel="stylesheet" href="assets/css/mycss.css">
</head>
<div class="wrapcont">
    <div class="login-container">
        <h1 class="login-title">Login</h1>
        <?php if (!empty($error_message)): ?>
            <p class="error-message"><?php echo htmlspecialchars($error_message); ?></p>
        <?php endif; ?>
        <form class="login-form" id="loginForm" action="login.php" method="POST">
            <label class="login-label" for="username">Username</label>
            <input class="login-input" type="text" id="username" name="username" placeholder="Enter your username" required>
           
            <label class="login-label" for="password">Password</label>
            <input class="login-input" type="password" id="password" name="password" placeholder="Enter your password" required>
           
            <button class="login-button" type="submit">Login</button>
        </form>
        <div class="options">
            <a href="signup.php" class="option-link">Sign Up</a>
        </div>
    </div>
</div>
<!-- <script src="assets/js/script.js"></script> -->
<?php include_once 'inc/footer.php'; ?>
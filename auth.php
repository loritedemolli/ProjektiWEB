<?php
session_start();
require 'db.php';

class Auth {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function login($email, $password) {
        $stmt = $this->pdo->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $email;
            session_regenerate_id(true);
            return true;
        }
        return false;
    }

    public function logout() {
        $_SESSION = [];
        session_destroy();
        setcookie(session_name(), '', time() - 3600);
        header("Location: login.php");
        exit();
    }

    public function register($email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $this->pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->execute([$email, $hashedPassword]);
            return true;
        } catch (PDOException $e) {
            return false; // Handle duplicate email errors
        }
    }

    public function isAuthenticated() {
        return isset($_SESSION['user_id']);
    }
}

$auth = new Auth($pdo);

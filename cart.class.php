<?php
require 'database.php';

class Cart {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Add item to the cart
    public function addItem($userId, $name, $price) {
        $stmt = $this->pdo->prepare("INSERT INTO cart_items (user_id, name, price, quantity) 
                                     VALUES (?, ?, ?, 1) 
                                     ON DUPLICATE KEY UPDATE quantity = quantity + 1");
        return $stmt->execute([$userId, $name, $price]);
    }

    // Remove item from the cart
    public function removeItem($userId, $itemId) {
        $stmt = $this->pdo->prepare("DELETE FROM cart_items WHERE id = ? AND user_id = ?");
        return $stmt->execute([$itemId, $userId]);
    }

    // Get all items in the cart
    public function getCart($userId) {
        $stmt = $this->pdo->prepare("SELECT * FROM cart_items WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Calculate total price
    public function getTotalPrice($userId) {
        $stmt = $this->pdo->prepare("SELECT SUM(price * quantity) AS total FROM cart_items WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'] ?? 0;
    }
}
?>

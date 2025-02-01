<?php
class Product {
    private $connection;
    private $table_name = "products";

    public function __construct($db) {
        $this->connection = $db;
    }
 // CRUD per produkte
 public function createProduct($name, $brand, $price, $discount_price, $short_description, $image, $category) {
    $query = "INSERT INTO {$this->table_name} (name, brand, price, discount_price, short_description, image, category) 
              VALUES (:name, :brand, :price, :discount_price, :short_description, :image, :category)";
    $st = $this->connection->prepare($query);
    $st->bindParam(':name', $name);
    $st->bindParam(':brand', $brand);
    $st->bindParam(':price', $price);
    $st->bindParam(':discount_price', $discount_price);
    $st->bindParam(':short_description', $short_description);
    $st->bindParam(':image', $image);
    $st->bindParam(':category', $category);
    return $st->execute();
}

public function getAllProducts() {
    $query = "SELECT * FROM {$this->table_name}";
    $st = $this->connection->prepare($query);
    $st->execute();
    return $st->fetchAll(PDO::FETCH_ASSOC);
}

public function getProductsByCategory($category) {
    $query = "SELECT * FROM {$this->table_name} WHERE category = :category";
    $st = $this->connection->prepare($query);
    $st->bindParam(':category', $category);
    $st->execute();
    return $st->fetchAll(PDO::FETCH_ASSOC);
}

public function updateProduct($id, $name, $brand, $price, $discount_price, $short_description, $image, $category) {
    $query = "UPDATE {$this->table_name} 
              SET name = :name, brand = :brand, price = :price, discount_price = :discount_price, 
                  short_description = :short_description, image = :image, category = :category 
              WHERE id = :id";
    $st = $this->connection->prepare($query);
    $st->bindParam(':name', $name);
    $st->bindParam(':brand', $brand);
    $st->bindParam(':price', $price);
    $st->bindParam(':discount_price', $discount_price);
    $st->bindParam(':short_description', $short_description);
    $st->bindParam(':image', $image);
    $st->bindParam(':category', $category); 
    $st->bindParam(':id', $id);
    return $st->execute();
}

public function getProductById($id) {
    $query = "SELECT * FROM {$this->table_name} WHERE id = :id";
    $st = $this->connection->prepare($query);
    $st->bindParam(':id', $id);
    $st->execute();
    return $st->fetch(PDO::FETCH_ASSOC);
}

public function deleteProduct($id) {
    $query = "DELETE FROM {$this->table_name} WHERE id = :id";
    $st = $this->connection->prepare($query);
    $st->bindParam(':id', $id);
    return $st->execute();
}
}
?>

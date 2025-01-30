<?php
class User {
    private $connection;
    private $table_name = 'users';

    public function __construct($db) {
        $this->connection = $db;
    }

    public function signup($name, $surname, $username, $password): bool {
        try {
            $query = "INSERT INTO {$this->table_name} (name, surname, username, password, role) 
                      VALUES (:name, :surname, :username, :password, 'user')"; // Default role is 'user'
            $st = $this->connection->prepare($query);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $st->bindParam(':name', $name);
            $st->bindParam(':surname', $surname);
            $st->bindParam(':username', $username);
            $st->bindParam(':password', $hashed_password);

            return $st->execute();
        } catch (PDOException $e) {
            return false;
        }
    } 

    // Login Function (tash e bon store rolin e perdoruesit ne sesion)
    public function login($username, $password) {
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $st = $this->connection->prepare($query);
        $st->bindParam(':username', $username);
        $st->execute();
    
        $user = $st->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($password, $user['password'])) {
            return $user; 
        }
        return false;
    }
    
}
?>

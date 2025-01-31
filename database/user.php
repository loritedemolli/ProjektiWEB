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
    //CRUD per menaxhimin e userave
    // Admin User Registration (With role selection)
    public function createUser($name, $surname, $username, $password, $role): bool {
        try {
            $query = "INSERT INTO {$this->table_name} (name, surname, username, password, role) 
                      VALUES (:name, :surname, :username, :password, :role)";
            $st = $this->connection->prepare($query);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $st->bindParam(':name', $name);
            $st->bindParam(':surname', $surname);
            $st->bindParam(':username', $username);
            $st->bindParam(':password', $hashed_password);
            $st->bindParam(':role', $role); // Assign role from admin panel

            return $st->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    // Update User Role (Vetem admini)
    public function updateUserRole($id, $role): bool {
        $query = "UPDATE {$this->table_name} SET role = :role WHERE id = :id";
        $st = $this->connection->prepare($query);
        $st->bindParam(':role', $role);
        $st->bindParam(':id', $id);
        return $st->execute();
    }

    public function getAllUsers() {
        $query = "SELECT id, name, surname, username, role FROM {$this->table_name}";
        $st = $this->connection->prepare($query);
        $st->execute();
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $name, $surname, $username, $role): bool {
        $query = "UPDATE {$this->table_name} 
                  SET name = :name, surname = :surname, username = :username, role = :role 
                  WHERE id = :id";

        $st = $this->connection->prepare($query);
        $st->bindParam(':name', $name);
        $st->bindParam(':surname', $surname);
        $st->bindParam(':username', $username);
        $st->bindParam(':role', $role);
        $st->bindParam(':id', $id);

        return $st->execute();
    }
    public function deleteUser($id): bool {
        $query = "DELETE FROM {$this->table_name} WHERE id = :id";
        $st = $this->connection->prepare($query);
        $st->bindParam(':id', $id);

        return $st->execute();
    }
}
?>

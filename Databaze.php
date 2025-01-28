<?php
class Databaze {
    private $host = 'localhost';
    private $dbname = 'DivaGlow';
    private $username = 'root'; 
    private $password = ''; 
    private $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection has failed: " . $e->getMessage());
        }
    }
    public function getConnection() {
        return $this->connection;
    }
}

?>
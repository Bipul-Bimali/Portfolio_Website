<?php
class Database {
    private $conn;

    public function __construct() {
        $config = include(__DIR__ . '/../config/database.php');
        $this->conn = new mysqli(
            $config['servername'],
            $config['username'],
            $config['password'],
            $config['dbname']
        );

        if ($this->conn->connect_error) {
            die("Database connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

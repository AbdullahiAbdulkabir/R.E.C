<?php

class Conn {
    private $servername = "localhost";
    private $dbname = "rec";
    private $username = "root";
    private $password = "";

    public function connection() {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $th) {
            echo "Connection failed: " . $th->getMessage();
        }
    }
}
<?php
    class Database {
        private $host = "localhost";
        private $dbName = "insight_broker_code_challenge_database";
        private $dbUsername = "root";
        private $dbPassword = "";
        private $conn;

        public function connect() {
            $this->conn = null;
        
            try {
                $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection Error: ".$e->getMessage();
            }

            return $this->conn;
        }
    }
?>
<?php
    class Database {
        // DB Params
        private $host = 'wcwimj6zu5aaddlj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
        private $db_name = 'kfwyssp7g9e5m7a3';
        private $username = 'kaz87pblt3cydme5';
        private $password = 'md1pcty90zi9nzky';
        private $conn;

        // DB Connection
        public function connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name , $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection Error: ' . $e->getMessage();
            }

            return $this->conn;
        }
    }

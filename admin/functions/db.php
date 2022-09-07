<?php 
    
    class DB {
        protected $conn;
        private $username = 'root';
        private $dbname = 'web_blog';
        private $host = 'localhost';
        private $password = '';
        public function __construct() {
            try {
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                error_reporting(E_ALL);
            } catch (PDOException $e) {
                echo "Connection failed: ". $e->getMessage();
            }

        }

    }

?>
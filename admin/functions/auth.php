<?php
    include 'db.php';
    class Auth extends DB {
        public function login($username, $password) {
            try {
                $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
                $stmt = $this->conn->prepare($sql); 
                $stmt->execute([$username, $password]);
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                return $data;
            } catch (PDOException $e) {
               return $e->getMessage(); 
            }
        }

    }



?>
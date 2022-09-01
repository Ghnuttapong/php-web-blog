<?php
    include "db.php";

    class Brand extends DB {
       public function getBrand() {
            try {
                $sql = "SELECT * FROM brand";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                http_response_code(200);
                return $stmt;
            } catch (PDOException $e) {
                http_response_code(400);
                return "error". $e->getMessage();
            }
       } 
    }

?>
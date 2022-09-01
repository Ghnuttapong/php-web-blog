<?php
    include "db.php";
    class Category extends DB {
        public function getCategory() {
            $sql = "SELECT * FROM category";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $data = array();
            while($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }
            return $data;
        }

        public function insert($title) {
            $sql = "INSERT INTO category(title) VALUE (?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$title]);
            return true; 
        }

        public function delete($id) {
            $sql = "DELETE FROM category WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return true;
        }

        public function update($data) {
            $sql = "UPDATE category SET title = ? , rating = 0 WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
            return true;
        }
    }


?>
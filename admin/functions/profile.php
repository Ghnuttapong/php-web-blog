<?php
    include "db.php";

    class Profile extends DB {
       public function getProfile($id) {
            $sql = "SELECT * FROM users";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt;
       } 
       public function updateProfile($password, $picture = null, $username) {
            if($picture != null) {
                $sql = "UPDATE users SET password = ?,  picture = ? WHERE username = ?";
            }else {
                $sql = "UPDATE users SET password = ? WHERE username = ?";
            }
            $stmt = $this->conn->prepare($sql);
            $picture == null? $stmt->execute([$password,  $username]) : $stmt->execute([$password,  $picture, $username]);
            return true;
       }
    }
?>
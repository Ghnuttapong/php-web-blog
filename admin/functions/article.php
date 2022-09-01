<?php

include "db.php";
class Article extends DB
{
    public function getArticle()
    {
        $sql = 'SELECT * FROM article';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $r;
        }
        return $data;
    }
    public function insert($data)
    {
        $sql = "INSERT INTO article(title, detail, picture,category_id) VALUES(?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        return true;
    }

    public function joinCategory() {
        $sql = 'SELECT * FROM category';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $r;
        }
        return $data;
    }
}

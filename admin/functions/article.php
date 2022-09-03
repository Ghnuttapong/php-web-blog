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

    public function deleteArticle($id) {
        $sql = 'DELETE FROM article WHERE id = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return true;
    }

    public function getArticleOne($id) {
        $sql = 'SELECT * FROM article WHERE id = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
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

    public function getCategoryName($id) {
        $sql = 'SELECT * FROM category WHERE id = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function updateArticle($title, $detail, $category_id, $filename = null, $id) {
        if($filename != null) {
            $sql = 'UPDATE article SET title = ?, detail = ?, picture = ?, category_id = ? WHERE id = ?';
        }else {
            $sql = 'UPDATE article SET title = ?, detail = ?,  category_id = ? WHERE id = ?';
        }
        $stmt = $this->conn->prepare($sql);
        $filename == null ? $stmt->execute([$title, $detail, $category_id, $id]) : $stmt->execute([$title, $detail, $filename, $category_id, $id]);
        return true;
    }
}

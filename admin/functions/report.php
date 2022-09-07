<?php 

include dirname(__FILE__).'/db.php';
class Report extends DB {
    public function index() {
        $sql = 'SELECT * FROM category ORDER BY rating DESC';
        $result = $this->conn->prepare($sql);
        $result->execute();
        $data = array();
        while( $r = $result->fetch(PDO::FETCH_ASSOC)){
           $data[] = $r; 
        }
        return $data;
    }
}



?>
<?php
require_once '../config/db.php';

class DAO {

 private $db;

 private $GETALLARTICLES="SELECT * FROM articles ORDER BY brand ASC";

 private $GETARTICLEBYIDART="SELECT * FROM articles WHERE idart=?";

public function __construct(){
    $this->db=DB::createInstance();
}

public function getAllArticles(){
    $statement = $this->db->prepare($this->GETALLARTICLES);
    $statement->execute();
    $result=$statement->fetchAll();
    return $result;
    }

    public function getArticleById($idart){
        $statement = $this->db->prepare($this->GETARTICLEBYIDART);
        $statement->bindValue(1,$idart);

        $statement->execute();
        $result=$statement->fetch();
        return $result;
     }
    


}




?>
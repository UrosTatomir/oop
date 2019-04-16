<?php
require_once '../config/db.php';

class DAO {

 private $db;

   private $GETALLARTICLES="SELECT * FROM  articles ORDER BY brand ";

   private $INSERTARTICLE="INSERT INTO articles(brand,model,description,price,image)VALUES(?,?,?,?,?)";

   private $GETARTICLEBYIDART="SELECT * FROM articles WHERE idart=?";

    public function __construct(){
        $this->db=DB::createInstance();
    }
    public function getAllArticles(){
  
        $statement=$this->db->prepare($this->GETALLARTICLES);
        $statement->execute();
        $result= $statement->fetchAll();
        return $result;
    }
    public function insertArticle($brand,$model,$description,$price,$image ){
  
        $statement = $this->db->prepare($this->INSERTARTICLE);
        $statement->bindValue(1,$brand);
        $statement->bindValue(2,$model);
        $statement->bindValue(3,$description);
        $statement->bindValue(4,$price);
        $statement->bindValue(5,$image);
        $statement->execute();
       
       // return $result; 
    }
    public function getArticleById($idart){
        $statement=$this->db->prepare($this->GETARTICLEBYIDART);
        $statement->bindValue(1,$idart);
        $statement->execute();
        $result= $statement->fetch();
        return $result;   
    }

} //end class DAO-----

?>
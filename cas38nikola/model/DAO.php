<?php
require_once '../config/db.php';

class DAO {

 private $db;

 private $GETALLARTICLES="SELECT * FROM articles ORDER BY brand ASC";

 private $GETARTICLEBYIDART="SELECT * FROM articles WHERE idart=?";


 private $REGISTER="INSERT INTO users(name,surname,email,adress,phone,username,password,admin) VALUES(?,?,?,?,?,?,?,?)";

 private $LOGIN="SELECT * FROM users WHERE username=? AND password=?";


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
    
     public function register($n,$s,$e,$a,$p,$u,$pass,$ad){
        $statement = $this->db->prepare($this->REGISTER);
        $statement->bindValue(1,$n);
        $statement->bindValue(2,$s);
        $statement->bindValue(3,$e);
        $statement->bindValue(4,$a);
        $statement->bindValue(5,$p);
        $statement->bindValue(6,$u);
        $statement->bindValue(7,$pass);
        $statement->bindValue(8,$ad);
        
        $statement->execute();
        
     
     }

     public function login($u,$p){
        $statement = $this->db->prepare($this->LOGIN);
        $statement->bindValue(1,$u);
        $statement->bindValue(2,$p);
        $statement->execute();

        $result=$statement->fetch();
        return $result;
     }
    

}




?>
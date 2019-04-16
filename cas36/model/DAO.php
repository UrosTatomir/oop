<?php
require_once '../config/db.php';

class DAO {

 private $db;

   private $GETALLARTICLES="SELECT * FROM  articles ORDER BY brand ";

   private $INSERTARTICLE="INSERT INTO articles(brand,model,description,price,image)VALUES(?,?,?,?,?)";

   private $GETARTICLEBYIDART="SELECT * FROM articles WHERE idart=?";

//    private $GETARTICLEPRICEBYIDART="SELECT price FROM articles WHERE idart=?";

   private $LOGIN ="SELECT * FROM users WHERE username = ? AND password = ?";

    private $INSERTUSER = "INSERT INTO users(name,surname,email,adress,phone,username,password) VALUES(?,?,?,?,?,?,?)";

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
    // public function getArticlePriceById($idart)
    // {
    //     $statement = $this->db->prepare($this->GETARTICLEPRICEBYIDART);
    //     $statement->bindValue(1, $idart);
    //     $statement->execute();
    //     $result = $statement->fetch();
    //     return $result;
    // }
    public function login($username,$password){
        $statement=$this->db->prepare($this->LOGIN);
        $statement->bindValue(1,$username);
        $statement->bindValue(2,$password);
        $statement->execute();
        $result=$statement->fetch();
        return $result;
    }
    public function insertUser($name,$surname ,$email,$adress,$phone,$username,$password) {
        $statement = $this->db->prepare($this->INSERTUSER);
        $statement->bindValue(1,$name);
        $statement->bindValue(2,$surname);
        $statement->bindValue(3,$email);
        $statement->bindValue(4, $adress);
        $statement->bindValue(5, $phone);
        $statement->bindValue(6,$username);
        $statement->bindValue(7,$password) ;
        $statement->execute();
       
       
    }

} //end class DAO-----

?>
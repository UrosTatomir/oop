<?php
require_once '../config/db.php';

class DAO {

 private $db;

   private $GETALLARTICLES="SELECT * FROM  articles ORDER BY brand ";

   private $INSERTARTICLE="INSERT INTO articles(brand,model,description,price,image)VALUES(?,?,?,?,?)";

   private $GETARTICLEBYIDART="SELECT * FROM articles WHERE idart=?";

//    private $GETARTICLEPRICEBYIDART="SELECT price FROM articles WHERE idart=?";

   private $LOGIN ="SELECT * FROM users WHERE username = ? AND password = ?";

    private $REGISTER = "INSERT INTO users(name,surname,email,adress,phone,username,password,admin) VALUES(?,?,?,?,?,?,?,?)";

    private $GETALLUSERS="SELECT * FROM users";

    private $INSERTORDER="INSERT INTO orders(id_user,order_number,name,surname,email,phone,adress,id_art,brand,model,price,count,total,time) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)";

    private $GETLASTORDERNUMBER="SELECT order_number FROM orders  ORDER BY id_order DESC limit 1";
     //SELECT order_number (MAX) skracena varijanta
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
        $result=$statement->fetch() ;
        return $result;
    }
    public function register($name,$surname ,$email,$adress,$phone,$username,$password,$admin) {
        $statement = $this->db->prepare($this->REGISTER);
        $statement->bindValue(1,$name);
        $statement->bindValue(2,$surname);
        $statement->bindValue(3,$email);
        $statement->bindValue(4, $adress);
        $statement->bindValue(5, $phone);
        $statement->bindValue(6,$username);
        $statement->bindValue(7,$password);
        $statement->bindValue(8,$admin);
        $statement->execute();
       
       
    }
     public function getAllUsers(){
  
        $statement=$this->db->prepare($this->GETALLUSERS);
        $statement->execute();
        $result= $statement->fetchAll();
        return $result;
    }
     public function insertOrder($id_user,$order_number,$name,$surname ,$email,$phone,$adress,$id_art,$brand,$model,$price,$count,$total) {
        $statement = $this->db->prepare($this->INSERTORDER);
        $statement->bindValue(1,$id_user);
        $statement->bindValue(2,$order_number);
        $statement->bindValue(3,$name);
        $statement->bindValue(4,$surname);
        $statement->bindValue(5,$email);
        $statement->bindValue(6,$phone);
        $statement->bindValue(7,$adress);
        $statement->bindValue(8,$id_art);
        $statement->bindValue(9,$brand);
        $statement->bindValue(10,$model);
        $statement->bindValue(11,$price);
        $statement->bindValue(12,$count);
        $statement->bindValue(13,$total);
        $statement->execute();
       
       
    }
     public function getLastOrderNumber(){
        $statement=$this->db->prepare($this->GETLASTORDERNUMBER);
        $statement->execute();
        $result= $statement->fetch(PDO::FETCH_NUM);
        return $result;   
    }

} //end class DAO-----

?>
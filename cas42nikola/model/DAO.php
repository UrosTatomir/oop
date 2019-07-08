<?php
require_once '../config/db.php';

class DAO {

 private $db;

 private $GETALLARTICLES="SELECT * FROM articles ORDER BY brand ASC";

 private $GETARTICLEBYIDART="SELECT * FROM articles WHERE idart=?";


 private $REGISTER="INSERT INTO users(name,surname,email,adress,phone,username,password,admin) VALUES(?,?,?,?,?,?,?,?)";

 private $LOGIN="SELECT * FROM users WHERE username=? AND password=?";

 private $INSERTORDER="INSERT INTO orders(id_user,order_number,name,surname,email,phone,adress,id_art,brand,model,price,count,total,time) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)";

private $ORDERNUMBER="SELECT MAX(order_number) FROM orders";




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


     public function insertOrder($id_user,$order_n,$name,$surname,$email,$phone,$adress,$id_art,$brand,$model,$price,$count,$total){
      $statement = $this->db->prepare($this->INSERTORDER);
      $statement->bindValue(1,$id_user);
      $statement->bindValue(2,$order_n);
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

   public function orderNumber(){
      $statement = $this->db->prepare($this->ORDERNUMBER);
      $statement->execute();
      $result=$statement->fetch(PDO::FETCH_NUM);
      return $result;

   }
    

}




?>
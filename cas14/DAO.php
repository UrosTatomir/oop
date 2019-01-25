<?php
require_once 'db.php';

class DAO {
//database access object
 private $db;

private $GETALLCARSBYPRODUCER ="SELECT * FROM vozila WHERE imeproizvodjaca=?";
    // $sql = "SELECT * FROM citys LEFT JOIN comments ON comments.city=citys.city WHERE citys.id= $id ";
private $GETALLCARSBYCATEGORY ="SELECT * FROM vozila WHERE kategorija=?";


private $GETALLDRIVERSOBLIGATECAR = "SELECT * FROM vozaci JOIN vozilavozaci ON  vozaci. idvozaca = vozilavozaci. idvozaca  WHERE idvozila= ? ";

private $GETALLCARSOBLIGATEDRIVER="SELECT * FROM vozila JOIN vozilavozaci ON vozila. idvozila=vozilavozaci. idvozila WHERE idvozaca=?";

private $GETALLPRODUCERBYCOUNTRY = "SELECT * FROM  vozila JOIN  proizvodjaci ON  vozila.imeproizvodjaca = proizvodjaci.imeproizvodjaca  WHERE  zemljaporekla= ? ";

 public function __construct(){

        $this->db=DB::createInstance();
    }
    public function getAllCarsByProducer($n){

        $statement = $this->db->prepare($this->GETALLCARSBYPRODUCER);
        $statement->bindValue(1,$n);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }  
    public function getAllCarsByCategory($p){
       $statement=$this->db->prepare($this->GETALLCARSBYCATEGORY);
       $statement->bindValue(1,$p);
       $statement->execute();
       $result=$statement->fetchAll();
       return $result; 
    }
    public function getAllDriversObligateCar($v){
        $statement=$this->db->prepare($this->GETALLDRIVERSOBLIGATECAR);
        $statement->bindValue(1,$v);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }
    public function getAllCarsObligateDriver($d){
        $statement=$this->db->prepare($this->GETALLCARSOBLIGATEDRIVER);
        $statement->bindValue(1,$d);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }
    public function getAllProducerByCountry($c){
        $statement=$this->db->prepare($this->GETALLPRODUCERBYCOUNTRY);
        $statement->bindValue(1,$c);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }
        
        
}


?>
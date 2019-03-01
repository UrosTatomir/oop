<?php
require_once 'db.php';

class DAO {
//database access object
 private $db;

private $GETALLCARSBYPRODUCER ="SELECT * FROM vozila WHERE imeproizvodjaca=?";
    // $sql = "SELECT * FROM citys LEFT JOIN comments ON comments.city=citys.city WHERE citys.id= $id ";
private $GETALLCARSBYCATEGORY ="SELECT * FROM vozila WHERE kategorija=?";


private $GETALLDRIVERSOBLIGATECAR = "SELECT vozaci.*,vozila.*,vozilavozaci.* FROM vozaci JOIN vozilavozaci ON  vozaci.idvozaca = vozilavozaci.idvozaca JOIN vozila ON vozila.idvozila=vozilavozaci.idvozila WHERE vozilavozaci.idvozila=? ";


private $GETALLCARSOBLIGATEDRIVER = "SELECT vozila.*,vozaci.*,vozilavozaci.* FROM vozila JOIN vozilavozaci ON vozila.idvozila=vozilavozaci.idvozila JOIN vozaci ON vozaci.idvozaca=vozilavozaci.idvozaca WHERE vozilavozaci.idvozaca= ?";


private $GETALLPRODUCERBYCOUNTRY = "SELECT * FROM  vozila JOIN  proizvodjaci ON  vozila.imeproizvodjaca = proizvodjaci.imeproizvodjaca  WHERE  zemljaporekla= ? ";

//prikaz svih vozila po nekoj unetoj zemlji porekla

private $GETALLCARSBYCOUNTRY ="SELECT vozila.*,proizvodjaci. zemljaporekla FROM vozila JOIN proizvodjaci ON vozila. imeproizvodjaca = proizvodjaci. imeproizvodjaca WHERE proizvodjaci.zemljaporekla = ? ";

private $GETALLCARSBYCATTIME="SELECT vozila.*,kategorije. trajanje FROM vozila JOIN kategorije ON vozila. kategorija=kategorije. kategorija WHERE kategorije. trajanje= ?";

//upit vise prema vise nastavljamo tabele vozila,vozaci,vozilavozaci
 /*
 upit vise prema vise - NASTAVICEMO 
SELECT vozila.*, vozaci.*,vozilavozaci.* FROM vozaci JOIN vozilavozaci ON vozaci.idvozaca=vozilavozaci.idvozaca JOIN vozila ON vozila.idvozila=vozilavozaci.idvozila WHERE vozaci.idvozaca='2';

     */
private $GETALLCARSONEDRIVER = "SELECT vozila.*, vozaci.*, vozilavozaci.* FROM vozaci JOIN vozilavozaci ON vozaci.idvozaca = vozilavozaci.idvozaca JOIN vozila ON vozila.idvozila = vozilavozaci.idvozila WHERE vozaci.idvozaca= ?";

//JOIN 5 tabela iz vise u vise
 
private $GETALLCARSBYCOUNTRYPRODUCE="SELECT vozila.*,proizvodjaci.*,kategorije.*,vozilavozaci.*,vozaci.* FROM vozila JOIN proizvodjaci ON vozila.imeproizvodjaca=proizvodjaci.imeproizvodjaca JOIN kategorije ON vozila.kategorija=kategorije.kategorija JOIN vozilavozaci ON vozila.idvozila=vozilavozaci.idvozila JOIN vozaci ON vozaci.idvozaca=vozilavozaci.idvozaca WHERE proizvodjaci.zemljaporekla=?";

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
    public function getAllCarsByCountry($f){
        $statement=$this->db->prepare($this->GETALLCARSBYCOUNTRY);
        $statement->bindValue(1,$f);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }
    public function getAllCarsByCatTime($t){
        $statement=$this->db->prepare($this->GETALLCARSBYCATTIME);
        $statement->bindValue(1,$t);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }
    public function getAllCarsOneDriver($o){
        $statement=$this->db->prepare($this->GETALLCARSONEDRIVER);
        $statement->bindValue(1,$o);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    } 
    public function getAllCarsByCountryProduce($a){
        $statement=$this->db->prepare($this->GETALLCARSBYCOUNTRYPRODUCE);
        $statement->bindValue(1,$a);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }  
        
}


?>
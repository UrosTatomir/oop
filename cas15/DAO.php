<?php
require_once 'db.php';

class DAO {

 private $db;

 private $GETALLCARSBYPRODUCER="SELECT * FROM vozila WHERE imeproizvodjaca=?";

 //prikaz svih vozila po nekoj unetoj zemlji porekla
 private $GETALLCARSBYCOUNTRY="SELECT vozila.*, proizvodjaci.zemljaporekla FROM vozila JOIN proizvodjaci ON vozila.imeproizvodjaca =proizvodjaci.imeproizvodjaca WHERE proizvodjaci.zemljaporekla = ?";

 private $GETALLCARSBYCATTIME="SELECT vozila.*, kategorije.trajanje FROM vozila JOIN kategorije ON vozila.kategorija=kategorije.kategorija WHERE kategorije.trajanje=?";

 
//  upit vise prema vise - NASTAVICEMO 

private $GETALLCARSBYDRIVERID = "SELECT vozila.*, vozaci.*,vozilavozaci.* FROM vozaci JOIN vozilavozaci ON vozaci.idvozaca=vozilavozaci.idvozaca JOIN vozila ON vozila.idvozila=vozilavozaci.idvozila WHERE vozaci.idvozaca=?";

private $GETALLDRIVERSBYCAR ="SELECT vozaci.*,vozilavozaci.*,vozila.* FROM vozila JOIN vozilavozaci ON vozila.idvozila=vozilavozaci.idvozila JOIN vozaci ON vozaci.idvozaca=vozilavozaci.idvozaca WHERE vozila.idvozila=?";


public function __construct(){
    $this->db=DB::createInstance();
}

public function getAllCarsByProducer($n){

    $statement =$this->db->prepare($this->GETALLCARSBYPRODUCER);
    $statement->bindValue(1,$n);
    $statement->execute();

    $result=$statement->fetchAll();
    return $result;

}

public function getAllCarsByCountry($n){

$statement=$this->db->prepare($this->GETALLCARSBYCOUNTRY);
$statement->bindValue(1,$n);
$statement->execute();

$result=$statement->fetchAll();
return $result;

}

public function getAllCarsByCatTime($n){

    $statement=$this->db->prepare($this->GETALLCARSBYCATTIME);
    $statement->bindValue(1,$n);
    $statement->execute();
    
    $result=$statement->fetchAll();
    return $result;



}
    public function getAllCarsByDriverId($n)
    {

        $statement = $this->db->prepare($this->GETALLCARSBYDRIVERID);
        $statement->bindValue(1, $n);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_BOTH);//ili nesto tako proveriti
        return $result;

    }
 //upit veze vise prema vise dizajn u tabelama
    public function getAllDriversByCar($n){
        $statement=$this->db->prepare($this->GETALLDRIVERSBYCAR);
        $statement->bindValue(1,$n);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_BOTH);
        return $result;
    }
}



//domaci  napisati upit koji nam prikazuje koji sve vozaci voze vozilo sa uneim id 
?>
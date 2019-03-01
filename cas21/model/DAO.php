<?php
require_once '../config/db.php';

class DAO {

 private $db;

private $GETALLPRODUCERS="SELECT * FROM proizvodjaci ORDER BY imeproizvodjaca ASC";

private $GETALLCATEGORIES="SELECT * FROM kategorije ORDER BY kategorija ASC";

private $INSERTCAR = "INSERT INTO vozila(imeproizvodjaca,model,kategorija,godiste,cena)VALUES(?,?,?,?,?)";

private $INSERTDRIVER ="INSERT INTO vozaci(ime,prezime,godiste)VALUE(?,?,?)";

private $GETALLCARS ="SELECT * FROM vozila";

private $GETALLDRIVERS="SELECT *FROM vozaci";

private $INSERTCARANDDRIVER="INSERT INTO vozilavozaci(idvozila,idvozaca)VALUE(?,?)";

private $GETALLCARSBYDRIVERID = "SELECT vozila.*, vozaci.*,vozilavozaci.* FROM vozaci JOIN vozilavozaci ON vozaci.idvozaca=vozilavozaci.idvozaca JOIN vozila ON vozilavozaci.idvozila=vozila.idvozila WHERE vozaci.idvozaca=?";

private $GETALLDRIVERSBYCAR = "SELECT vozaci.*,vozilavozaci.*,vozila.* FROM vozila JOIN vozilavozaci ON vozila.idvozila=vozilavozaci.idvozila JOIN vozaci ON vozaci.idvozaca=vozilavozaci.idvozaca WHERE vozila.idvozila=?";


    public function __construct(){
        $this->db=DB::createInstance();
    }

    public function getAllProducers(){
        $statement=$this->db->prepare($this->GETALLPRODUCERS);
        $statement->execute();
        $result= $statement->fetchAll();
        return $result;
        
    }
    public function getAllCategories(){
        $statement=$this->db->prepare($this->GETALLCATEGORIES);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }
    //kad se insertuju podaci naziv varijabli mora biti isti sa nazivom kolona 
    public function insertCar($imeproizvodjaca,$model,$kategorija,$godiste,$cena){
        $statement = $this->db->prepare($this->INSERTCAR);
        $statement->bindValue(1,$imeproizvodjaca);
        $statement->bindValue(2,$model);
        $statement->bindValue(3,$kategorija);
        $statement->bindValue(4,$godiste);
        $statement->bindValue(5,$cena);
        $statement->execute();
       
       // return $result; 
    }
    public function insertDriver($ime,$prezime,$godiste){
        $statement=$this->db->prepare($this->INSERTDRIVER);
        $statement->bindValue(1,$ime);
        $statement->bindValue(2,$prezime);
        $statement->bindValue(3,$godiste);
        $statement->execute();
    }

    public function getAllCars(){
        $statement=$this->db->prepare($this->GETALLCARS);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }
    public function getAllDrivers()
    {
        $statement = $this->db->prepare($this->GETALLDRIVERS);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
    public function insertCarAndDriver($idvozila,$idvozaca){
        $statement=$this->db->prepare($this->INSERTCARANDDRIVER);
        $statement->bindValue(1,$idvozila);
        $statement->bindValue(2,$idvozaca);
        $statement->execute();
    }
    public function getAllCarsByDriverId($idvozaca)
    {

        $statement = $this->db->prepare($this->GETALLCARSBYDRIVERID);
        $statement->bindValue(1, $idvozaca);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_BOTH);//ili nesto tako proveriti
        return $result;

    }
    public function getAllDriversByCar($idvozila)
    {
        $statement = $this->db->prepare($this->GETALLDRIVERSBYCAR);
        $statement->bindValue(1, $idvozila);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_BOTH);
        return $result;
    }


} //end class DAO-----

?>
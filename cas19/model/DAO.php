<?php
require_once '../config/db.php';

class DAO {

 private $db;

private $GETALLPRODUCERS="SELECT * FROM proizvodjaci ORDER BY imeproizvodjaca ASC";

private $GETALLCATEGORIES="SELECT * FROM kategorije ORDER BY kategorija ASC";

private $INSERTVOZILO = "INSERT INTO vozila(imeproizvodjaca,model,kategorija,godiste,cena)VALUES(?,?,?,?,?)";

private $INSERTVOZACA ="INSERT INTO vozaci(ime,prezime,godiste)VALUE(?,?,?)";

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
    public function insertVozilo($imeproizvodjaca,$model,$kategorija,$godiste,$cena){
        $statement = $this->db->prepare($this->INSERTVOZILO);
        $statement->bindValue(1,$imeproizvodjaca);
        $statement->bindValue(2,$model);
        $statement->bindValue(3,$kategorija);
        $statement->bindValue(4,$godiste);
        $statement->bindValue(5,$cena);
        $statement->execute();
       
       // return $result; 
    }
    public function insertVozaca($ime,$prezime,$godiste){
        $statement=$this->db->prepare($this->INSERTVOZACA);
        $statement->bindValue(1,$ime);
        $statement->bindValue(2,$prezime);
        $statement->bindValue(3,$godiste);
        $statement->execute();
    }


}




?>
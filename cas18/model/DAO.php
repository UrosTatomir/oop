<?php
require_once '../config/db.php';

class DAO {

 private $db;

private $GETALLPRODUCERS="SELECT * FROM proizvodjaci ORDER BY imeproizvodjaca ASC";

private $GETALLCATEGORIES="SELECT * FROM kategorije ORDER BY kategorija ASC";

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




}




?>
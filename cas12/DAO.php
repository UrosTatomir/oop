<?php
require_once 'db.php';

class DAO {
//database access object
 private $db;

//ako dajemo korisniku mogucnost da unese koliko podataka zeli iz baze umesto fiksnog br u upitu stavimo znak ?

 private $GETLASTNPERSONS="SELECT * FROM osobe ORDER BY id DESC LIMIT ?";

//  private $GETFIRSTNPERSONS = "SELECT * FROM osobe ORDER BY id ASC LIMIT ?";

    public function __construct(){

        $this->db=DB::createInstance();
    }
    //funkcija za prikaz poslednjih nekoliko osoba iz baze
       
        
        public function getLastNPersons($n){
            
            $statement= $this->db->prepare($this->GETLASTNPERSONS); //prepare->pripremi upit
        
            $statement->bindValue(1, $n, PDO::PARAM_INT); // zameni parametre 1 prvi upit znak pitanja zameni sa brojem $$n PDO::PARAM_INT prebroj sve

            $statement->execute(); //izvrsi

            $result=$statement->fetchAll(); //uhvati sve iz baze ako hocemo jedan onda ide samo fetch
            return $result;

        }
        // public function getFirstNPersons($m){
        //     $statement=$this->db->prepare($this->GETFIRSTNPERSONS);
        //     $statement->bindValue(1,$m,PDO::PARAM_INT);
        //     $statement->execute();
        //     $result=$statement->fetchAll();
        //     return $result;
        // }
        
}

// folderi  -  MVC model view controller  Model ->DAO,   View->strane koje vidi korisnik  Controller-> npr. controller.php, ako je veci projekat  svaka funkcionalnos treba da ima svoj controller fajl npr InsertstudentController.php i tako dalje
//klase koje modeluju projekat


?>
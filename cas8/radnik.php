<?php
//abstractna klasa drzi model projekta ali se ne moze kreirati objekat
abstract class Radnik{
protected $ime;
protected $prezime;

    public function __construct($i,$p){

        $this->ime=$i;
        $this->prezime=$p;
    }
    abstract function izracunajPlatu();
    //abstractna funkcija ima samo svoj potpis ,nema telo metode. telo metode ce biti u nasledjenim klasama
    
    public function __toString(){
        return "Ime radnika je :".$this->ime.". Prezime radnika je ".$this->prezime;
   }
}
?>

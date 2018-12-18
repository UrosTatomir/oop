<?php
class Student extends Osoba{
  
    protected $brindeksa;
    protected $prosek;

    public function __construct($i,$p,$br,$pr){
    //pomocu parent:: dohvatamo metodu iz roditeljske klase
    parent::__construct($i,$p);
        $this->brindeksa=$br;
        $this->prosek=$pr;      
    }
    //ime i prezime dohvacamo pomocu get metoda zato sto su u roditeljskoj klasi def kao private, br indexa dohvacamo direktno zto sto su ovoj klasi i vidljivi su
    public function __toString(){
        return "Ime: ".$this->getIme()." prezime: ".$this->getPrezime()." br. indexa ".$this->brindeksa." prosek ".$this->prosek."<br>";
    }
     
}
// ime i prezime moramo da dohvatimo 
//pomocu get metoda zato sto su u prethodnoj klasi definisani kao private
// brindeksa i prosek mozemo da dohvatimo direktno zato sto
// su definisani u ovoj klasi i vidljivi su
?>
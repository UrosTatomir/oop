<?php

class Osoba {

private $ime;
private $prezime;


public function __construct($i, $p){
$this->ime=$i;
$this->prezime=$p;

}

public function getIme(){

    return $this->ime;
}

public function getPrezime(){

    return $this->prezime;
}


public function __toString(){
    return "Ime osobe je ".$this->ime." prezime osobe je: ".$this->prezime;
}



}




?>
<?php


class Osoba{
private $ime;
private $prezime;
private $jmbg;

public function __construct($i,$p,$jmbg){
    $this->ime=$i;
    $this->prezime=$p;
    $this->jmbg=$jmbg;
}

public function getIme(){
    return $this->ime;
}

public function getPrezime(){
    return $this->prezime;
}

public function getJmbg(){
    return $this->jmbg;
}

public function __toString(){
    return "Ime osobe je: ".$this->ime." prezime je: ".$this->prezime." jmbg je: ".$this->jmbg;
}

}
?>
<?php
include 'IPolicija.php';


class Policajac extends Osoba implements IPolicija{

private $brlicne;

public function __construct($i,$p,$jmbg,$br){
parent::__construct($i,$p,$jmbg);
$this->brlicne=$br;
}

//METODE KOJE SU POTPISANE U INTERFEJSU A OVDE SU DEFINISANE KAKO CE DA RADE
public function setBrlicne($br){
    $this->brlicne=$br;
}

public function getBrlicne(){
    return $this->brlicne;
}


public function __toString(){
    return parent::__toString()." broj licne karte: ".$this->brlicne;
}


}
?>
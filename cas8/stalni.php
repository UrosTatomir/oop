<?php
class Stalni extends Radnik {

  private $zarada;

  public function __construct($i,$p,$z){

    parent::__construct($i,$p);
    $this->zarada=$z;
  }
  //nasledjena abstractna metoda iz klase Radnik
  public function izracunajPlatu(){
      return $this->zarada;
  }
  public function __toString(){
      return parent::__toString().", zarada iznosi :".$this->izracunajPlatu();  //ovde moze i $this->zarada ali sigurnije je da pozovemofunkciju izracunajPlatu
  }

}
?>
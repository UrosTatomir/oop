<?php
class Stalni extends Radnik {

  private $zarada;
  private $brsati;
  public function __construct($i,$p,$z,$brs){

    parent::__construct($i,$p);
    $this->zarada=$z;
    $this->brsati=$brs;
  }
  //nasledjena abstractna metoda iz klase Radnik
  public function izracunajPlatu(){
    if($this->brsati<40){
      return $this->zarada*0.8;
    }
      if($this->brsati>40){
        return $this->zarada*1.3;
      }
      return $this->zarada;
  }
  public function __toString(){
      return parent::__toString().", zarada iznosi :".$this->izracunajPlatu();  //ovde moze i $this->zarada ali sigurnije je da pozovemo funkciju izracunajPlatu
  }

}
?>
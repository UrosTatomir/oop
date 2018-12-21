<?php
class Honorarni extends Radnik{

  private $satnica;
  private $brsati;
  public function __construct($i,$p,$s,$brs){

    parent::__construct($i,$p);
    $this->satnica=$s;
    $this->brsati=$brs;

  }
    public function izracunajPlatu(){
        return $this->satnica*$this->brsati;
    }
  public function __toString(){
      return parent::__toString()." zarada iznosi ".$this->izracunajPlatu();
  }
  
}
?>
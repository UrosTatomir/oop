<?php
class Honorarni extends Radnik{
 //atributi
  private $satnica;
  private $brsati;
  public function __construct($i,$p,$s,$brs){

    parent::__construct($i,$p);
    $this->satnica=$s;
    $this->brsati=$brs;

  }
    public function izracunajPlatu(){
      if($this->brsati>40){
        return $this->satnica*$this->brsati*1.3;
      }
        return $this->satnica*$this->brsati;
        
    }
  public function __toString(){
      return parent::__toString()." zarada iznosi ".$this->izracunajPlatu();
  }
  
}
?>
<?php
class Automobili extends Vozila{
  private $marka;
  private $tip;
  private $godiste;
  
  public function __construct($name, $engine, $wheels, $fuel,$mk,$type,$god){
      parent::__construct($name, $engine, $wheels, $fuel);
      $this->marka=$mk;
      $this->tip=$type;
      $this->godiste=$god;
  }
  public function getMarka(){
      return $this->marka;
  }
  public function getTip(){
      return $this->tip;
  }
  public function getGodiste(){
      return $this->godiste;
  }
  public function __toString(){
      return parent::__toString()." ,marke ".$this->getMarka().", tipa ".$this->getTip().", godista : ".$this->getGodiste();
      //moze i $this->getGodiste  i $this->godiste
  }
}
?>
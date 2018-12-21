<?php
class Kamioni extends Vozila{
  protected $nosivost;
  protected $nosivostprikolice;
  protected $markakamiona;
  protected $starostkamiona;
  
  public function __construct($name, $engine, $wheels, $fuel,$load,$trailer, $mkamiona,$godkamiona){
      parent::__construct($name, $engine, $wheels, $fuel);
      $this->nosivost=$load;
      $this->nosivostprikolice=$trailer;
      $this->markakamiona=$mkamiona;
      $this->starostkamiona=$godkamiona;
  }
  public function __toString(){
      return parent::__toString().", ovaj kamion ima nosivost ".$this->nosivost.", a duzina prikolice iznosi :".$this->nosivostprikolice.". Marka kamiona :".$this->markakamiona.", godiste proizvodnje :".$this->starostkamiona;
  }
}
?>
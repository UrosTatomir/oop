<?php
class Polovniautomobili extends Automobili{

    protected $cenapolovnogauta;

    public function __construct($name, $engine, $wheels, $fuel, $mk, $type, $god ,$price){
        parent::__construct($name, $engine, $wheels, $fuel, $mk, $type, $god);

        $this->cenapolovnogauta=$price;
    }
    public function smanjiCenu(){
        // mora $this->getGodiste() zato sto je private $godiste
          if($this->getGodiste() < 2010){
               $discount=$this->cenapolovnogauta*0.7;
              return $this->cenapolovnogauta=$discount;
          }
            return $this->cenapolovnogauta;      
    }
    public function __toString(){
     return parent::__toString().", cena polovnog automobila je : ".$this->cenapolovnogauta.", ako je automobil stariji od 2010 god, cena je smanjena za 30% i iznosi : ".$this->smanjiCenu();
    }

}
?>
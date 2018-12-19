<?php
class Sportautomobili extends Automobili{
    protected $granturismo;


    public function __construct($name, $engine, $wheels, $fuel, $mk, $type, $god,$gt){
     parent::__construct($name, $engine, $wheels, $fuel, $mk, $type, $god);
     $this->granturismo=$gt;
     
    }
    public function __toString(){
        return parent::__toString().", automobil pripada :".$this->granturismo." klasi vozila";
    }
}
?>
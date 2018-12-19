<?php
class Suv extends Automobili{
 protected $allwheelsdrive;
 
 public function __construct($name, $engine, $wheels, $fuel, $mk, $type, $god ,$awd){
     parent::__construct($name, $engine, $wheels, $fuel, $mk, $type, $god);
     $this->allwheelsdrive=$awd;
 }
 public function __toString(){
     return parent::__toString().", SUV automobil ima mogucnost ".$this->allwheelsdrive;
 }
}
?>
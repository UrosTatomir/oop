<?php

   class Tablet{

     private $marka;
     private $model;
     private $cena;
     private $ekran;

     // public function __construct($mark,$type,$price,$display){

     // 	    $this->marka = $mark;
     // 	    $this->model = $type;
     // 	    $this->cena = $price;
     // 	    $this->ekran = $display;
     // }
     public function getMarka(){

     	return $this->marka;
     }
     public function getModel(){

     	return $this->model;
     }
     public function getCena(){

     	return $this->cena;
     }
     public function getEkran(){

     	return $this->ekran;
     
     }

     //set model

     public function setMarka($marka){

     	$this->marka = $marka;

     }
     public function setModel($model){

     	$this->model = $model;
     }
     public function setCena($cena){
       
       if($cena<100 || $cena>1000){

       	 echo"cena ovog modela  ne odgovara nasim potrebama<br>";
       }else{
     	$this->cena = $cena;
     	}
     }
     public function setEkran($ekran){

     	 if($ekran>10 || $ekran<6){
     	    echo"velicina ekrana ovog modela  ne odgovara nasim potrebama<br>";	
     	 }else{
     	 	$this->ekran = $ekran;
     	 }
     }
     public function __toString(){

     	  return"Marka tableta je ".$this->getMarka().",<br> model ".$this->getModel().",<br> cena iznosi ".$this->getCena().",<br> sirina ekrana iznosi ".$this->getEkran();
     }

} //end class

class Fablet{

     private $mark;
     private $type;
     private $price;
     private $display;

     public function __construct($mark,$type,$price,$display){ //za funkciju  __construct pun  potrebno je uraditi funkcije get  seteri se unose prilikom formiranja objekta  u index.php fajlu.

           $this->mark = $mark;
           $this->type = $type;
           $this->price = $price;
           $this->display = $display;
     }
      public function getMark(){

          return $this->mark;
     }
     public function getType(){

          return $this->type;
     }
     public function getPrice(){

          return $this->price;
     }
     public function getDisplay(){

          return $this->display;
     
     }
     public function __toString(){

            return"Marka fableta je ".$this->getMark().",<br> model  ".$this->getType().",<br> cena iznosi ".$this->getPrice().",<br> sirina ekrana iznosi ".$this->getDisplay();
     }  


}

?>
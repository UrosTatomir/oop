<?php
 class Smartphone{

     private $mark;
     private $type;
     private $price;
     private $display;

  public function __construct($m,$t,$p,$d){

        $this->mark = $m;
        $this->type = $t;
        if($p<200 || $p>700){
           echo'Ovaj model smartphona ne odgovara<br> ';	
        }else{
        	$this->price = $p;
        }
        if($d<5.0 || $d>13){
        	echo'Ekran ovog modela ne odgovara<br>';
        }else{
        	$this->display = $d;
        }

  }
  public function getMark(){
  	  return $this->mark;
  }
  public function getModel(){
      return $this->type;
  }
  public function getCena(){
  	  return $this->price;
  }
  public function getEkran(){
  	  return $this->display;
  }
  public function __toString(){

      return'Marka smartphona je '.$this->getMark().' ,<br> naziv modela '.$this->getModel().',<br> cena proizvoda '.$this->getCena().' ,<br> velicina displeja iznosi '.$this->getEkran().'<br>';
  }// kada kazemo phpu da stampa ceo objekat on ce po defaultu //stampati pomocu metode toString ,metoda toString sluzi da rastavi objekat na pojedincne stringove


 } //end class

?>
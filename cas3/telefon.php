<?php
class Telefon{

	// atributi 
	   private $marka;
	   private $model;
	   private $cena;
	   private $boja;

    public function __construct($nmarka,$nmodel,$ncena,$nboja){

       $this->marka = $nmarka;
       $this->model = $nmodel;
       $this->cena = $ncena;
       $this->boja = $nboja;
         
    }
  // get metode
    public function getMarka(){

    	return $this->marka;
    }
    public function getModel(){
   
       return $this->model;

    }
    public function getCena(){

      return $this->cena;

    }
    public function getBoja(){

    	return $this->boja;
    }

    // set metode



    public function setMarka($marka){

    	 $this->marka = $marka;
    }
    public function setModel($model){

    	 $this->model = $model; 
    }
    public function setCena($cena){

    	 $this->cena = $cena;
    }
    public function setBoja($boja){

    	 $this->boja = $boja;
    }
    // to string sluzi za rastavljanje pobjekta na pojedinacne stringove
    public function __toString(){
       
        return"Marka telefona je ".$this->getMarka().",<br> model telefona je ". $this->getModel().",<br> cena telefona je ".$this->getCena().",<br> boja telefona je  " .$this->getBoja(); 

    }
}

// metoda  toString() sluzi za ispis celog objekta rastavlja objekat u stringove i vrsi ispiss
?>



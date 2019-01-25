<?php
abstract class Racun{

    protected $stanje;


    public function uplata($iznos){
     if($iznos>0){
        //drugi nacin je  $this->stanje= $this->stanje+$iznos;
         $this->stanje+=$iznos;
     }
    }

    // definisanje abstraktne metode isplata 
    public abstract function isplata($iznos);


    

    public function __toString(){
        return " racun - stanje: ".$this->stanje;
    }



}


?>
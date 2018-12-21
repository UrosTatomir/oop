<?php
abstract class Racun{

    protected $stanje;

    public function uplata($iznos){
      if($iznos>0){
        //drugi nacin je $this->stanje= $this->stanje+$iznos
          $this->stanje+=$iznos;
      }

    }
    public function __toString(){
        return "stanje racuna: ".$this->stanje;
    }
}
?>
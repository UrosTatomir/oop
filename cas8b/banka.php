<?php
abstract class Banka{
   protected $stanje; //atribut
   
   public function uplata($iznos){
       if($iznos>0){
           //$this-stanje=$this->stanje+$iznos;
           $this->stanje+=$iznos;
       }
   }
   public function __toString(){
       return "<h4>racun u banci - stanje : $this->stanje</h4>";
   }
}
?>
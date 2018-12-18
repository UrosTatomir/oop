<?php
class Samofinansirajuci extends Student{

  protected $skolarina;
  
  public function __construct($i, $p, $br, $pr,$sk){

   parent::__construct($i, $p, $br, $pr);
   
   $this->skolarina=$sk;
  }
  public function popustSkolarine($popust){
    
       return $discount=$this->skolarina*$popust;
  }
  public function __toString(){

    return parent::__toString()." skolarina iznosi : ".$this->skolarina;
  }
  
}

?>
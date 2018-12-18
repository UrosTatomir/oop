<?php
class Samofinansirajuci extends Student{

  protected $skolarina;

  public function __construct($i, $p, $br, $pr,$sk){

   parent::__construct($i, $p, $br, $pr);
   
   $this->skolarina=$sk;
  }
  public function __toString(){

    return parent::__toString()." skolarina iznosi : ".$this->skolarina."<br>";
  }
  
}

?>
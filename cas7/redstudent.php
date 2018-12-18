<?php
class Redstudent extends Student{
    protected $godinastudija;
    protected $brispita;

    public function __construct($i, $p, $br, $pr,$gods,$bris){
        parent::__construct($i, $p, $br, $pr);

        $this->godinastudija=$gods;
        $this->brispita=$bris;
    }
    public function __toString(){
        return parent::__toString()." na godini studija :".$this->godinastudija." , polozio ".$this->brispita." od pocetka studija.<br>";
    }
    
}

?>
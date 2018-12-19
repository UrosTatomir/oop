<?php
class Vozila{
    private $imevozila;
    private $tippogona;
    private $brojtockova;
    private $gorivo;

    public function __construct($name,$engine,$wheels,$fuel){
        $this->imevozila=$name;
        $this->tippogona=$engine;
        $this->brojtockova=$wheels;
        $this->gorivo=$fuel;
    }
    public function getImeVozila(){
        return $this->imevozila;
    }
    public function getTipPogona(){
        return $this->tippogona;     
    }
    public function getBrojTockova(){
        return $this->brojtockova;
    }
    public function getGorivo(){
        return $this->gorivo;
    }
    public function __toString(){
        return "Vozilo naziva ".$this->imevozila." poseduje pogon ".$this->tippogona.", broja tockova : ".$this->brojtockova.", vrsta goriva je : ".$this->gorivo; 
    }
}
?>
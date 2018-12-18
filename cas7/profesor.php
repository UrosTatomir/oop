<?php
class Profesor extends Osoba{
    protected $radnistaz;
    protected $predmet;

    public function __construct($i,$p,$rs,$pred){

        parent::__construct($i,$p);

        $this->radnistaz=$rs;
        $this->predmet=$pred;

    }
    public function __toString(){
        return parent::__toString()." radni staz: ".$this->radnistaz." predmet : ".$this->predmet."<br>";
    }

}

?>
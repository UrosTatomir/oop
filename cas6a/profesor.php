<?php
class Profesor extends Osoba{
    private $katedra;
    private $brgod;
    private $predavanja;


    public function PredKatedra($k){
        $this->katedra=$k;
    }
    public function BrGodStaz($gs){
        $this->brgod=$gs;
    }
    public function Predavanja($pr){
        $this->predavanja=$pr;
    }

    
}
?>
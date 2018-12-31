<?php
class Devizni extends Banka{
    protected $kredit;

    public function setKredit($minus){
        $this->kredit=$minus;
    }

    public function isplataDevizni($iznos){

        $stanjekredit=$this->stanje+$this->kredit;

        if($iznos<=$stanjekredit){

                if($iznos>$this->stanje){

                 $zaduzenje=$iznos-$this->stanje;// oduzimamo trazeni iznos od pocetnog stanja;
                 $this->kredit-=$zaduzenje;
                 $this->stanje=0;
                 
                 echo"<h4>Vas devizni racun u iznosu $iznos je isplacen</h4>";
                 echo"<h4>Aktivirali ste kredit, raspolozivo vam je jos $this->kredit eur.</h4>";   
                }else{
                $this->stanje-=$iznos;
                echo "<h4>Vas novac u iznosu $iznos je isplacen, na racunu je ostalo $this->stanje eur.</h4>";
                }
            
        }else{
            echo"<h4>Nemate dovoljno sredstava na racunu</h4>";
        }
    }
    
    public function __toString(){
        return "<h4>Vas devizni </h4>".parent::__toString()."<h4>dozvoljeni kredit iznosi $this->kredit eur.</h4>";
    }
}
?>
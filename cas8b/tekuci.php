<?php
class Tekuci extends Banka{
    protected $limit;

    public function setLimit($minus){
      //$minus je ulazna promenjiva 
       $this->limit=$minus; 

    }
    public function isplataTekuci($iznos){
       //$iznos je ulazni parametar - promenjiva
       $stanjelimit=$this->stanje+$this->limit;//ukupno rasploziva sredstva stanje + limit
 
       if($iznos<=$stanjelimit){
          if($iznos>$this->stanje){
              $zaduzenje=$iznos-$this->stanje;
              //$this->limit=$this->limit-$zaduzenje; moze i ovako
              $this->limit-=$zaduzenje;
              $this->stanje=0; //stanje glavnice je 0 jer je trazeno vise novca od glavnice
            echo"<h4>Vas iznos je isplacen</h4>";
            echo"Usli ste u dozvoljeni minus, raspolozivo vam je jos : $this->limit , din</h4>";
          }else{// mora else uprotivnom izraz nece biti vidljiv
                $this->limit -= $iznos; //oduzimmo sredstva od glavnice 
                echo "<h4>Vas iznos sa tekuceg racuna je isplacen, novo stanje :$this->stanje ,din</h4>";
          } 
           
       }else{
            echo "<h2>Nemate dovoljno sredstava na racunu</h2>";
       }
       


    }
    public function __toString(){
        return"<h4>Vas tekuci</h4>". parent::__toString()."<h4>, a dozvoljeni minus iznosi : $this->limit</h4>";
    }
}

?>
<?php
class Dinarski extends Racun{

protected $limit;

public function setLimit($minus){

    $this->limit=$minus;
}

// menjamo naziv metode prema nazivu abstraktne metode iz klase Racun
public function isplata($iznos){

    $stanjesalimitom=$this->stanje+$this->limit;

    if($iznos<=$stanjesalimitom){
       // $novostanje=$stanjesalimitom-$iznos;
        //echo "Vas iznos je isplacen<br>";
       // echo "Novo stanje na racunu je: ".$novostanje;
      if($iznos>$this->stanje){
        // ovde je kontrolno logika ako klijent ulazi u minus
        $zaduzenje=$iznos-$this->stanje;
        $this->limit-=$zaduzenje;
        $this->stanje=0;
        echo "Vas iznos je isplacen<br>";
        echo "Usli ste u dozvoljeni minus, Vas limit iznosi jos: ".$this->limit;

      }else{
          // ako trazi manji iznos od stanja koje ima na racunu
          $this->stanje-=$iznos;
          echo "Vas iznos je isplacen, novo stanje je: ".$this->stanje;
      }

    }else{
        echo "Nemate dovoljno sredstava na racunu";
    }



}




public function __toString(){
    return "Dinarski - ".parent::__toString()."<br>Dozvoljeni minis iznosi: ".$this->limit;
}








}

?>
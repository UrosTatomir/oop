<?php
class Dinarski extends Racun{

  protected $limit;//dozvoljeni minus

  public function setLimit($minus){

      $this->limit=$minus;

  }
  public function isplataDinarski($iznos){
       $stanjesalimitom=$this->stanje+$this->limit;

       if($iznos<=$stanjesalimitom){
        //  $novostanje=$stanjesalimitom-$iznos;     
        //  echo"vas iznos je isplacen<br>";
        //  echo"novostanje na racunu je :".$novostanje;
            if($iznos>$this->stanje){
                ///klijent ulazi u minus hoce da podigne vise sredstava od glavnice a u okviru dozvoljenog minusa
            $zaduzenje=$iznos-$this->stanje;

            $this->limit-=$zaduzenje; //novo zaduzenje
            $this->stanje=0; //stanje glavnice je 0
            echo"<h3>vas iznos je isplacen</h3>";
            echo"<h3>usli ste dozvoljeni minus,vas limit iznosi jos : $this->limit</h3>";
            }else{
                //klijent nije u minusu
            $this->stanje-=$iznos;
            echo"<h3>Vas iznos je isplacen,novo stanje je :  $this->stanje</h3>";
              }
       }else{
           echo"<h2>Nemate dovoljno sredstava na racunu</h2>";
       }
  }
  public function __toString(){
      return "dinarski - ". parent::__toString(). "<br> dozvoljeni minus iznosi :". $this->limit;
  }

}
?>
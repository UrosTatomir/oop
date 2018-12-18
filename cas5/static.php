<?php
  class Osoba{
   private $ime;
   private $prezime;

   //static atribut bi trebalo odmah inicijalizovati dodati vrednost, static atribut je dostupan svuda.
   public static $godiste=2001;

    public function punoletna(){
      if(Osoba::$godiste<2010){
        return true;
      }else{
      	return false;

      }
    }

  }
  //static varijabli pristupamo uvek preko ::
  // pristup static atributu ili static metodi vrsimo preko klase //pomocu ::
  // poziv funkcije koja je static moyemo takodje vrsiti pomocu klase
// i dve dvotacke :: 
  echo'pristup static varijabli preko clase '.Osoba::$godiste;
  $osoba=new Osoba();
  echo'<br><br>';
  echo'static funkcija '.Osoba::punoletna();
  echo'<br>';
  var_dump(Osoba::punoletna());
  echo'<br><br>';
  //instalirati visual studio code
?>
<?php
class  Automobil{

// Prva vezba
// Kreirati klasu Auto koju opisuju privatni atributi marka, cena, godiste i boja.
// Kreirati get i set metode 
// Van klase kreirati objekat, preko set metoda dodeliti vrednosti atributima.
// Preko get metoda ispisati vrednosti u browseru.
// Kreirati pun konstruktor i probati da se napravi objekat preko punog konstruktora. (Prethodno kreiran objekat preko praynog konstruktora iskomentarisati)
    private $marka;
    private $cena;
    private $godiste;
    private $boja;

    // public function __construct($mark,$price,$year,$color){

    //        $this->marka = $mark;
           
    //        if($price<500 || $price>10000){

    //        	echo"Cena automobila  ne odgovara<br>";
    //        } else{
    //           $this->cena = $price;

    //        }
    //        if($year<2000 or $year>2018){

    //        	 echo"Godiste automobila ne odgovara<br>";
    //        }else{
    //        	  $this->godiste = $year;
    //        }
           
    //        $this->boja = $color;

    // }
// get metoda sluzi za pristup private atributima u klasi

      public function getMarka(){

        return $this->marka;       

      }

      public function getCena(){

      	return $this->cena;

      }

      public function getGodiste(){

      	return $this->godiste;

      }

      public function getBoja(){

      	return $this->boja;

      }
  // set metoda sluzi za dodeljivanje vrednosti atributa

     public function setMarka($autobrend){

     	 $this->marka = $autobrend;
     } 

     public function setCena($cenaauta){

        if($cenaauta < 500 || $cenaauta > 10000){

          echo"Cena ovog automobila ne odgovara vasim zahtevima<br>";
        }else{
            $this->cena = $cenaauta;
          

        }

     }
     public function setGodiste($godpro){

        if($godpro<2018 || $godpro>2000){

     	$this->godiste = $godpro;

     	}else{
           echo"Ovaj automobil je ne odgovarajuce godine proizvodnje";	
     	}
     }
     public function setBoja($color){

     	 $this->boja = $color;
     }

}
 // $auto = new Automobil('Mercedes', 13000,1999,'crvena'); //kreiranje objekta preko punog konstruktora

$auto = new Automobil();  //kreiranje objekta preko praznog konstruktora


$auto->setMarka('Bmw');
$auto->setCena(9999);
$auto->setGodiste(2017);
$auto->setBoja('plava');

//pozivamo get metodu
echo $auto->getMarka().'<br>';
echo $auto->getCena().'<br>';
echo $auto->getGodiste().'<br>';
echo $auto->getBoja().'<br>';

?>
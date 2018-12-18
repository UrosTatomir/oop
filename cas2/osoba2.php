<?php
class Osoba{

private $ime;
private $prezime;
private $godiste;

// kreiranje konstruktora inicijalizacije

   public function __construct($i,$p,$g){

      $this->ime = $i;
      $this->prezime = $p;
      $this->godiste = $g;

   }

// get sluzi za pristup private atributa klase

    public function getIme(){

     return $this->ime;

    }

    public function getPrezime(){


      return $this->prezime;

    }

    public function getGodiste(){

    	return $this->godiste;
    }


    // set metode sluze za dodeljivanje vrednosti aatributima

    public function setIme($novoime){

       if(strlen($novoime)>2){

         $this->ime = $novoime;

      }else{

      	echo "ime mora da sadrzi bar tri karaktera<br>";
      }

    }

    public function setPrezime($novoprezime){

        if(strlen($novoprezime)>3){


        	$this->prezime = $novoprezime;

        }else{

        	 echo "prezime mora da sadrzi bar tri karaktera<br>";
        }


    }

    public function setGodiste($novogodiste){

        if($novogodiste < 1920 || $novogodiste > 2018){

        	echo "neispravno godiste<br>";

        }else{

        	$this->godiste = $novogodiste;
        }

    }

}

//kreiranje objekta

// $osoba = new Osoba();
$osoba = new Osoba('Pero','marjanovic',1970); //kreiranje objekta preko punog konstruktora

// $osoba->setIme('Ana');
// $osoba->setPrezime('Petrovic');
// $osoba->setGodiste(1990);

//pozivi get metoda

echo $osoba->getIme().'<br>';
echo $osoba->getPrezime().'<br>';
echo $osoba->getGodiste().'<br>';

//konstruktor deli se na pun =>konstruktor inicijalizacije __construct('Marija','Vukic',1968);

//prazan (prazan podrazumevan npr. $osoba = new Osoba();)

//domaci rad npraviti sve get set  i konstuktor
// kreirati klasu auto koji opisuju private atributi marka cena godiste i boja => get ,set 
//van klse kreirati objekat preko praznog konstruktora  set i get ispisati 

//drugo probati kreirati preko punog konstruktora sve ponovo
?>
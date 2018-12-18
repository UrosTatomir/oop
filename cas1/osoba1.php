<?php
class Osoba{

//definisanje atributa klase
public $status = 'zaposlena';
public $ime= 'Marija';
public $prezime = 'Djuric'; //javni atrubut prezime koji ima vrednost djuric 
// private $godiste = '1989';
public $godiste = '1989';

}  
//kreiranje objekta

$osoba = new Osoba();
// osoba je Objekat kreiran od klase Osoba

var_dump($osoba); 

echo"<br><br>";
echo $osoba->ime;
echo "<br><br>";
echo $osoba->prezime;
echo "<br><br>";
echo $osoba->godiste;
echo "<br><br>";
echo $osoba ->status;

?>
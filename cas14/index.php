<?php
require_once 'DAO.php'; //prikljuciti DAO.php
//kreiranje objekta od DAO klase
$dao=new DAO();

$cars =$dao->getAllCarsByProducer('mercedes');

echo"<h3>prikaz svih automobila istog proizvodjaca<h3>";

foreach($cars as $car){
    echo"$car[imeproizvodjaca] $car[model] $car[godiste] $car[cena] $car[kategorija]<br>";
}
echo"<br>";
echo"<h3>prikaz svih modela vozila iste kategorije</h3>";

$cars=$dao->getAllCarsByCategory('A');

foreach($cars as $value){
    echo"$value[imeproizvodjaca] $value[model] $value[kategorija]<br>";
}
echo"<br>";
echo"<h3>Prikaz svih vozaca koji su zaduzili isto vozilo </h3>";

$drivers=$dao->getAllDriversObligateCar(1);

foreach($drivers as  $driver){
    echo"$driver[ime] $driver[prezime] zaduzio je $driver[imeproizvodjaca] $driver[model] $driver[kategorija] $driver[godiste]<br>";
}
echo"<br>";
echo"<h3>Prikaz svih vozila koje je zaduzio jedan vozac</h3>";
$d=30;
$cars=$dao->getAllCarsObligateDriver($d);
foreach($cars as $car){
    echo"$car[ime] $car[prezime] $car[imeproizvodjaca] $car[model] $car[kategorija] $car[godiste] $car[cena]<br>";
}
echo"<br>";
// $c='Japan';
echo"<h3>Prikaz svih proizvodjaca vozila po zemlji porekla </h3><br>";
$cars=$dao->getAllProducerByCountry('Japan');
foreach($cars as $car){
    echo"$car[imeproizvodjaca] $car[model] $car[zemljaporekla] $car[kategorija] $car[godiste] $car[cena]<br>";
}

echo"<br>";
echo"<h3>Prikaz svih vozila po trazenoj zemlji porekla </h3>";
$carsbycountry=$dao->getAllCarsByCountry('Nemacka');
foreach($carsbycountry as $car){
  echo"$car[imeproizvodjaca] $car[zemljaporekla] $car[model] $car[godiste]<br>";
}
echo"<br>";
echo"<h3>Prikaz svih vozila po vremenu kategorije</h3>";
$carsbycat=$dao->getAllCarsByCatTime(8);
foreach($carsbycat as $car){
    echo"$car[imeproizvodjaca]$car[model]$car[godiste]$car[kategorija]$car[trajanje]<br>";
}
echo"<br>";
echo"<h3>prikaz svih vozila koje je zaduzio jedan vozac</h3>";
$carsbyonedriver=$dao->getAllCarsOneDriver(2);
foreach($carsbyonedriver as $car){
    echo"$car[imeproizvodjaca] $car[model] $car[kategorija] $car[ime] $car[prezime]<br>";
}
echo"<br>";
echo"<h3>Prikaz svih vozila po zemlji porekla i koji vozaci su ih zaduzili</h3>";
$carscountry=$dao->getAllCarsByCountryProduce('nemacka');
foreach($carscountry as $car){
    echo"$car[imeproizvodjaca] $car[model] $car[kategorija] $car[godiste] $car[zemljaporekla] $car[ime] $car[prezime] $car[godiste] $car[opis] $car[trajanje]<br>";
}

// $persons=$dao->getLastNPersons(4);
//niz se uvek stampa petljom
// foreach ($persons as $value) {
//     echo "$value[ime] $value[prezime] $value[jmbg]<br><br>"; 
// }
// echo"<br><br>";
// // $persons = $dao->getFirstNPersons(4);
// // var_dump($persons);

// //asocijativni niz [ime]-> pozicija
// foreach($persons as $value){
//     echo"$value[ime] $value[prezime] $value[jmbg]<br><br>";                                 



// }

?>
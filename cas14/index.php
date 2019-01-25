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

$drivers=$dao->getAllDriversObligateCar(25);
foreach($drivers as  $driver){
    echo"$driver[ime] $driver[prezime] id vozila = $driver[idvozila]<br>";
}
echo"<br>";
echo"<h3>Prikaz svih vozila koje je zaduzio jedan vozac</h3>";
$d=30;
echo"<h3>id vozaca = $d ,zaduzio je sledeca vozila : </h3><br>";
$cars=$dao->getAllCarsObligateDriver($d);
foreach($cars as $car){
    echo"$car[imeproizvodjaca] $car[model] $car[kategorija] $car[godiste] $car[cena]<br>";
}
echo"<br>";
$c='Japan';
echo"<h3>Prikaz svih proizvodjaca vozila po zemlji porekla $c</h3><br>";
$cars=$dao->getAllProducerByCountry($c);
foreach($cars as $car){
    echo"$car[imeproizvodjaca] $car[model] $car[kategorija] $car[godiste] $car[cena]<br>";
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
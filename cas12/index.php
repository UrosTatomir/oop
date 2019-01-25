<?php
require_once 'DAO.php'; //prikljuciti DAO.php
//kreiranje objekta od DAO klase
$dao=new DAO();

$persons=$dao->getLastNPersons(4);
//niz se uvek stampa petljom
foreach ($persons as $value) {
    echo "$value[ime] $value[prezime] $value[jmbg]<br><br>"; 
}
echo"<br><br>";
// // $persons = $dao->getFirstNPersons(4);
// // var_dump($persons);

// //asocijativni niz [ime]-> pozicija
// foreach($persons as $value){
//     echo"$value[ime] $value[prezime] $value[jmbg]<br><br>";                                 



// }

?>
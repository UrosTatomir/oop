<?php
include 'osoba.php';
include 'student.php';
include 'profesor.php';
//osoba
$osoba=new Osoba('IME','PREZIME');

    echo $osoba;
    echo'<br>';

//student
$student=new Student('Clint','Eastwood');

$br=112;
$s='PHP';
$p=8.3;
$student->brojIndexa($br);
$student->SmerStudija($s);
$student->prosekStudiranja($p);

echo"Student imena  ".$student->getIme()."  ".$student->getPrezime()." ,  broj indexa ".$br. ", smer studija ".$s. ", prosek studiranja " . $p . "<br>";

//profesor

$profesor=new  Profesor('Steve','McQeen');

$k='Math';
$gs= 45;
$pr='monday';

$profesor->PredKatedra($k);
$profesor->BrGodStaz($gs);
$profesor->Predavanja($pr);

echo"Profeosor se zove ".$profesor->getIme()." ".$profesor->getPrezime()." , radi na katedri ".$k." godina staza ".$gs." , predavanja se odrzavaju dana ".$pr."<br>";


?>
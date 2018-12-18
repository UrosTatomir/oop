<?php
include 'Osoba.php';
include 'student.php';
include 'samofinansirajuci.php';
include 'profesor.php';
include 'redstudent.php';
include 'dekan.php';
echo'class Student extends Osoba<br>';
$student = new Student("Maja","Maric","123/23",8.5);

echo $student;
echo'<br><br>';
echo'class Samofinansirajuci extends Student<br>';
$samofinansirajuci=new Samofinansirajuci("Marko","Maric","100/45",8.3,80000);
$popust=0.3;

echo $samofinansirajuci;
echo", ako je zadovoljen uslov za popust skolarina se mnozi sa koeficijentom : " .$popust." sto ukupno iznosi :    ".$samofinansirajuci->popustSkolarine($popust); 
echo'<br><br>';

echo'class Profesor extends Osoba<br>';
$profesor=new Profesor("Petar","Petrovic",34,"Matematika");

echo $profesor;
echo "<br><br>";
echo"class Dekan extends Profesor<br>";
$i='Nikola'; 
$p='Jovovic'; 
$rs=41;
$pred='Fizika';
$d=12;
$dekan=new Dekan($i,$p,$rs,$pred,$d);
echo $dekan;
echo"<br><br>";
echo'class Redstudent extends Student<br>';
$i='Jovo';
$p='Jovanovic';
$br='125/56';
$pr=7.8; 
$gods=3; 
$bris=24;
$redstudent=new Redstudent($i, $p, $br, $pr, $gods, $bris);

echo$redstudent;

?>
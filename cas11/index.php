<?php
include 'Osoba.php';
include 'Policajac.php';


$p=new Policajac("Marko", "nikolic", 31019998877, 2568 );

echo $p->getBrlicne();

$p->setBrlicne(55999);
echo "<br><br>";
echo $p;

?>
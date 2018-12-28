<?php
require 'Racun.php';
require 'Dinarski.php';
require 'Devizni.php';

$din = new Dinarski();

$din->uplata(50000);

// setovanje dozvoljenog minusa 
$din->setLimit(40000);

//echo $din;

echo "<br><br>";

$din->isplataDinarski(80000);
echo "<br>".$din;

/////////////////////////////////////////////DEVIZNI

$dev=new Devizni();

$dev->uplata(1000);

echo "<br><br>".$dev;

//poziv metode isplata iz deviznog racuna
$dev->isplataDevizni(700);
echo "<br><br>".$dev;





?>
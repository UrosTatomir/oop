<?php
require 'racun.php';
require 'dinarski.php';
include 'devizni.php';

$din=new Dinarski();
$din->uplata(50000);
//setovanje dozvoljenog minusa
$din->setLimit(40000);
// echo $din;  test 
echo"<br><br>";
$din->isplataDinarski(49999);
echo"<br>".$din;
echo"<br>";

////////////Devini racun

$dev= new Devizni();
$dev->uplata(3000);
echo $dev;
echo"<br>";
//poziv metode isplata iz deviznog racuna
$dev->isplataDevizni(1000);
echo$dev;


//
?>
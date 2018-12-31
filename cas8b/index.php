<?php
require 'banka.php';
require 'tekuci.php';
require 'devizni.php';
require 'visa.php';
//tekuci racun-----
$tekuci=new Tekuci();
$tekuci->setUplata(60000);
$tekuci->setLimit(40000);
//tekuci isplata
$tekuci->isplataTekuci(60001);
echo $tekuci;

echo'<br>';

// devizni----

$dev=new Devizni();
$dev->setUplata(3500);
$dev->setKredit(500);
$dev->isplataDevizni(1000);
echo $dev;

//-visa kartica
echo'<br>';
$visa=new Visa();
$visa->setUplata(50000);
$visa->setLimit(50000);
$visa->isplataTekuci(49999);
echo $visa;
?>
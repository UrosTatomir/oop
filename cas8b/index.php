<?php
require 'banka.php';
require 'tekuci.php';
require 'devizni.php';
//tekuci racun-----
$tekuci=new Tekuci();
$tekuci->setUplata(60000);
$tekuci->setLimit(40000);
//tekuci isplata
$tekuci->isplataTekuci(80000);
echo $tekuci;

echo'<br>';

// devizni----

$dev=new Devizni();
$dev->setUplata(3500);
$dev->isplataDevizni(1400);
echo $dev;
?>
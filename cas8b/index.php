<?php
require 'banka.php';
require 'tekuci.php';
require 'devizni.php';
//tekuci racun-----
$tekuci=new Tekuci();
$tekuci->uplata(60000);
$tekuci->setLimit(40000);
//tekuci isplata
$tekuci->isplataTekuci(61000);
echo $tekuci;

echo'<br>';

// devizni----

$dev=new Devizni();
$dev->uplata(3500);
echo $dev;
?>
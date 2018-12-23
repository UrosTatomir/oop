<?php
require 'radnik.php';
require 'stalni.php';
require 'honorarni.php';
require 'pomocni.php';

$stalni= new Stalni("milan","kolar",60000,39);
echo $stalni;
echo"<br><br>";
$honorarni=new Honorarni("Pero","nikolic",400,45);
echo $honorarni;
echo"<br><br>";
$pomocni=new Pomocni("jovo","guzina",30000,39,"parkiranje vozila");
echo $pomocni;
?>
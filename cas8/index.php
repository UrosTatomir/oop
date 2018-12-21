<?php
require 'radnik.php';
require 'stalni.php';
require 'honorarni.php';

$stalni= new Stalni("milan","kolar",60000);
echo $stalni;
echo"<br><br>";
$honorarni=new Honorarni("Pero","nikolic",400,40);
echo $honorarni;
?>
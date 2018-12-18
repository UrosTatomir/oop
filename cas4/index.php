<?php
require 'Auto.php';

$auto=new Auto("Toyota",5000,"plava","1999");

echo $auto;
echo"<br><br>";

echo "Vrednost auta je: ".$auto->promeniCenu();

$auto->ofarbajAuto("crvena");


//echo $auto->getBoja();
echo"<br><br>";
echo $auto;
?>
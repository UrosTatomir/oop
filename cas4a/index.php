<?php
require 'Auto.php';

$prviauto=new Auto("Peugeot",5000,"crna","2009");
$drugiauto=new Auto("Honda",8000,"siva","2010");
$treciauto=new Auto("Citroen",6500,"crvena","2011");
$cetvrtiauto=new Auto("Kia",7000,"braon","2014");

$automobili= array($prviauto, $drugiauto, $treciauto, $cetvrtiauto);

foreach($automobili as $pom){
	echo $pom;
}

?>
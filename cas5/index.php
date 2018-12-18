<?php
require 'Auto.php';
require 'bicycle.php';
require 'static.php'; //pristup static varijabli i funkciji dovoljno require
$prviauto=new Auto("Peugeot",5000,"crna","2008");
$drugiauto=new Auto("Honda",8000,"siva","2010");
$treciauto=new Auto("Citroen",6500,"crvena","2011");
$cetvrtiauto=new Auto("Kia",7000,"braon","2014");

$automobili= array($prviauto, $drugiauto, $treciauto, $cetvrtiauto);
$god=2010;

$bicycle1 = new Bicycle('Colnago','GTX',2011,'red',1020);
$bicycle2 = new Bicycle('Shimano','turbo',2010,'black',990);
$bicycle3 = new Bicycle('Capriolo','Mountinebike',2012,'silver',1990);
$bicycle4 = new Bicycle('Peugeot','bmx',2009,'white',590);

$bike = [$bicycle1,$bicycle2,$bicycle3,$bicycle4];

//---class Auto------------------
foreach($automobili as $pom){
	echo $pom; // stampa  __toString() metoda class Auto
    

}
//funkcija koja vraca najskuplji auto
echo'<br><br>';

 function najskupljiAuto($automobili){ //funkcija ne mora biti public kad je u index.php fajlu

     //pretpostavkada je prvi najskuplji u nizu
	$max = $automobili[0];

	foreach($automobili as $pom){

		 if($pom->getCena() > $max->getCena()){

            $max = $pom;
		 }
	}
	return $max;
}
function prosecnaCenaSvih($automobili){ //funkcija koj prosecnu cenu svih automobila u nizu
    //pretpostvke u pocetku
    $prosek;
    $sumacena=0;
    $brojauta=0;

    foreach($automobili as $pom){

         $sumacena=$sumacena+$pom->getCena();
         $brojauta++;
         
    }
    $prosek = $sumacena/$brojauta;
    // echo"broj automobila".$brojauta;
    // echo"ukupna suma cena".$sumacena;
    // echo "prosek".$prosek;
    return $prosek;


}

//funkcija koja vraca br automobila mladjih od unetog godista

function brojAutomobilaMladjihOd($automobili,$god){
    
	 $brojauta=0;

	 foreach($automobili as $pom){
	 	if($pom->getGodiste()>$god){
	 		$brojauta++;
	 	}
	 }
	 return $brojauta;
}

 


function najjeftinijiAuto($automobili){
    $min = $automobili[0];

	foreach($automobili as $pom){

		 if($pom->getCena() < $min->getCena()){

            $min = $pom;
		 }
	}
	return $min;

}
function brojAutaStarijihOd($automobili,$god){
      
	   $brojauta=0;  
	   foreach($automobili as $pom){

			if($pom->getGodiste()<=$god){
              $brojauta++;
             
				               				
			}		
	   }
		return $brojauta;
	}

//--class Bicycle --
// echo __toString() class Bicycle
foreach($bike as $value){
    echo $value;
    
}
function numbBicycle($bike){
	$numb=0;
	foreach($bike as $value){
		$numb++;
	}
	return $numb;
}
function najSkupljiBicikl($bike){
	$maxb=$bike[0];
	foreach($bike as $value){
		if($value->getPrice()>$maxb->getPrice()){
           $maxb=$value;
		}			
	}
      return $maxb;
}
function najJeftinijiBicikl($bike){
	$minb=$bike[0];
	foreach($bike as $value){
		if($value->getPrice()<$minb->getPrice()){
			$minb=$value;
		}					
	}
	return $minb;
}
function prosecnaCenaBicikla($bike){
	$prosek;
	$sumab=0; //integer value
	$numb=0;
	foreach($bike as $value){
		$sumab=$value->getPrice()+$sumab;
		$numb++;
	}
	$prosek=$sumab/$numb;
    return $prosek;

}
function brojBiciklaStarijihOd($bike,$god){
    $numb=0;
    foreach($bike as $value){
    	if($value->getYear()<=$god){
    		$numb++;
    	}   			
    }
    return $numb;

}
function najStarijiBicikl($bike){
	$maxgb=$bike[0];
	foreach($bike as $value){
		if($value->getYear()<$maxgb->getYear()){
			$maxgb=$value;//bitan redosled
		}
	}
	return $maxgb;
} 

////// pozivi funkcija na izvrsenje////

echo"Najskuplji auto je ".najskupljiAuto($automobili); // echo funkcija najskupljiAuto($automobili)
echo"<br>";
echo" Prosecna cena svih automobila ".prosecnaCenaSvih($automobili);
echo"<br>";
echo"broj automobila mladjih od ".$god.", ".brojAutomobilaMladjihOd($automobili,$god);
echo"<br>"; 
echo"Najjeftinij  auto je ".najjeftinijiAuto($automobili);
echo"<br>"; 
echo"Broj automobila iste god.proizvodnje ili stariji od ".$god." iznosi ".brojAutaStarijihOd($automobili,$god);
echo'<br><br>';
echo'Ukupan broj bicikala na lageru = '.numbBicycle($bike).'<br>';
echo'Najskuplji bicikl je '.najSkupljiBicikl($bike).'<br>';
echo'Najjeftiniji bicikl je '.najJeftinijiBicikl($bike).'<br>';
echo'Prosecna cena svih bicikala = '.prosecnaCenaBicikla($bike).'<br>';
echo'Broj bicikla starijih od '.$god.' = '.brojBiciklaStarijihOd($bike,$god).'<br>';
echo'Najstariji bicikl '.najStarijiBicikl($bike).'<br>';

// echo Osoba::$godiste.'<br>'; // pristup static atributu ::
// echo Osoba::punoletna();//poziv funkcije static 
?>
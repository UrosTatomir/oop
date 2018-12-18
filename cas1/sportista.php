<?php
 class Sportista{
public $sport = 'fudbal';
public $visina = 190;
public $klub = 'Crvena Zvezda';


}

$takmicar = new Sportista();

echo $takmicar->sport.'<br>';
echo $takmicar->visina.'<br>';
echo $takmicar->klub.'<br>';


?>

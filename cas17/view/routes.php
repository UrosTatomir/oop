<?php
require_once '../controllers/Controller.php';

$controller= new Controller();
//rutiranje
//fajl sa rutama mora biti sa kontrolerom
//u ovom fajlu proveravamo rute i svaku rutu prosledjujemo na odredjenu metodu u kontroleru

//linkovi uvek idu get metodom
//ternary uslov upit kao if() else
$page=isset($_GET['page'])?$_GET['page']:" ";

switch($page){ //uslov provera

   case"showinsert":
   $controller->showInsert();
   break;
   
   case 'insert':
   $controller->insertVozilo();
   break;
}



//ZNATI SINTAKSE PETLJI na papiru obavezno
//dispecer preusmerava sve funkcije u kontroleru

?>
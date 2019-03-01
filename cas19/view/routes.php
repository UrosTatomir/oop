<?php
require_once '../controllers/Controller.php';

$controller= new Controller();
//rutiranje
//fajl sa rutama mora biti sa kontrolerom
//u ovom fajlu proveravamo rute i svaku rutu prosledjujemo na odredjenu metodu u kontroleru

//linkovi uvek idu get metodom

$page=isset($_GET['page'])?$_GET['page']:"";

switch($page){

   case"showinsert":
   $controller->showInsert();
   break;
   
   case 'insert':
   $controller->insertVozilo();
   break;

   case "showinsertvozaca":
   $controller->showInsertVozaca();
   break;

   case "insertvozaca":
   $controller->insertVozaca();
   break;
}



//ZNATI SINTAKSE PETLJI na papiru obavezno
//dispecer preusmerava ne funkcije u kontroleru

?>
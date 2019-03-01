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
   $controller->insertCar();
   break;

   case "showinsertvozaca":
   $controller->showInsertDriver();
   break;

   case "insertvozaca":
   $controller->insertDriver();
   break;

   case 'showassign':
   $controller->showAssign();
   break;

   case 'dodeli':
   $controller->insertAssign();
   break;

   case 'showdrivers':
   $controller->showDrivers();
   break;

   case 'showcars':
   $controller->showCars();
   break;

   case 'showdriverbycars':
   $controller->showDriverByCars();
   break;

   case 'ChooseDriverByCars':
   $controller->driverByCars();
   break;

   case 'showhome':
   include 'index.php'; 
   break;

   case 'showcarbydrivers':
   $controller->showCarByDrivers();
   break;

   case 'ChooseCarByDrivers':
   $controller->carByDrivers();
   break;

   case 'deletedriver':
      // var_dump("cao");
   $controller->deleteDriver();
   break;

   case 'deletecar':
   $controller->deleteCar();
   break;


}



//ZNATI SINTAKSE PETLJI na papiru obavezno
//dispecer preusmerava ne funkcije u kontroleru

?>
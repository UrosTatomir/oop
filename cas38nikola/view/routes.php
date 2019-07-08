<?php
require_once '../controllers/Controller.php';

$controller= new Controller();

$page=isset($_GET['page'])?$_GET['page']:"";

$page2=isset($_POST['page'])?$_POST['page']:"";


switch($page){

case 'addtocart':
$controller->addToCart();
break;

case 'showcart':
$controller->showCart();
break;

case 'emptycart':
$controller->emptyCart();
break;

case 'removearticle':
$controller->removeArticle();
break;

case 'showindex':
$controller->showIndex();
break;

case 'Refresh cart':
$controller->refreshCart();
break;

case 'showorder':
$controller->showLogin();
break;


case 'showregister':
$controller->showRegister();
break;
}


switch($page2){


 case 'Register':
$controller->Register();
break;


case 'Log in':
$controller->Login();
break;
}

?>
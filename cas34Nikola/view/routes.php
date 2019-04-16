<?php
require_once '../controllers/Controller.php';

$controller= new Controller();

$page=isset($_GET['page'])?$_GET['page']:"";

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



}


?>
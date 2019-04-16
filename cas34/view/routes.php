<?php
require_once '../controllers/Controller.php';

$controller= new Controller();

$page=isset($_GET['page'])?$_GET['page']:"";

switch($page){

case 'showinsert':
$controller->showInsert();
break;

case 'insert article':
$controller->insertArticle();
break;


case 'addtocart':
$controller->addToCart();
break;

case 'emptycart';
$controller->emptyCart();
break;

case 'showcart':
$controller->showCart();
break;

case 'showindex':
$controller->showIndex();
break;

case 'removearticle':
$controller->removeArticle();
break;

case 'Refresh cart':
$controller->refreshCart();
break;
}








?>
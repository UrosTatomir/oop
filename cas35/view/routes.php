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

case 'showregister':
$controller->showRegister();
 break;

case 'showlogin':
$controller->login();
break;

case 'Logout':
$controller->logout();
break;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $page=isset($_POST['page'])?$_POST['page']:"";

    switch($page){
        case 'order':
        $controller->showOrder();
        break;

      case 'Log in':
      $controller->login();
      break;

      case 'Register':
      $controller->registration();
      break;
    }
}






?>
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

case 'showhome':
include 'index.php';
break;
}








?>
<?php
require_once '../model/DAO.php';

class Controller{



public function addToCart(){

    
      $dao = new DAO();
      $idart=isset($_GET['idart'])?$_GET['idart']:"";
     
       $article=$dao->getArticleById($idart);

   if($article){
// startovanje sesije i pakovanje artikala u sesiju.

   session_start();

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
    $_SESSION['cart'][]=$article;
    $msg="Article added to cart";
    include 'index.php';

}else{
    $_SESSION['cart'][]=$article;
    $msg="New article has been added to cart";
    include 'index.php';
}
   }else{
       echo "Error with id article";
       include 'index.php';
   }
}

public function showCart(){

    include 'cart.php';
}

public function emptyCart(){

    session_start();

    if(!empty($_SESSION['cart'])){
        session_unset();
        session_destroy();
        $msg="Cart is empty.";
        include 'cart.php';
    }else{
        header('Location:index.php');
    }
}


public function removeArticle(){

    $idart=isset($_GET['idart'])?$_GET['idart']:"";
     session_start();
    //var_dump($idart);
    echo "<br>";
    //var_dump($_SESSION['cart']);


if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $item =>$it){

//Posto je korpa niz nizova moramo u foreach petlju da ubacimo kljuc i vrednost
// kako bi rastavili korpu na pojedinacne nizove tj proizvode ( dodajemo novu promenljivu $it)
// i kako bi nasli gde se id proizvoda iz korpe slaze sa id-em koji je stigao ovde

    if($it['idart']==$idart){
     //   echo "nasao";
   //  var_dump($_SESSION['cart']);
     //echo "<br>";
     //echo "<br>";
     //echo "<br>";

     // brisanje iz sesije korpa samo jednog proizvoda 
     unset($_SESSION['cart'][$item]);
     //var_dump($_SESSION['cart']);
     header('Location:cart.php');
    }
   
}

}


}

public function showIndex(){
 session_start();
    include 'index.php';
}

public function refreshCart(){
 $idart=isset($_GET['idart'])?$_GET['idart']:array();
$amount=isset($_GET['amount'])?$_GET['amount']:array();

session_start();

// kreiranje praznog niza za sumu cena 
$total=array();
//brojac u pocetku jednak nuli da bi niz suma krenuo od prvog elementa u nizu tj od pozicije nula
$i=0;

foreach($idart as $id){

    $dao=new DAO();

    $article=$dao->getArticleById($id);

    // od jednog artikla koji je pronasla petlja uzimamo cenu i mnozimo sa kolicinom 
    // i dobijamo ukupnu cenu za taj jedan artikal
    $sum=$article['price']*$amount[$i];

    // ukupnu cenu za svaki artikal upisujemo u niz koji smo nazvali total
    $total[]=$sum;
    $i++;

}

$_SESSION['total']=$total;
$_SESSION['amount']=$amount;
header('Location:cart.php');
}





}

?>
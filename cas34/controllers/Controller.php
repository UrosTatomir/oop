<?php
require_once '../model/DAO.php';

class Controller{

    public function showIndex(){
        session_start();
        include 'index.php';
    }

    public function showInsert(){

        include 'insertarticle.php';
    }
 
    public function insertArticle(){
        $brand=isset($_GET['brand'])?$_GET['brand']:"";
        $model=isset($_GET['model'])?$_GET['model']:"";
        $description=isset($_GET['description'])?$_GET['description']:"";
        $price=isset($_GET['price'])?$_GET['price']:"";
        $image=isset($_GET['image'])?$_GET['image']:"";
  
        $errors=array();

        if(empty($brand)){
           $errors['brand']= "Please enter the brand";
        }
        if(empty($model)){
            $errors['model']= "Please enter the model";
        }
        if(empty($description)){
            $errors['description']= "Please enter a description";
        }
        if(empty($price)){
            $errors['price']="Please enter a price";
        }else{
            if(is_numeric($price)){
                if($price<0){
                    $errors['price']= "The price must be higher than zero";
                }
            }else{
                $errors['price']= "The price must be a numeric value";
            }
        }
        if(empty($image)){
            $errors['image']= "You need to select an image";
        }
        if(count($errors)==0){
            $dao= new DAO();
            $dao->insertArticle($brand,$model,$description,$price,$image);
            $msg= "Successful data entry";
            include 'index.php';
        }else{
            $msg= "Please fill out the form correctly";
            include 'insertarticle.php';
        }

    }//end function insertArticle
    public function addToCart(){

     $idart=isset($_GET['idart'])?$_GET['idart']:"";   
     $dao=new DAO();
     $article=$dao->getArticleById($idart);

     if($article){
            //startovanje sesije i pakovanje artikala u sesiju.
            session_start(); //otvaramo sesiju i dodeljujemo joj vrednost $_SESSION['cart'][]=$article; [] je zbog niza nizova u verodnosti $article;+
     //session_destroy();
        if(!isset($_SESSION['cart'])){
            // $_SESSION['cart']=array();
            $_SESSION['cart'][]=$article; //ako nije setovana sesija postavi cart u sesiju niz nizova iz varijable $article  odnosno postavljamo prvi artikal u korpu
            $msg= "Article added to cart";
            include 'index.php';
        }else{
            $_SESSION['cart'][]=$article; //ako je vec setovana sesija cart odnosno vec postoji artikal u korpi postavi novi artikal u korpu
            $msg="New article has been added to cart";
            include 'index.php';
        }
    }else{
        echo"Error with id article";
        include 'index.php';
       }
    }//end addToCart
    public function emptyCart(){
        session_start();
        //upit da li je korpa prazna izmeniti 
        if(!empty($_SESSION['cart'])){
            session_unset();
            session_destroy();
            // $msg = "Your cart it is empty";
            header( 'Location:cart.php?msg=Your cart it is empty'); //slanje msg preko header location ide na ovaj nacin 
            

            // include 'cart.php';
        }else{  
         include 'index.php';
     }   
        // header('Location:index.php');
    }
    public function showCart(){
        include 'cart.php';
    }
    public function removeArticle(){
        $idart=isset($_GET['idart'])?$_GET['idart']:"";
        session_start();
        // var_dump($idart);
        // echo"<br>";
        // var_dump($_SESSION['cart']);
        if(!empty($_SESSION['cart'])){
          foreach($_SESSION['cart'] as $item =>$it){ //posto je korpa niz nizova moramou foreach petlju ubacimo kljuc i vrednost kako bi rastavili korpu na pojedinacne nizove tj proizvode i kako bi nasli gde se id proizvoda iz korpe slaze  sa brojem id koji je stigao ovde
            //   var_dump($it);
            //   echo"<br>";
            //   var_dump($_SESSION['cart']);
        //    var_dump($item);
        //    echo"<br>";
            if($it['idart']==$idart){
            //brisanje iz sesije korpa samo jednog proizvoda
              unset($_SESSION['cart'][$item]);
            //   $msg= "You've deleted one item";
            header('Location:cart.php?msg=You deleted one item'); //slanje msg preko header location ide na ovaj nacin
                    
             //header location vraca na cart.php i ne vidi session_start gore na ovoj  funkciji  nego vidi session_start u okviru  funkcije addToCart i ne koristi se npr includecart.php;
                // include 'cart.php';
            } //uraditi praznjenje korpe sessije
          }
        }
    }
    public function refreshCart(){

     $idarticle=isset($_GET['idart'])?$_GET['idart']:array();
     $amount=isset($_GET['amount'])?$_GET['amount']:array();
        // var_dump($amount);
        // var_dump($idarticle);
        $result=[];
        foreach($amount as $lot){
            array_push($result,$lot);
        }
        
        $total = array();
        foreach ($idarticle as $idart) {

            $dao = new DAO();
            $article = $dao->getArticlePriceById($idart);

            foreach ($article as $price) {
                array_push($total,$price);
                $sum = $price * $lot;
                $total[] = $sum;
                 
            }
        }
        var_dump($total); //do ove radi dobro ali kad se promesaju kolicine radi pogresno
        // echo "<br>";
        // var_dump($amount);
        // session_start();
        // $_SESSION['total'][] = $total;
        // $_SESSION['amount'] = $amount;
        // header("Location:cart.php");
        
                  
    }
     
} 
//end class Controller
// $dao=new DAO();
// $idarticle= $dao->getArticlePriceById($idart);
// $resultprice = [];
// foreach($idart as $id){
//     $idart=$id;

//     if($idarticle){
//     // session_start();
//     //  $_SESSION['cart'][]=$idarticle;
//         foreach($idarticle as $price){
//            array_push($resultprice,$price);   
//         }
//     }     
// }
//  $result=[];
// foreach ($amount as $lot) {
//     array_push($result,$lot);
//     $total = $price * $lot;
//     echo $total;
//     echo "<br>"; 
// }
// 
// var_dump($amount);
// var_dump($idarticle);

// $total = array();
// $i = 0;
// foreach ($idarticle as $idart) {
//     $dao = new DAO();


//     $article = $dao->getArticlePriceById($idart);
//     foreach ($article as $price) {
//         settype($price, "integer");
//         settype($amount[$i], "integer");
//         $sum = $price * $amount[$i];
//         echo "<br>";
//         var_dump($amount[$i]);
//         echo "<br>";
//         $total[] = $sum;
//         $i++;
//         var_dump($price);
//         echo "<br>";
//     }
// }
// var_dump($total);
// echo "<br>";
// var_dump($amount);
// session_start();
// $_SESSION['total'] = $total;
// $_SESSION['amount'] = $amount;
// header("Location:cart.php");
///////////////////////////////
// if (!empty($_SESSION['cart'])) {

//     foreach ($_SESSION['cart'] as $item => $it) {
//         //  var_dump($it['price']);
//         $price = $it['price'];
//         //    var_dump($price);     
//     }
//     $result = [];
//     foreach ($amount as $lot) {
//         array_push($result, $lot);
//         $total = $lot * $price;
//         var_dump($total);
//     }

//     return $result;
// }
?>
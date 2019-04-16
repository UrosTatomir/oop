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
            $_SESSION['cart'][]=$article;
            $msg= "Article added to cart";
            include 'index.php';
        }else{
            $_SESSION['cart'][]=$article;
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
          foreach($_SESSION['cart'] as $item =>$it){ //posto je korpa niz nizova moramou foreach petlju ubacimo kljuc i vrednost kako bi rastavili korpu na pojedinacne nizove tj proizvode i kako bi nasli gde se id proizvoda iz korpe slaze  sa id koji je stigao ovde
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
            }
          }
        }
    }
     //uraditi praznjenje korpe sessije
}//end class Controller




?>
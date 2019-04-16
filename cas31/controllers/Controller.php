<?php
require_once '../model/DAO.php';

class Controller{

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
     $dao= new DAO();
     $article=$dao->getArticleById($idart);

     if($article){
     //startovanje sesije i pakovanje artikala u sesiju.
     
     session_start();
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
        session_unset();
        header('Location:index.php');
    }
     //uraditi praznjenje korpe sessije
}//end class Controller




?>
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


public function showLogin(){

    include 'login.php';
}


public function showRegister(){
   $register=1;
    include 'login.php';
}

public function Register(){

    $name=isset($_POST['name'])?$_POST['name']:"";
    $surname=isset($_POST['surname'])?$_POST['surname']:"";
    $email=isset($_POST['email'])?$_POST['email']:"";
    $phone=isset($_POST['phone'])?$_POST['phone']:"";
    $adress=isset($_POST['adress'])?$_POST['adress']:"";
    $username=isset($_POST['username'])?$_POST['username']:"";
    $password=isset($_POST['password'])?$_POST['password']:"";

    if(!empty($name)&&!empty($surname)&&!empty($email)&&!empty($adress)&&!empty($username)&&!empty($password)){


        $dao=new DAO();
  
       $admin=0;

      


        $dao->register($name,$surname,$email,$adress,$phone,$username,$password,$admin);

        $msg="Registration success";
        include 'login.php';

    }else{
        $register=1;
        $msg="Registration failed, please input all fields.";
        include 'login.php';

    }

}


public function Login(){
    $username=isset($_POST['username'])?$_POST['username']:"";
    $password=isset($_POST['password'])?$_POST['password']:"";

    if(!empty($username)&&!empty( $password)){
        $dao=new DAO();

        $user=$dao->login($username,$password);

        if($user){
          session_start();
          $_SESSION['user']=$user;
          $msg="Login success";
          include 'checkout.php';

          }else{
           $msg="Incorrect username or password";
           include 'login.php';

          }  
   
    }else{
        $msg="Morate popuniti sva polja";
        include 'login.php';
    }

}


public function doOrder(){
//kupljenje podataka korisnika

    $name=isset($_POST['name'])?$_POST['name']:"";
    $surname=isset($_POST['surname'])?$_POST['surname']:"";
    $email=isset($_POST['email'])?$_POST['email']:"";
    $phone=isset($_POST['phone'])?$_POST['phone']:"";
    $adress=isset($_POST['adress'])?$_POST['adress']:"";
    $iduser=isset($_POST['iduser'])?$_POST['iduser']:"";
  
    session_start();

    $cart=isset($_SESSION['cart'])?$_SESSION['cart']:array();
    $total=isset($_SESSION['total'])?$_SESSION['total']:array();
    $amount=isset($_SESSION['amount'])?$_SESSION['amount']:array();
    
   $errors=array();

   if(empty($name)){
       $errors['name']="Please enter your name";
   }
   if(empty($surname)){
    $errors['surname']="Please enter your surname";
   }
   if(empty($email)){
    $errors['email']="Please enter your email";
   }
   if(empty($phone)){
    $errors['phone']="Please enter your phone";
   }
   if(empty($adress)){
    $errors['adress']="Please enter your adress for shiping";
   }
       if(count($errors)==0){
              $dao=new DAO();

 //drugi parametar je broj porudzbine a to kreiramo mi ovde nemamo podatak sa forme
            
    $broj=1;

    foreach($cart as $c){
        $idart=$c['idart'];
        $brand=$c['brand'];
       $model= $c['model'];
       $price=$c['price'];
       $count=4;
       $total=2500;

     $dao->insertOrder($iduser,$broj,$name,$surname,$email,$phone,$adress,$idart,$brand,$model,$price,$count,$total);
    
    }

    include 'thankyou.php';


          
       }else{
           include 'checkout.php';
       }






}





}

?>
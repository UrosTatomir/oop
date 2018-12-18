<?php
 include 'korisnik.php';
 include 'administrator.php';
 include 'user.php';
 include 'admin.php';
 $korisnik = new Korisnik();
 $korisnik->podesiKorisnickoIme('Jelena');//$k
 $korisnik->ulogujSe();
 
 echo $korisnik->korisnickoime.' je '.($korisnik->daLiJeUlogovan()?'online':'offline');
 //$i =  isset($ime) ?  $ime: " offline  "  
  //            if      ako je ispunjeno : else offline
 //instalirati visual studio code  instalirati plugin-ove
 $admin = new Administrator();
 //nasledjivanjem smo dobili mogucnost da administrator koristi sve metode iz klase korisnik
 $admin->podesiKorisnickoIme('Marija');
 $admin->otvoriForum('OOP PHP');

 echo'<br><br>';
 $admin->dodajKorisnika('Uros');
 $admin->izlogujSe();
 echo $admin->korisnickoime." je ".($admin->daLiJeUlogovan()?" online":"offline");
 echo'<br><br>';
 ////objekti klase user---------------------
$user=new User();
$user->setupUsername('Laza');//$user
$user->logIn();

echo$user->username.' is '.($user->isLoggedIn()?'online':'offline');
echo'<br><br>';
$admins= new Admin();
$admins->setupUsername('Mile');
$admins->openForum('JAVA , HTML');
echo'<br><br>';
$admins->addUser('Milica');
//$admins->Logout();
$admins->logIn();
echo$admins->username." is ".($admins->isLoggedIn()?" online ":"offline");




?>
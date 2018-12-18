<?php
//require se pozivaju fajlovi koji su bez dizajna
 require 'telefon.php'; //povezivanje idexa sa fajlom telefon.php
 require 'tablet.php';
 require 'smartphone.php';
 require 'cphone.php';
   $tel = new Telefon('Samsung','A7',350,'roze'); //pun konstruktor

   echo'prvi telefon'. $tel->getModel().'<br><br>'; //pun konstruktor

   $tel2 = new Telefon('Huavei','Pocaphone','320','silver');

   // $tel = new Telefon(); // kreiranopreko praznog konstruktora
   echo'drugi telefon<br><br>';

   echo $tel2->getMarka().'<br>';
   echo $tel2->getModel().'<br>';
   echo $tel2->getCena().'<br><br>';

   echo $tel;
   echo'<br><br>';
   // echo $tel->__toString(); // moze i ovaj nacin ali izbegavaj ne koristiti
   echo'Klasa Tablet<br><br>';

  $tablet = new Tablet(); //prazan konstruktor

  $tablet->setMarka('Tesla');
  $tablet->setModel('T8');
  $tablet->setCena(140);
  $tablet->setEkran(10);

  echo $tablet->getMarka().'<br>';
  echo $tablet->getModel().'<br>';
  echo $tablet->getCena().'<br>';
  echo $tablet->getEkran().'<br>';
  echo'<br>';

  echo $tablet; // funkcija __toString()

  // $tab = new Tablet('Xiaomi','pocophone',380,6.2); //pun konstruktor

  $tab = new Tablet();
  $tab->setMarka('Xiaomi');
  $tab->setModel('pocophone');
  $tab->setCena(380);
  $tab->setEkran(6.2);
  
  echo'<br><br>';
  echo'Drugi tablet prazan konstruktor<br><br>';

  echo $tab->getMarka().'<br>';
  echo $tab->getModel().'<br>';
  echo $tab->getCena().'<br>';
  echo $tab->getEkran().'<br>';

$fablet = new Fablet('ipad','10XR',680,12.2);
    echo'<br>';
    echo'Klasa Fableta pun konstruktor<br>';

    echo $fablet->getMark().'<br>';
    echo $fablet->getType().'<br>';
    echo $fablet->getPrice().'<br>';
    echo $fablet->getDisplay().'<br>';
    echo'<br><br>';
 echo'__toString ispis Fablet<br><br>';
 echo $fablet; //funkcija __toString();

echo'<br><br>';
echo'Smartphone karakteristike<br><br>';

$smart = new Smartphone('Huawei','GTI',200,5.9);//pun konstruktor

echo $smart->getMark().'<br>';
echo $smart->getModel().'<br>';
echo $smart->getCena().'<br>';
echo $smart->getEkran().'<br>';
echo'<br><br>';
echo $smart; // __toString() metoda 

echo'<br><br>';
echo'Cphone klasa<br>';

$cphone = new Cphone();

$cphone->setMarka('HTC');
$cphone->setModel('Desire');
$cphone->setCena(300);
$cphone->setEkran(4.5);

echo $cphone->getMarka().'<br>';
echo $cphone->getModel().'<br>';
echo $cphone->getCena().'<br>';
echo $cphone->getEkran().'<br>';






?>
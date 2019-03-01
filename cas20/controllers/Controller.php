<?php
require_once '../model/DAO.php';

class Controller{

    public function showInsert(){
    

        include 'insertvozilo.php';

    }
    //function insertVzilo ---------------
    public function insertCar(){
      //ternary upit uslov
      $imeproizvodjaca=isset($_GET['imepro'])? $_GET['imepro']:"";
      $model = isset($_GET['model']) ? $_GET['model'] : "";
      $kategorija = isset($_GET['kategorija']) ? $_GET['kategorija'] : "";
      $godiste = isset($_GET['godiste']) ? $_GET['godiste'] : "";
      $cena = isset($_GET['cena']) ? $_GET['cena']:"";

      //posto gresaka moze biti vise sve ce mo ih prosledjivati preko niza na insertvozilo.php
      $errors=array();

      if(empty($imeproizvodjaca)){
          $errors['imeproizvodjaca']="Morate odabrati proizvodjaca";
            
      }
     if (empty($model)){
            $errors['model'] = "Morate popuniti model";
           
     }
     if (empty($kategorija)){
            $errors['kategorija'] = "Morate odabrati kategoriju";
    }
    if(empty($godiste)){
        $errors['godiste']="Morate uneti godiste vozila";
    }else{

       if(is_numeric($godiste)){
           if($godiste<1950 || $godiste>2019){

               $errors['godiste']="Ne postoji to godiste auta";
           }
        }else{
            $errors['godiste']="Godiste mora biti numericka vrednost";
        }
    }
        if (empty($cena)) {
            $errors['cena'] = "Morate uneti cenu vozila";
        } else {

            if (is_numeric($cena)) {
                if ($cena <= 0) {

                    $errors['cena'] = "Cena mora biti broj veci od 0";
                }
            } else {
                $errors['cena'] = "Cena mora biti numericka vrednost";
            }
        }
    if(count($errors)==0){
        //pravimo objekat klase DAO za insert podataka u bazu
       $dao=new DAO();
       $dao->insertCar($imeproizvodjaca, $model, $kategorija, $godiste, $cena);

       $msg="Uspesan unos";
       include 'insertvozilo.php';
    //    var_dump("uspesan insert podataka");

    }else{
        // var_dump($errors);
        $msg="Molimo vas popunite formular ispravno.";
        include 'insertvozilo.php';
    }


  } // end function insertCar-----
   
  // insert vozaca-----
  public function showInsertDriver(){

      include 'insertvozaca.php';

  }
  public function insertDriver(){
  
  $ime=isset($_GET['ime'])?$_GET['ime']:"";
  $prezime=isset($_GET['prezime'])?$_GET['prezime']:"";
  $godiste=isset($_GET['godiste'])?$_GET['godiste']:"";

  $errors=array();

    if(empty($ime)){
        $errors['ime']="Morate popuniti Ime vozaca";
    }
    if(empty($prezime)){
        $errors['prezime']="Morate popuniti Prezime vozaca";
    }
    if (empty($godiste)) {
        $errors['godiste'] = "Morate uneti godiste vozila";
    } else {

        if (is_numeric($godiste)){
          if($godiste < 1940 || $godiste > 2019){

            $errors['godiste'] = "Godiste vozaca ne odgovara nasim zahtevima";
          }
        } else {
           $errors['godiste'] = "Godiste mora biti numericka vrednost";
            }
        }
     
    if(count($errors)==0){
        $dao= new DAO();
        $dao->insertDriver($ime,$prezime,$godiste);
        $msg="Uspesan unos vozaca";
        include 'insertvozaca.php';

    }else {

        $msg="Molimo vas da popunite formular ispravno";
        include 'insertvozaca.php';
    }

  } //end function insertDriver-----

  public function showAssign(){

      include 'assign.php';

  } //kraj showAssign----
  
 //--insertAssign------
   public function insertAssign(){

    $idvozila=isset($_GET['idvozila'])?$_GET['idvozila']:"";
    $idvozaca = isset($_GET['idvozaca']) ? $_GET['idvozaca'] :"";
    // var_dump($idvozila);
    // var_dump($idvozaca);
    // var_dump('id stigli na controller');

   //uraditi proveru sa validacijom i uraditi insert id vozila i vozaca u veznu tabelu
    $errors=array();

    if (empty($idvozila)) {

    $errors['idvozila'] = "Morate odabrati vozilo";

    }
    if (empty($idvozaca)) {

       $errors['idvozaca'] = "Morate odabrati vozaca";
    }
        if(count($errors)==0){
          $dao=new DAO();
          $dao->insertCarAndDriver($idvozila,$idvozaca);
          $msg="Uspesan unos vozila i vozaca";
          include 'assign.php';

        }else{
            $msg="Molimo vas da formular popunite ispravno";
            include 'assign.php';
        }

  }//kraj function insertAssign 









} // kraj class Controller



?>
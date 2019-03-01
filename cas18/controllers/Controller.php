<?php
require_once '../model/DAO.php';

class Controller{

    public function showInsert(){
    

        include 'insertvozilo.php';

    }
    public function insertVozilo(){
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





    }

}


?>
<?php
class Cars{

  protected $tockovi;
  protected  $gorivo;
  protected $model;

// get metoda-----------

   public function getTockovi(){
     
        return $this->tockovi;
     
   }//end function

   public function getGorivo(){
     

     	   return $this->gorivo;


     } //end function
   
  public function getModel(){

        return $this->model;

  }//end function

   //set metoda--------

  public function setTockovi($wheels){
   	
   	  if($wheels<=3 || $wheels>6){

      echo"Vozilo ne pripada klasi Cars<br>";

     }else{
         
          $this->tockovi = $wheels;
     }

  }//end function

  public function setGorivo($fuel){

  	      $this->gorivo = $fuel;

       if($fuel == 'dizel' or $fuel == 'benzin'){

    }elseif($fuel == 'elektricni'){

        echo"Vozilo je na elektricni pogon<br>";

      }else{

      	echo"Ovo je vozilo na klasican pogon<br>";
        }
  }

  public function setModel($type){
     
      $this->model = $type;

      if($type == 'limunzina'){

      
     }else{

     	echo"Automobil nije limunzina.<br>";
     }

  }

} //end class



$auto = new Cars();

$auto->setTockovi(4);
$auto->setGorivo('benzin');
$auto->setModel('limunzina');

var_dump($auto);
echo $auto->getTockovi().'<br>';  
echo $auto->getGorivo().'<br>';  
echo $auto->getModel().'<br>'; 



//-------------------------------------------



class Bmw extends Cars{
 
 private $wheel;
 protected $gorivo;
 private $models;

   public function getWheel(){

       return $this->wheel;

   }

   public function getGorivo(){

       return $this->gorivo;

   }

   public function getModel(){

   	   return $this->model;

   }  
  
  public function setWheel($wheels){

        
	     if($wheels < 3 or $wheels > 6){
          echo"Vozilo ne pripada klasi BMW<br>";
	      

	     }else{

	      $this->wheel = $wheels;

	      }

  }

  public function setGorivo($fuel){

     if($fuel == 'dizel'){

      $this->gorivo = $fuel;

    }elseif($fuel == 'elektricni'){

        echo"Ovaj Bmw je na elektricni pogon<br>";

      }else{

      	echo"Ovaj Bmw je na klasican pogon<br>";
        }

  }

  public function setModel($type){

     
      if($type == 'touring'){

      	 $this->model = $type;

      
     }else{
       
     	echo" Bmw tip automobila nije touring.<br>";
     }


  }

}

$bmw = new Cars();  // objekat 1

$bmw->setGorivo('hybrid');

echo $bmw->getGorivo().'<br>'; //1 objekt


$bmw = new Bmw();  //objekat 2

$bmw->setWheel(4);
$bmw->setModel('touring');


echo'Bmw ima '.$bmw->getWheel().' tocka <br>'; //get private

echo'Bmw model je '.$bmw->getModel().'<br>'; //get private;

var_dump($bmw);

?>
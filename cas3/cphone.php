<?php
  class Cphone{
     private $mark;
     private $type;
     private $price;
     private $display;

      public function getMarka(){
      	 return $this->mark;
      }
      public function getModel(){
      	 return $this->type;
      }
      public function getCena(){
      	 return $this->price;
      }public function getEkran(){
      	 return $this->display;
      }

      // seteri
      public function setMarka($mark){
      	 $this->mark = $mark;
      }
      public function setModel($type){
      	 $this->type = $type;
      }
      public function setCena($price){
      	if($price<100 || $price>300){
      	  echo'ovaj klasicni telefon ne odgovara potrebama<br>';
      	}else{
      		$this->price = $price;
      	}
      }
      public function setEkran($display){
      	 $this->display = $display;
      }

      
  } //end class
?>
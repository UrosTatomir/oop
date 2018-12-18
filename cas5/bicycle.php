<?php
class Bicycle{
	
	private $brand;
	private $model;
	private $year;
	private $color;
	private $price;
    
 public function __construct($b,$m,$y,$c,$p){

 	    $this->brand=$b;
 	    $this->model=$m;
 	    $this->year=$y;
 	    $this->color=$c;
 	    $this->price=$p;
 }
 public function getBrand(){
 	 return $this->brand;
 }
 public function getModel(){
 	 return $this->model;
 }
 public function getYear(){
 	 return $this->year;
 }
 public function getColor(){
 	 return $this->color;
 }
 public function getPrice(){
 	 return $this->price;
 }
 public function getChangePrice(){
 	 $god=2011;// varijabla mora da se unese u geteru a ne u index.php
 	 if($this->year<$god){
 	 	return $discount=$this->price*0.7;
 	 	$this->price=$discount;
 	 }else{
 	 	return $this->price;
 	 }
 }
 public function Paint(){
 	$oldc='black';
 	$nc='red';
 	if($this->getColor() == $oldc){
 		return $this->color=$nc;    //setujemo novu varijablu $nc 
 	}else{
 		return $this->color;
 	}
 }
 public function __toString(){
 	 return "Brand bike is ".$this->getBrand().", model ".$this->getModel().", year of production ".$this->getYear().", color is ".$this->getColor().", price is ".$this->getPrice().", discount is ".$this->getChangePrice().",  color is changed to ".$this->Paint()."<br>";
 }
}
?>
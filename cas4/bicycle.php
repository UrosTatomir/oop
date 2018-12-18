<?php
class Bicycle{
    private $brand;
    private $model;
    private $year;
    private $color;
    private $price;

    public function  __construct($b,$m,$y,$c,$p){  //seteri u punom konstruktoru

        $this->brand = $b;
        $this->model = $m;
        $this->year = $y;
        $this->color = $c;
        $this->price = $p;

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
    public function changePrice(){
       if($this->year<2010){
         return $discount=$this->price*0.7;
         $this->price = $discount;
       }else{
       	 return $this->price;
       }
    }
    public function Paint($nc){
    	if($this->color == 'red'){
    	  return $this->color = $nc;	
    	}else{
    		return $this->color;
    	}
    	
    }
}

?>
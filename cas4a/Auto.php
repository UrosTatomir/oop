<?php
class Auto{
	
	private $marka;
	private $cena;
	private $boja;
	private $godiste;
	
	
	public function __construct($m, $c, $b, $g){
		$this->marka=$m;
		$this->cena=$c;
		$this->boja=$b;
		$this->godiste=$g;	
	}
	
	public function getMarka(){
		return $this->marka;
		
	}
	
	public function getCena(){
		return $this->cena;
	}
	
	public function getBoja(){
		return $this->boja;
	}
	
	public function getGodiste(){
		return $this->godiste;
	}
	
	// metoda koja smanjuje cenu auta za 30% ako je auto stariji //od 18 god
	public function promeniCenu(){
		if($this->godiste<2000){
			return $smanjenacena=$this->cena*0.7;
			
			//nakon smanjenja dodeljujemo atributu cena sada //umanjenu cenu
			$this->cena=$smanjenacena;
		}else{
			return $this->cena;
		}
		
	}
	
	public function ofarbajAuto($nb){
		
		$this->boja=$nb;
	}
	
	
	public function __toString(){
		
		return "Marka auta je ".$this->getMarka()." cena auta je ".$this->promeniCenu()." boja auta je ".$this->getBoja()." godiste auta je ".$this->getGodiste()."<br>";
	}
	
}
?>
<?php
//nasledjivanje se definise pomocu ljucne reci extends

class Korisnik{
  
 public $korisnickoime;
 private$ulogovan=false;


 public function ulogujSe(){
     $this->ulogovan=true;
 }
 public function izlogujSe(){
 	 $this->ulogovan=false;
 }
 public function podesiKorisnickoIme($k){
     $this->korisnickoime=$k;
 }
 public function daLiJeUlogovan(){
 	 return $this->ulogovan;
 }


}



?>
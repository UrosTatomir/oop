<?php
class Administrator extends Korisnik{

	public function otvoriForum($imeforuma){
		echo "$this->korisnickoime je otvorila forum $imeforuma <br>";
	}
	public function dodajKorisnika($ime){
		echo "$this->korisnickoime je dodala svog novog korisnika $ime <br>";
	}
}

?>
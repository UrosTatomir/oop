<?php
class Devizni extends Racun{

// KREIRANJE FUNKCIJE ZA ISPLATU NOVCA SA DEVIZNOG RACUNA

public function isplata($iznos){
if($iznos<=$this->stanje){

    $this->stanje-=$iznos;
}else{
    echo "<h3>Nemate dovoljno sredstava na racunu</h3>";
}

}

public function __toString(){

    return "Devizni - ".parent::__toString();
}


}





?>
<?php
class Devizni extends Racun{
    public function isplataDevizni($iznos){
        if($iznos<=$this->stanje){
         $this->stanje-=$iznos;
        }else{
            echo"<h3>Nemate dovoljno sredstava na racunu</h3>";
        }
    }
    public function __toString(){
        return " devizni - ". parent::__toString();
    }

}
?>
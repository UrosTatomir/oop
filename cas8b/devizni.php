<?php
class Devizni extends Banka{

    public function isplataDevizni($iznos){
        if($iznos<=$this->stanje){
            $this->stanje-=$iznos;
            echo"<h3>Vas novac je isplacen, na racunu je ostalo $this->stanje</h3>";
        }else{
            echo"<h4>Nemate dovoljno sredstava na racunu</h4>";
        }
    }
    
    public function __toString(){
        return "<h4>Vas devizni </h4>".parent::__toString();
    }
}
?>
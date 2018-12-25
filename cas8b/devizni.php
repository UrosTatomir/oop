<?php
class Devizni extends Banka{
    
    public function __toString(){
        return "<h4>Vas devizni </h4>".parent::__toString();
    }
}
?>
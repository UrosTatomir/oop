<?php
class Profsoft extends Profesor{
    protected $software;
    protected $automatika;
    public function __construct($i, $p, $rs, $pred,$soft,$teh){
        parent::__construct($i, $p, $rs, $pred);
        $this->software=$soft;
        $this->automatika=$teh;
    }
    public function __toString(){
        return parent::__toString(). ", predavanja  iz " . $this->software . " i ucesce u izradi projekta iz " . $this->automatika. "<br>";
    }
}
?>
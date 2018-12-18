<?php
class Dekan extends Profesor{
    protected $dekanat;
    
    public function __construct($i, $p, $rs, $pred ,$d){
        parent::__construct($i, $p, $rs, $pred);

        $this->dekanat=$d;
    }
    public function __toString(){
        return parent::__toString().", vreme od kad je dekan : ".$this->dekanat."<br>";
    }
}
?>
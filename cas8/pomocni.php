<?php
class Pomocni extends Stalni{
    private $pposlovi;
    public function __construct($i, $p, $z, $brs ,$pp){
        parent::__construct($i, $p, $z, $brs);
        $this->pposlovi=$pp;
    }
    
    public function __toString(){
        return parent::__toString(). ",radi na pomocnim poslovima :". $this->pposlovi;
    }
//nasledjena classa iz klase Stalni.php i vuce funkcije iz abstractne klase
}
?>
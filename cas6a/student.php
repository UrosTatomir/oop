<?php
class Student extends Osoba{

    private $brindex;
    private $smer;
    private $prosek;

    public function brojIndexa($br){
         $this->brindex=$br;
        //  echo" broj indexa ".$br." , ";
    }
    public function SmerStudija($s){
         $this->smer=$s;
        //  echo"smer studija ".$s." , ";    
    }
    public function prosekStudiranja($p){
         $this->prosek=$p;
        //  echo" prosek studiranja ".$p."<br>";
    }
    
}

?>
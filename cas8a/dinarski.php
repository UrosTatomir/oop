<?php
class Dinarski extends Racun{

  protected $limit;
  public function setLimit($minus){
      $this->limit=$minus;
  }
  public function __toString(){
      return parent::__toString()."<br> dozvoljeni minus iznosi :".$this->limit;
  }

}
?>
<?php
class Visa extends Tekuci{
 
 public function __toString(){
     return"<h4>Visa sredstva sa </h4>".parent::__toString();
 }
} 
?>
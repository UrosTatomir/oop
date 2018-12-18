<?php
class Admin extends User{

    public function openForum($nameforum){
        echo"$this->username has opened a forum $nameforum <br>"; //dupli navodnici
    }
    public function addUser($name){
        echo"$this->username added a new user $name <br>";
    } 

}
?>
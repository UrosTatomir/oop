<?php
class User{

    public $username;
    private $loggedin =false;

    public function logIn(){
        $this->loggedin=true;
    }
    public function Logout(){
        $this->loggedin=false;
    }
    public function setupUsername($u){
        $this->username=$u;
    }
    public function isLoggedIn(){
        return $this->loggedin;
    }


}

?>
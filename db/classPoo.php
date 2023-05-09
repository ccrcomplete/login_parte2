<?php

class Login{

    public $user ="";
    public $password ="";
    public $usu ="juan@gmail.com";
    public $pass ="1234";
    public $true ="true";
    public $false ="false";

    function entrarDatos($variable1,$variable2){
        $this ->user = $variable1;
        $this ->password = $variable2;
    }

    function logear(){

        $us = $this->usu;
        $ps = $this->pass;

        $us1 = $this->user;
        $pas1 = $this->password;

        if(($us === $us1) && ($ps === $pas1)){
            return $this->true;
        } else{
            return $this->false;
        }
    }
}

?>
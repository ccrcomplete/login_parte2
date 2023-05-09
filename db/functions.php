<?php

if(isset($_POST['submit'])){
    if(isset($_POST['usr'])){
        include_once('ClassPoo.php');
    
        $user =$_POST['usr'];
        $pass =$_POST['pss'];
        $login = new Login();
        $login ->entrarDatos($user, $pass);
        $login ->logear();
        $response = $login->logear();
    
        if($response === "true"){
            header("location:../home.php");
            echo'<script language"javascript">alert("Welcome")</script>';
        } else{
            header("location:../login.php");
            echo'<script language"javascript">alert("No estas registrtado")</script>';
        }
    }
}
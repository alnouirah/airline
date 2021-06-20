<?php

if(isset($_POST['login'])){
    require_once('../class/User.php');
    

    $email =  $_POST['email'];
    $password =  $_POST['password'];

    $user = $user->loginUser($email,$password);
    if(!$user){
        die('user exist');
    }
    die('user not not exist');
   
    }
?>
<?php

if(isset($_POST['sign_up'])){
    require_once('../class/User.php');
    
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $password =  $_POST['password'];
    $gender =  $_POST['gender'];
    $age =  $_POST['age'];
    $address =  $_POST['address'];

    $user = $user->create($name,$email,$phone,$password,$gender,$age,$address);
    if(!$user){
        session_start();
        $_SESSION['message'] = 'Sorry The email is  already exsist';
        header('Location: /project/users/sign_up.php');
    }

    session_start();
    $_SESSION['message'] = 'Congrats ! your profaile has been created and you can login to your profile';
    header('Location: /project/users/log_in.php');
    }
?>
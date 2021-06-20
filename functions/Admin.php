<?php
session_start(); 
include('../class/Admin.php');
$adminObject = new Admin();
if(isset($_POST['log_in'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $admin = new Admin();
    $isNotExist = $admin->isNotExist($email);
    if($isNotExist){
        $_SESSION['authintication_message'] = 'Sorray the email or the password is not correct !';
        header('location:../admin/index.php');
    }
    
    $isNotExist = $admin->check_creadentials($email,$password);
    if($isNotExist){
        $_SESSION['authintication_message'] = 'Sorray the email or the password is not correct !';
        header('location:../admin/index.php');
    }

    $user = $admin->getRow('select * from users where email = ? and password = ? and role_id = 1',[$email,$password]);
    $_SESSION['admin_email'] = $email;
    $_SESSION['admin_id'] = $user['id'];
    header('location:../admin/dashboard.php');

}


if(isset($_GET['logout'])){
    session_destroy();
    header('location:../index.php');
}

if(isset($_GET['change_status'])){
    $id = $_GET['id'];
    $status = $_GET['status'];
    $state = $_GET['state'];
    $isUpdated = $adminObject->updateRow('update tickets set status = ? where id = ?',[$state,$id]);
    $_SESSION['message'] = 'Ticket updated Successfully';
    header('location:../admin/ticket.php?status='.$status);
}

?>
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
    if(!$user){
        $_SESSION['authintication_message'] = 'Sorray the email or the password is not correct !';
        header('location:../admin/index.php');
    }else{
        $_SESSION['admin_email'] = $email;
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['image'] = $user['image'];
        header('location:../admin/dashboard.php');
    }

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

if(isset($_POST['update_profile'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $id = $_POST['admin_id'];

    $isUpdated = $adminObject->updateRow('update users set name = ?,email = ?,password = ?,phone = ?,gender = ?,age = ?,address = ? where id = ?',[$name,$email,$password,$phone,$gender,$age,$address,$id]);

    $_SESSION['message'] = 'Admin Updated successfully';
    header('location:../admin/update_profile.php');
}

if(isset($_POST['update_image'])){
    if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"../uploads/".$file_name);
            $imageLink = "/uploads/".$file_name;
            $_SESSION['image'] = "/uploads/".$file_name;
            $isUpdated = $adminObject->updateRow('update users set image = ? where id = ?',[$imageLink,$_POST['admin_id']]);
           
            $_SESSION['message'] = 'Image Updated successfully';
            header('location:../admin/update_profile.php');
        }else{
            $_SESSION['message'] = 'Image not Updated successfully';
            header('location:../admin/update_profile.php');
        }
    }
}

?>
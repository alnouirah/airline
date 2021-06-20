<?php
session_start(); 
include('../class/AirAgency.php');
$agency = new AirAgency();
$imageLink = "";
if(isset($_POST['create_agency'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    if(isset($_FILES['logo'])){
        $errors= array();
        $file_name = $_FILES['logo']['name'];
        $file_size =$_FILES['logo']['size'];
        $file_tmp =$_FILES['logo']['tmp_name'];
        $file_type=$_FILES['logo']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['logo']['name'])));
        
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
            $isUpdated = $agency->updateRow('update agencies set logo = ? where id = ?',[$imageLink,$_POST['id']]);
           
            $_SESSION['message'] = 'Logo Updated successfully';
        }else{
            $_SESSION['message'] = 'Logo not Updated successfully';
        }
    }

    
    $isCreated = $agency->craete_agency($name,$phone,$imageLink);
    if($isCreated){
        header('location:../admin/add_fly.php');
    }
}

if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $isDeleted = $agency->delete($id);
    if($isDeleted){
        $_SESSION['message'] = 'Agency Deleted Successfully';
        header('location:../admin/fly_agency.php');
    }
}


if(isset($_POST['update'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $id = $_POST['id'];


    $isUpdated = $agency->update($id,$name,$phone);
    if($isUpdated){
        $_SESSION['message'] = 'Agency updated Successfully';
        header('location:../admin/fly_agency.php');
    }
}

if(isset($_POST['update_logo'])){
    if(isset($_FILES['logo'])){
        $errors= array();
        $file_name = $_FILES['logo']['name'];
        $file_size =$_FILES['logo']['size'];
        $file_tmp =$_FILES['logo']['tmp_name'];
        $file_type=$_FILES['logo']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['logo']['name'])));
        
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
            $isUpdated = $agency->updateRow('update agencies set logo = ? where id = ?',[$imageLink,$_POST['id']]);
           
            $_SESSION['message'] = 'Logo Updated successfully';
            header('location:../admin/fly_agency.php');
        }else{
            $_SESSION['message'] = 'Logo not Updated successfully';
            header('location:../admin/fly_agency.php');
        }
    }
}
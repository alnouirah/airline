<?php
session_start(); 
include('../class/AirAgency.php');
$agency = new AirAgency();

if(isset($_POST['create_agency'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    
    $isCreated = $agency->craete_agency($name,$phone);
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
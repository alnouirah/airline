<?php
session_start(); 
include('../class/Customer.php');
$customer = new Customer();
if(isset($_POST['create_account'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $imageLink = "";

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
    }else{
        $_SESSION['message'] = 'Image not Updated successfully';
        die('sorry there is a problem you have to contact with the administrator');
    }

    $customer->createAccount($name,$email,$phone,$password,$gender,$age,$address,$imageLink);
}

if(isset($_POST['log_in'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $isNotExist = $customer->isNotExist($email);
    if($isNotExist){
        $_SESSION['authintication_message'] = 'Sorray the email or the password is not correct !';
        header('location:../customers/index.php');
    }
    
    $customer = $customer->getRow('select * from users where email = ? and role_id = 2',[$email]);
    $isMatched = password_verify($password,$customer['password']);
    if(!$isMatched){
        // session_destroy();
        // die('is not exist');
        $_SESSION['authintication_message'] = 'Sorray the email or the password is not correct !';
        header('location:../customers/index.php');
    }else{
            
            $_SESSION['user_email'] = $email;
            $_SESSION['user_id'] = $customer['id'];
            $_SESSION['image'] = $customer['image'];
            header('location:../customers/dashboard.php');
    }


}

if(isset($_POST['create_reserve'])){
    die('here create ticket');
}

if(isset($_GET['logout'])){
    session_destroy();
    header('location:../index.php');
}

if(isset($_GET['delete'])){
    
    $id = $_GET['id'];
    $customer->deleteUser($id);
    $_SESSION['message'] = 'User Deleted Successfully';
    header('location:../admin/customer.php');
}

if(isset($_GET['block'])){
    
    $id = $_GET['id'];
    $customer->blockUser($id);
    $_SESSION['message'] = 'User blocked Successfully';
    header('location:../admin/customer.php');
}

if(isset($_GET['Unblock'])){
    
    $id = $_GET['id'];
    $customer->UnblockUser($id);
    $_SESSION['message'] = 'User Unblocked Successfully';
    header('location:../admin/customer.php');
}

if(isset($_POST['reserve'])){
    $user_id = $_POST['user_id'];
    $accomidation_id = $_POST['accomidation_id'];
    $schedule_id = $_POST['schedule_id'];
    $accomidation = $customer->getRow('select * from accomdation where id = ?',[$accomidation_id]);
    $schedule = $customer->getRow('select * from schedules where id = ?',[$schedule_id]);
    $total_price = $schedule['price'] + $accomidation['price'];

    $ticketCreated = $customer->createTicket($user_id,$schedule_id,$accomidation_id,$total_price);
    $_SESSION['message'] = 'Ticket Created Successfully';
    header('location:../customers/dashboard.php');
}

if(isset($_POST['update_profile'])){
    // die('here');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $id = $_POST['id'];

    $isUpdated = $customer->updateRow('update users set name = ?,email = ?,password = ?,phone = ?,gender = ?,age = ?,address = ? where id = ?',[$name,$email,$password,$phone,$gender,$age,$address,$id]);

    $_SESSION['message'] = 'Customer Updated successfully';
    header('location:../customers/update_profile.php');
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
            $isUpdated = $customer->updateRow('update users set image = ? where id = ?',[$imageLink,$_POST['id']]);
           
            $_SESSION['message'] = 'Image Updated successfully';
            header('location:../customers/update_profile.php');
        }else{
            $_SESSION['message'] = 'Image not Updated successfully';
            header('location:../customers/update_profile.php');
        }
    }
}

?>
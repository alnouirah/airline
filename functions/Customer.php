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
    $customer->createAccount($name,$email,$phone,$password,$gender,$age,$address);
}

if(isset($_POST['log_in'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $isNotExist = $customer->isNotExist($email);
    if($isNotExist){
        $_SESSION['authintication_message'] = 'Sorray the email or the password is not correct !';
        header('location:../customers/index.php');
    }
    
    $isNotExist = $customer->check_creadentials($email,$password);
    if($isNotExist){
        // session_destroy();
        // die('is not exist');
        $_SESSION['authintication_message'] = 'Sorray the email or the password is not correct !';
        header('location:../customers/index.php');
    }else{
            $user = $customer->getRow('select * from users where email = ? and password = ?',[$email,$password]);
            $_SESSION['user_email'] = $email;
            $_SESSION['user_id'] = $user['id'];
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

?>
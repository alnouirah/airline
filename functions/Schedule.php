<?php 
session_start(); 
include('../class/Schedule.php');
$schedule = new Schedule();
if(isset($_POST['create_Schedule'])){
    $date = $_POST['date'];
    $start_fly = $_POST['start_fly'];
    $origin_id = $_POST['origin_id'];
    $distnation_id = $_POST['distnation_id'];
    $agency_id = $_POST['agency_id'];
    $maximum_passengers = $_POST['maximum_passengers'];
    $price = $_POST['price'];

    $isCreatd = $schedule->createSchedule($agency_id,$date,$start_fly,$price,$maximum_passengers,$origin_id,$distnation_id);
    $_SESSION['message'] = 'Schedule created Successfully';
    header('location:../admin/browse_schedule.php');
}

if(isset($_GET['deactivate'])){
    $id = $_GET['id'];
    $isDeactivated = $schedule->Deactivate($id);
    $_SESSION['message'] = 'Schedule Deactivated Successfully';
    header('location:../admin/browse_schedule.php');

}
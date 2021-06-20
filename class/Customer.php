<?php 
require_once('../database/Database.php');

class Customer extends Database{
    public function createAccount($name,$email,$phone,$password,$gender,$age,$address,$image){
        $isNotExist = $this->isNotExist($email);
        if($isNotExist){
            $this->insertRow('insert into users (name,email,phone,password,gender,age,address,image) values (?,?,?,?,?,?,?,?) ',[$name,$email,$phone,password_hash($password,PASSWORD_DEFAULT),$gender,$age,$address,$image]);
            $user = $this->getRow('select * from users where email = ?',[$email]);
            session_start();
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['image'] = $image;
            header('location:../customers/dashboard.php');
        }else{
            $_SESSION['authintication_message'] = 'Sorry the email is already exist';
            header('location:../customers/index.php');
        }
        

    }

    public function isNotExist($email){
        $user  = $this->getRow('select * from users where email = ?',[$email]);
        // var_dump($user);
        if(!$user){
            return true;
        }
        return false;
    }

    public function check_creadentials($email,$password){
        $user  = $this->getRow('select * from users where email = ? and password = ? and role_id = ?',[$email,$password,2]);
        // var_dump($user);
        if(!$user){
            return true;
        }
        return false;
    }

    public function getAllUsers(){
        $users = $this->getRows('select * from users where role_id = 2');
        return $users;
    }

    public function deleteUser($id){
        $isDelete = $this->deleteRow('delete from users where id = ?',[$id]);
        return $isDelete;
    }

    public function blockUser($id){
        $isBlocked = $this->deleteRow('update  users set status = 0 where id = ?',[$id]);
        return $isBlocked;
    }
    
    public function UnblockUser($id){
        $isUnBlocked = $this->deleteRow('update  users set status = 1 where id = ?',[$id]);
        return $isUnBlocked;
    }

    public function agencies(){
        $agencies = $this->getRows('select * from agencies');
        return $agencies;
    }

    public function agencySchedules($id){
        $schedules = $this->getRows('select sched.* , origin.name as origin_name , dist.name as distantion_name , agen.name as agency_name   from schedules sched inner join countries origin on origin.id = sched.origin_id inner join countries dist on dist.id = sched.distnation_id inner join agencies agen on agen.id = sched.agency_id where sched.status = 1 and sched.agency_id = ?',[$id]);
        return $schedules;
    }

    public function accomidation(){
        $accomdations = $this->getRows('select * from accomdation');
        return $accomdations;
    }

    public function createTicket($user_id,$schedule_id,$accomdation_id,$total_price){	
        $this->insertRow('insert into tickets(user_id,schedule_id,accomdation_id,total_price) values (?,?,?,?)',[$user_id,$schedule_id,$accomdation_id,$total_price]);
        return true;
    }

    public function myTickets($id){
        $tickets = $this->getRows('select tick.id, tick.total_price , sched.date,sched.start_fly,origin.name as oroigin_name ,dist.name as distnation_name ,agen.name as agency_name from tickets tick inner join schedules sched on sched.id = tick.schedule_id inner join countries origin on origin.id = sched.origin_id inner join countries dist on dist.id = sched.distnation_id inner join agencies agen on agen.id = sched.agency_id where tick.user_id = ?',[$id]);
        return $tickets;
    }

    public function userInfo($id)
    {
        $info = $this->getRow('select * from users where id = ? and role_id = 2',[$id]);
        return $info;
    }
}
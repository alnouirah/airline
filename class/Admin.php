<?php 
require_once('../database/Database.php');

class Admin extends Database{

    public function isNotExist($email){
        $user  = $this->getRow('select * from users where email = ? and role_id = 1',[$email]);
        // var_dump($user);
        if(!$user){
            return true;
        }
        return false;
    }

    public function check_creadentials($email,$password){
        $user  = $this->getRow('select * from users where email = ? and password = ? and role_id = 1',[$email,$password]);
        // var_dump($user);
        if(!$user){
            return true;
        }
        return false;
    }

    public function tickits($status)
    {
        $tickets = $this->getRows('select 
        tick.total_price ,
        tick.id ,
        tick.status ,
        u.name as user_name,
        u.email ,
        u.phone ,
        sched.date ,
        sched.start_fly ,
        origin.name as origin_name , 
        dist.name as distnation_name 
        from tickets tick 
        inner join users u on u.id = tick.user_id 
        inner join schedules sched on sched.id = tick.schedule_id 
        inner join countries origin on origin.id = sched.origin_id 
        inner join countries dist on dist.id = sched.distnation_id 
        inner join agencies agen on agen.id = sched.agency_id
        where tick.status ='. $status);
        return $tickets;
    }
}
<?php 
require_once('../database/Database.php');
class Schedule extends Database{
    public function createSchedule($agency_id,$date,$start_fly,$price,$maximum_passenger,$origin_id,$distnation_id){
       $isCreated =  $this->insertRow('insert into schedules (agency_id,date,start_fly,price,maximum_passengers,origin_id,distnation_id) values (?,?,?,?,?,?,?)',[$agency_id,$date,$start_fly,$price,$maximum_passenger,$origin_id,$distnation_id]);
        return $isCreated;
    }

    public function getCoutries(){
        $counries = $this->getRows('select * from countries');
        return $counries;
    }

    public function getAgencies(){
        $agencies = $this->getRows('select * from agencies');
        return $agencies;
    }

    public function getAllSchedules(){
        $schedules = $this->getRows('select sched.* , origin.name as origin_name , dist.name as distantion_name , agen.name as agency_name   from schedules sched inner join countries origin on origin.id = sched.origin_id inner join countries dist on dist.id = sched.distnation_id inner join agencies agen on agen.id = sched.agency_id where sched.status = 1');
        return $schedules;
    }

    public function Deactivate($id){
        $deActivate = $this->updateRow('update schedules set status = 0 where id = ?',[$id]); 
        return $deActivate;
    }
}
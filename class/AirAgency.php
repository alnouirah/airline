<?php 
require_once('../database/Database.php');

class AirAgency extends Database{
    public function craete_agency($name,$phone,$imageLink){
        $this->insertRow('insert into agencies(name,phone,logo) values(?,?,?)',[$name,$phone,$imageLink]);
        $_SESSION['message'] = 'Agency Created Successfully';
        return true;
    }

    public function get_all(){
        $agencies = $this->getRows('select * from agencies',[]);
        return $agencies;
    }

    public function getAgency($id){
        $agency = $this->getRow('select * from agencies where id = ?',[$id]);
        return $agency;
    }

    public function delete($id){
        $this->deleteRow('delete from agencies where id = ?',[$id]);
        return true;
    }

    public function update($id,$name,$phone){
        $this->updateRow('update agencies set name = ? ,phone = ? where id = ?',[$name,$phone,$id]);
        return true;
    }
}
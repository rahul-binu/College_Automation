<?php

namespace App\Models;

use \CodeIgniter\Model;


class dashboard_model extends Model
{

    public function getLoggedUserData($id){

        $builder = $this->db->table('users');
        $builder->where('email',$id);
        $result = $builder->get();
        if(count($result->getResultArray())==1)
        {
            return $result->getRow();
        }
        else{
            return false;
        }
    }
    public function getLoggedUserData2($id){

        $builder = $this->db->table('student');
        $builder->where('email1',$id);
        $result = $builder->get();
        if(count($result->getResultArray())==1)
        {
            return $result->getRow();
        }
        else{
            return false;
        }
    }

    public function getLoggedUserFam($id){

        $builder = $this->db->table('parent');
        $builder->where('parent_phn',$id);
        $result = $builder->get();
        if(count($result->getResultArray())==1)
        {
            return $result->getRow();
        }
        else{
            return false;
        }
    }

    public function getTcDataSts($ad) {
        $builder = $this->db->table('student');
        $builder->select('student_name, register_no, program, dob, program, admission_no');
        $builder->where('admission_no', $ad);
        $result = $builder->get();
        if(count($result->getResultArray())==1)
        {
            return $result->getRow();
        }
        else{
            return false;
        }
    }
    
    public function getParentdata($phn) {
     

        $builder = $this->db->table('parent');
        $where = "parent_phn='$phn'";
       $builder->where($where);
       $result = $builder->get();
       $resultArray1 = $result->getResultArray();
     
       $data=array_merge($resultArray1);
    
    
       if (count($data) > 0) {
             return $data;
          } else {
               return false;
           }
    }
    

    public function upadateprof($data,$id)
    {

        $db = \Config\Database::connect();

        $builder = $db->table('users');
    
        $builder->where('email', $id);
        $builder->update($data);
    
        if ($db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }

    }

    public function updateParent($data,$phn)
    {
        $db = \Config\Database::connect();

        $builder = $db->table('parent');
    
        $builder->where('parent_phn', $phn);
        $builder->update($data);
    
        if ($db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function updateParentandStudent($data,$phn)
    {
        $db = \Config\Database::connect();

        $builder = $db->table('student');
    
        $builder->where('parent_phn', $phn);
        $builder->update($data);
    
        if ($db->affectedRows() >= 1) {
            return true;
        } else {
            return false;
        }

    }
}
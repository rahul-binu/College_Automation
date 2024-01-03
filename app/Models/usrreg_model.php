<?php

namespace App\Models;

use \CodeIgniter\Model;


class usrreg_model extends Model
{

  public function Createuser($data)
  {

    $builder = $this->db->table('users');
    $res = $builder->insert($data);
    if ($this->db->affectedRows() == 1) {
      return true;
    } else {
      return false;
    }

  }

  public function verifyUniid($id)
  {

    $builder = $this->db->table('users');
    $builder->select('activation,uniid,status');
    $builder->where('uniid',$id);
    $result = $builder->get();
    $row = $result->getRow();
    if ($row !== null) {
      return $row;
  } else {
      return false;
  }
  
  }

  public function updateStatus($uniid)
  {
    $builder = $this->db->table('users');
    $builder->where('uniid',$uniid);
    $builder->update(['status'=>'active']);
    if($this->db->affectedRows() == 1)
    {
      return true;
    }else{
      return false;
    }
  }


  public function verifyEmail($email)
  {
    $builder = $this->db->table('users');
    $builder->select("username,password,designation,email");
    $builder->where('email',$email);
    $result = $builder->get();
    if(count($result->getResultArray())==1)
    {
      return $result->getRowArray();
    }
    else{
      return false;
    }
  }

  public function CheckUser($email,$desig){

    $tb = null;

    if($desig=="student")
    {
      $tb = 'student';
    }else{
      $tb = 'parent';
    }

    $builder = $this->db->table($tb);
   
    $builder->where('email1',$email);
    $result = $builder->get();
    if(count($result->getResultArray())==1)
    {
      return true;
    }
    else{
      return false;
    }

  }


  public function Addparent($data)
  {

    $builder = $this->db->table('parent');
    $res = $builder->insert($data);
    if ($this->db->affectedRows() == 1) {
      return true;
    } else {
      return false;
    }

  }

  public function GetUsers()
         {
           $db = \Config\Database::connect();
           $builder = $db->table('users');
       
       $builder->select('*');
       
       $result = $builder->get();
       $resultArray = $result->getResultArray();
        if(count($resultArray)>0)
       {
           return  $resultArray;
       }else{
        return false;
       }
       }

  
}



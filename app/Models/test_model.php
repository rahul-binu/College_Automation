<?php

namespace App\Models;
use \CodeIgniter\Model;



class test_model extends Model{




public function revdata()
         {
             $db = \Config\Database::connect();
             $builder = $db->table('test1');
 
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
<?php

namespace App\Models;
use \CodeIgniter\Model;



class stdview_model extends Model{


     
    
         public function stdmodel2()
         {
             $db = \Config\Database::connect();
             $builder = $db->table('student');
 
         $builder->select('*');
         $builder->where('approval', 'approved');
         $result = $builder->get();
         $resultArray = $result->getResultArray();
          if(count($resultArray)>0)
        {
             return  $resultArray;
       }else{
          return false;
        }
    }
    
    public function stdupdatemodel($admno)
    {


      $db = \Config\Database::connect();

        $builder = $db->table('student');
        $where = "admission_no ='$admno'";
       $builder->where($where);
       $result = $builder->get();
       $resultArray1 = $result->getResultArray();
     
       $data=array_merge($resultArray1);
    
    
       if (count($data) > 0) {
             return $data;
          } else {
               return false;
           }
    
      // $db = \Config\Database::connect();
      // $query1 = $db->query('SELECT * FROM stdbasicinfo2 WHERE adno= $admno');
      // // $query2 = $db->query('SELECT * FROM stdmoreinfo2  WHERE adno="$admno"');
      // $row1 = $query1->getRow();
      // $row2 = $query2->getRow();

      //   $data = array_merge($row1,$row2);
      
      //   $builder = $db->table('stdbasicinfo2');

      //   $builder->where('adno', $admno);
      //   $result = $builder->get();
        
      //   $resultArray = $result->getResultArray();
    
    
      //  if (count($data) > 0) {
      //      return $data;
      //  } else {
      //       return false;
      //   }
}




public function updateUser($data1, $id)
{
    $db = \Config\Database::connect();

    $builder = $db->table('student');

    $builder->where('admission_no', $id);
    $builder->update($data1);

    if ($db->affectedRows() == 1) {
        return true;
    } else {
        return false;
    }
}

public function listUnapprovedStd(){
    $db = \Config\Database::connect();
    $query = $db->query("SELECT * FROM student WHERE approval='nonupprove';");

   
    $result = $query->getResult('array');
 
    //  print_r($result);
     if(count($result)>0)
   {
        return  $result;
  }else{
     return false;
   }
}

public function updateApproval($app)
{
    $db = \Config\Database::connect();

    $builder = $db->table('student');
    $builder->set('approval', 'approved');
    $builder->whereIn('email1', $app);
    $builder->update();

    
    if ($db->affectedRows()) {
        return true;
    } else {
        return false;
    }
}


    public function delete1($id){

        $db = \Config\Database::connect();

        $builder = $db->table('student');
        $builder->where('email1', $id);
       return $builder->delete();
    }

    public function deleteUser($id){

        $db = \Config\Database::connect();

        $builder = $db->table('users');
        $builder->where('email', $id);
       return $builder->delete();
    }

   

   
}



    // public function stdmodel1($adno)
    // {
    //     $db = \Config\Database::connect();

    //     $builder = $db->table('stdbasicinfo2');
       
    //     $builder->where('adno', $adno);
    //     $result = $builder->get();
    
    //     $resultArray = $result->getResultArray();

    //     // Use count on the array
    //     if (count($resultArray) > 0) {
    //         return $resultArray;
    //     } else {
    //         return false;
    //     }
    
    // }

    // }

    //     public function stdmodel3($srt1,$srt2)
    // {

    //     $db = \Config\Database::connect();

    //     $builder = $db->table('stdbasicinfo2');
    //     $where = "$srt1='$srt2'";
    //     $builder->where($where);
       
    //     // $builder->where('$srt1',$srt2);
    //     $result = $builder->get();
    
    //     $resultArray = $result->getResultArray();

    //     // Use count on the array
    //     if (count($resultArray) > 0) {
    //         return $resultArray;
    //     } else {
    //         return false;
    //     }
    
    // }

    // public function stdmodel4($srt1,$srt2,$year)
    // {

    //     $db = \Config\Database::connect();

    //     $builder = $db->table('stdbasicinfo2');
    //     $where = "$srt1='$srt2' AND adyear='$year'";
       
    //     $builder->where($where);
       
    //     // $builder->where('$srt1',$srt2);
    //     $result = $builder->get();
    
    //     $resultArray = $result->getResultArray();

    //     // Use count on the array
    //     if (count($resultArray) > 0) {
    //         return $resultArray;
    //     } else {
    //         return false;
    //     }
    
    // }

    // public function stdmodel5($year)
    // {

        
    //     $db = \Config\Database::connect();

    //     $builder = $db->table('stdbasicinfo2');
    //     $where = "adyear='$year'";
       
    //     $builder->where($where);
       
    //     // $builder->where('$srt1',$srt2);
    //     $result = $builder->get();
    
    //     $resultArray = $result->getResultArray();

    //     // Use count on the array
    //     if (count($resultArray) > 0) {
    //         return $resultArray;
    //     } else {
    //         return false;
    //     }
    
    // }

   
  
        
 


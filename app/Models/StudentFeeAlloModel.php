<?php
namespace App\Models;

use CodeIgniter\Model;

class StudentFeeAlloModel extends Model
{

    public function __construct()
    {
        // $this->connection = \Config\Database::connect();
    }
    public function stdFeeAlloFilter($yearOfAdmission , $accadamicYearyear, $program )
    {
        $connection = \Config\Database::connect();
        $query = $connection->query("SELECT * FROM student WHERE (yearOfAdmission='$yearOfAdmission' AND  Programme = '$program')");
        $stdRes = $query->getResult();
        $query2 = $connection->query("SELECT fee_head,totalAmount,applicableFrom,applicableTill,accadamicYear,collectionRemark FROM `fee_settings` WHERE(accadamicYear='$accadamicYearyear'AND Programme='$program')");
        $feeRes = $query2->getResult();

        $passingArray['students'] = $stdRes;
        $passingArray['fees'] = $feeRes;
    
        return $passingArray;
    }
    public function test($yearOfAdmission = null, $accadamicYear = null, $program = null) {
       
    }
    
    

}
?>
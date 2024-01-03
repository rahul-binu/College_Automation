<?php
namespace App\Models;

use CodeIgniter\Model;

class feeDetailsModel extends Model
{
    protected $table1 = 'fee_master';
    protected $table2 = 'fee_settings';
    protected $table3 = 'std_fee_reg';
    //    public function __construct(){
//        $db = \Config\Database::connect();
//    }
    public function feedetailsdb()
    {
        //fetch fee details form db
        $db = \Config\Database::connect();
        $query = $db->query('select B.SlNo,A.fee_group, A.fee_head ,B.program,B.yearOfAdmission ,B.accadamicYear  ,B.status ,B.applicableFrom, B.applicableTill ,B.collectionType, B.totalAmount, B.collectionRemark from college_automation.fee_master A JOIN college_automation.fee_settings B ON A.fee_head=B.fee_head');
        //
        $result = $query->getResult();
        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function studentfeepay()
    {
        //fetch data from the std fee pay table 
        // first model used to fetch the data from the std_fee_reg new this old function substituded with studentFeeDetailsFetch
        $db = \Config\Database::connect();
        $query = $db->query('select a.name,b.SFRID,b.admissionNO,a.program,b.dueDate,b.paidDate,a.yearOfAdmission,b.Amount,b.accadamicYear FROM college_automation.student a JOIN college_automation.std_fee_reg b ON a.admissionNo=b.admissionNO');
        $result = $query->getResult();
        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function studentFeeDetailsFetch()
    {
        //data from std_fee_reg
        $connection = \Config\Database::connect();
        $query = $connection->query("SELECT a.student_name, b.SFRID, b.admissionNo, a.program, b.dueDate, b.paidDate, a.yearOfAdmission, b.Amount, b.feeAllocationYear, b.fee_head, SUM(b.amount) AS total_amount
        FROM college_automation.student a
        JOIN college_automation.std_fee_reg b ON a.admission_no = b.admissionNo
        GROUP BY b.admissionNO
        ");
        $result = $query->getResult();
        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function feeMasterSave($data)
    {
        // print_r($data);
        //save the fee master informations
        $db = \Config\Database::connect();
        $builder = $db->table('fee_master');
        $res = $builder->insert($data);
        if ($res === true) {
            return true;
        } else {
            return false;
        }
    }
    public function feeDataFetch()
    {
        //remove the model no use
        //fetch fee head to the fee add form
        $db = \Config\Database::connect();
        $query = $db->query('Select fee_head from fee_master');
        $result = $query->getResult();
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function feeHeadfetch()
    {
        //fetch fee master details for the fee master add form table
        $db = \Config\Database::connect();
        $query = $db->query('select * from fee_master');
        $res = $query->getResult();
        if (!empty($res)) {
            return $res;
        } else {
            return false;
        }
    }
    public function FeeStstusChange($feeHead, $newStstus)
    {
        //function for change ststus of fee status
        $con = \Config\Database::connect();
        $changeQuery = $con->query("UPDATE `fee_master` SET `status`='$newStstus'WHERE (`fee_head`='$feeHead')");
        //  $result=$changeQuery->getResult();
        if (!empty($changeQuery)) {
            return 1;
        } else {
            return 0;
        }
    }
    public function studentFetchFee()
    {
        //code to fetch fees from fee amount and retun the result to studentfeeadd form
        $db = \Config\Database::connect();
        $query = $db->query('select fee_head,totalAmount from fee_settings');
        $resData = $query->getResult();
        if (!empty($resData)) {
            return $resData;
        } else {
            return false;
        }
    }
    public function feeAdd($data)
    {
        //insert fee details into the fee amount table
        // echo '<pre>';
        // print_r($data);
        $db = \Config\Database::connect();
        $builder = $db->table('fee_settings');
        $res = $builder->insert($data);
        if ($res === true) {
            return true;
        } else {
            echo false;
        }
    }
    public function feeDataBill($admissionNo = null)
    {
        //data fetch for bill data
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM `std_fee_reg` WHERE admissionNo='$admissionNo'");
        $feeDetails = $query->getResult();
        $query2 = $db->query("SELECT * FROM student WHERE (`admission_no`='$admissionNo')");
        $stdDetails = $query2->getResult();
        $resultArray = [
            'fees' => $feeDetails,
            'student' => $stdDetails
        ];
        if (!empty($resultArray)) {
            return $resultArray;
        } else {
            return false;
        }
    }
    public function feeEditModel($id = null, $data = null)
    {
        //edit the fee_settings table
        $id1 = $id;
        $data1 = $data;
        $db = \Config\Database::connect();
        if (($id1 != null) && ($data1 == null)) {
            $query = $db->query("SELECT * FROM `fee_settings` WHERE SlNo = '$id1'");
            $res = $query->getResult();
            if ($res) {
                return $res;
            } else {
                return false;
            }
        } else {
            //  echo '<pre>';
            //  print_r($data1);
            // echo $id1;
            $builder = $db->table('fee_settings');
            $builder->where('SlNo', $id);
            $result = $builder->update($data);
            if ($result == true) {
                return $result;
            } else {
                return false;
            }

        }

    }
    public function studentFilter($program = null, $yearofadm = null, $accadamicYear = null)
    {
        //std and fee data fetch for student fee registration
        if ($yearofadm != null) {
            $con = \Config\Database::connect();
            $query = $con->query("SELECT * FROM student WHERE (yearOfAdmission='$yearofadm' AND  program = '$program')");
            $resultData = $query->getResult();
            $query2 = $con->query("SELECT fee_head,totalAmount,applicableFrom,applicableTill,accadamicYear,collectionRemark FROM `fee_settings` WHERE(accadamicYear='$accadamicYear'AND Programme='$program' OR programme='all' )");
            $feeRes = $query2->getResult();

            $passingArray['students'] = $resultData;
            $passingArray['fees'] = $feeRes;
            //            echo'<pre>';
//            print_r($feeRes);
            if (!empty($passingArray)) {
                return $passingArray;
            } else {
                return false;
            }
        }
    }
    public function studetnFeeAlloCrossCheck($admno= null,$feeHead =null,$feeAllocationYear=null){
        //function to check the studetn fee register table before inserting the data int to the table 
            $con = \Config\Database::connect();
            $query = $con->query("SELECT admissionNo FROM std_fee_reg WHERE (admissionNo='$admno' AND fee_head ='$feeHead' AND feeAllocationYear='$feeAllocationYear')  ");
            $resultData = $query->getResult();
            echo'<pre>';
            print_r($resultData);
    }
    public function feeAllocationStdFetch($admissionNo = null, $yearofadm = null, $program = null)
    {
        //data for the page feeallocation
        $con = \COnfig\Database::connect();
        if ($admissionNo != null) {
            $query = $con->query("SELECT admissionNo FROM `student` WHERE admissionNo='$admissionNo'");
            $res = $query->getResult();
            $query2 = $con->query("SELECT * FROM fee_settings WHERE (program='$program' AND yearOfAdmission='$yearofadm')");
            $feeResult = $query2->getResult();

            $MerArray = array_merge($res, $feeResult);
            // echo '<pre>';
            // print_r($MerArray);
            if (!empty($MerArray)) {
                return ($MerArray);
                // return $res;
            } else {
                return false;
            }
        }
        //   echo $yearofadm, $program, $admno;
        //   if (($yearofadm != null) && ($program != null)) {
        //       $query2 = $con->query("SELECT * FROM fee_settings WHERE (program='$program'AND yearOfAdmission='$yearofadm')");
        //       $feeResult = $query2->getResult();
        //       if (!empty($feeResult)) {
        //           //  return $feeResult;
        //           print_r($feeResult);
        //       } else {
        //           return false;
        //       }
        //   }
    }
    public function accadamicYearFetch()
    {
        $con = \Config\Database::connect();
        $qry = $con->query("SELECT accadamicYear FROM fee_settings");
        $res = $qry->getResult();
        if (!empty($res)) {
            return $res;
        } else {
            return false;
        }
    }
    public function studentFeeRegistration($data)
    {
        //function to register student fee in the std_fee_reg form
        print_r($data);
        $con = \Config\Database::connect();
        $builder = $con->table('std_fee_reg');
        $result = $builder->insertBatch($data);
        if (!empty($result)) {
            return true;
        } else {
            return false;
        }
    }

    public function findData($yearOfAdmission = null, $feeAllocationYear = null, $program = null, $status = null)
    {
        //student fee due data filter
        $connection = \Config\Database::connect();
        $query = $connection->query("SELECT
        a.name, b.SFRID, b.admissionNO, a.program, b.dueDate, b.paidDate, a.yearOfAdmission, b.feeAllocationYear, b.amount, b.fee_head,
        SUM(b.amount) AS total_amount
    FROM
        college_automation.student a
    JOIN college_automation.std_fee_reg b ON a.admissionNo = b.admissionNO
    WHERE
        a.yearOfAdmission = '$yearOfAdmission' AND b.feeAllocationYear = '$feeAllocationYear' AND a.program = '$program' AND b.paidDate = '$status'
    GROUP BY b.admissionNO");
        $resultData = $query->getResult();
        if (!empty($resultData)) {
            return $resultData;
        } else {
            return false;
        }
    }

    //  public function test(){
    //      $con=\Config\Database::connect();
    //      $data=[
    //          'admno'=>'350',
    //          'name'=>'makkan',
    //          'program'=>'bba',
    //          'yearOfAdmission'=>'2000'
    //      ];
    //      $builder=$con->table('student');
    //      $builder->where('admno',350);
    //     $res= $builder->update($data);
    //      if(!isset($res)){
    //          return $res;
    //      }else{
    //          return false;
    //      }
    //  }
}
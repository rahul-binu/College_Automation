<?php
namespace App\Models;

use CodeIgniter\Model;

class StudentFeeOpsModel extends Model
{
    public $connection;
    public function __construct()
    {
        $this->connection = \Config\Database::connect();
    }
    public function findData($yearOfAdmission = null, $accadamicYear = null, $program = null)
    {
        $connection = \Config\Database::connect();
        $query = $connection->query("SELECT
        a.name,b.SFRID,b.admissionNO,a.programme,b.dueDate,b.paidDate,a.yearOfAdmission,b.accadamicYear,
        SUM(b.amount) AS total_amount
    FROM
        fee_management.student a
    JOIN fee_management.std_fee_reg b ON a.admissionNo = b.admissionNO
    WHERE
        a.yearOfAdmission = '$yearOfAdmission'AND b.accadamicYear = '$accadamicYear'AND a.programme = '$program'
    GROUP BY b.admissionNO;
    ");
        $resultData = $query->getResult();
        if (!empty($resultData)) {
            return $resultData;
        } else {
            return false;
        }
    }
    public function stdAndFeeDataFetch($yearOfAdmission = null, $accadamicYear = null, $program = null)
    {
        // std and fee data fetch for student fee registration
        if ($yearOfAdmission != null) {
            // echo $program, $yearOfAdmission, $accadamicYear;
            $con = \Config\Database::connect();

            $query = $con->query("SELECT * FROM student WHERE (yearOfAdmission='$yearOfAdmission' AND Programme = '$program')");
            $resultData = $query->getResult();

            $query2 = $con->query("SELECT fee_head, totalAmount, applicableFrom, applicableTill, accadamicYear, collectionRemark FROM `fee_settings` WHERE (accadamicYear='$accadamicYear' AND Programme='$program')");
            $feeRes = $query2->getResult();

            $passingArray['students'] = $resultData;
            $passingArray['fees'] = $feeRes;

            // Uncomment the next lines if you want to return data
            if (!empty($passingArray)) {
                return $passingArray;
            } else {
                return false;
            }
        }
    }
    public function feeBillPayment($SFID = null, $date,$billId=null)
    {
        //model to update fee paid date (fee payment)
        $connection = \Config\Database::connect();
        $query = $connection->query("UPDATE `std_fee_reg` SET paidDate='$date' , `BillID`='$billId' WHERE SFRID='$SFID'");

        if (!empty($query)) {
            return $query;
        } else {
            return false;
        }
    }
    public function std_fee_regDataFetch($key){
        //fetch data from std_fee_reg toi create bill
        $connection = \Config\Database::connect();
        $query = $connection->query("SELECT fee_head, amount FROM std_fee_reg WHERE SFRID IN ($key) ");
        $result=$query->getResult();
        if (!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }
}
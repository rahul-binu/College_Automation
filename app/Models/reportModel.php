<?php
namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{
    public function __constuct()
    {
        $this->connection = \Config\Database::connect();
    }
    public function feePaidReport($accadamicYear = null, $program = null)
    {
        $connection = \Config\Database::connect();
        $query = $connection->query("SELECT * FROM std_fee_reg WHERE (`feeAllocationYear`='$accadamicYear' AND `paidDate` != '0000-00-00')");
        $result = $query->getResult();
        if (!empty($result)) {
            return ($result);
        } else {
            return false;
        }
    }

    public function yearlyDueReport($year = null)
    {
        $connection = \Config\Database::connect();
        $query = $connection->query("SELECT
        student.admission_no,
        student.student_name,
        student.program,
        student.yearOfAdmission,
        SUM(CASE WHEN std_fee_reg.paidDate <> '0000-00-00' THEN std_fee_reg.Amount ELSE 0 END) AS PaidAmt,
        SUM(std_fee_reg.Amount) AS TotalAmt,
        std_fee_reg.feeAllocationYear
    FROM
        student
    JOIN
        std_fee_reg ON student.admission_no = std_fee_reg.admissionNO
    WHERE
        std_fee_reg.admissionNO = student.admission_no
        AND std_fee_reg.feeAllocationYear = '$year'
    GROUP BY
        student.admission_no,
        student.student_name,
        student.program,
        student.yearOfAdmission,
        std_fee_reg.feeAllocationYear
    ");

  //      $query1 = $connection->query("SELECT
  //      student.admissionNo,
  //      student.name,
  //      student.programme,
  //      SUM(std_fee_reg.Amount)AS TotalAmt,
  //      std_fee_reg.feeAllocationYear
  //  FROM
  //      student
  //  JOIN
  //      std_fee_reg ON student.admissionNo = std_fee_reg.admissionNO
  //  WHERE
  //      std_fee_reg.admissionNO = student.admissionNo
  //      AND std_fee_reg.feeAllocationYear = '$year'
  //  GROUP BY
  //      student.admissionNo;
  //  
  //      ");

        $resData = $query->getResult();
        return ($resData);
    }
}
?>
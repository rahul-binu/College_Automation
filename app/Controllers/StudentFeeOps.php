<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StudentFeeOpsModel;

class StudentFeeOps extends BaseController
{
    public $stdFeeOpsModelObj;
    public function __construct()
    {
        helper(['form']);
        $this->stdFeeOpsModelObj = new StudentFeeOpsModel();
    }
    public function studenntFeeDueFilter()
    {
        //student fee filter 
        if ($this->request->getMethod() == 'post') {
            $yearOfAdmission = $this->request->getVar('yearOfAdmission');
            $accadamicYear = $this->request->getVar('accadamicYear');
            $program = $this->request->getVar('programFilterData');
            $status = $this->request->getVar('statusFilterData');
            $this->stdFeeOpsModelObj = new StudentFeeOpsModel();
            $resultData = $this->stdFeeOpsModelObj->findData($yearOfAdmission, $accadamicYear, $program);
            if (!empty($resultData)) {
                echo view('studentFeeView', $resultData);
            }
        }
    }

    public function studentFeeAlocation()
    {
        echo view('studentsfeealocation');

        //if ($this->request->getMethod() = 't') {
        //    $program = $this->request->getPost('studentProgram');
        //    $yearOfAdmission = $this->request->getPost('yearOfAdmission');
        //    $accadamicYear = $this->request->getPost('accadamicYear');

        //    $this->stdFeeOpsModelObj = new StudentFeeOpsModel();
        //    $resultData = $this->stdFeeOpsModelObj->stdAndFeeDataFetch($yearOfAdmission, $accadamicYear, $program);
        //    //print_r($resultData);
        //    if (!empty($resultData)) {
        //        echo view('studentsFeeAlocation', $resultData);
        //    }
        //}
    }
    public function studentFeeAlocationFilter()
    {
        if ($this->request->getMethod() === 'post') {
            $program = $this->request->getPost('studentProgram');
            $yearOfAdmission = $this->request->getPost('yearOfAdmission');
            $accadamicYear = $this->request->getPost('accadamicYear');

            $this->stdFeeOpsModelObj = new StudentFeeOpsModel();
            $resultData = $this->stdFeeOpsModelObj->stdAndFeeDataFetch($yearOfAdmission, $accadamicYear, $program);
            //print_r($resultData);
            if (!empty($resultData)) {
                echo view('studentsFeeAlocation', $resultData);
            }else{
                echo "working";
            }
        }

    }
    public function billPayment()
    {
        if ($this->request->getMethod() === 'post') {
            $SFRID = $this->request->getVar('feecheCkbox');
            $date = $this->request->getVar('billDate');
            $name = $this->request->getVar('name');
            $admissionNo = $this->request->getVar('admissionNo');
            $program = $this->request->getVar('program');
            $billId = $this->request->getVar('billId');
            $type = gettype($SFRID);
            if (gettype($SFRID) == 'array') {
                foreach ($SFRID as $key) {
                     $resultData = $this->stdFeeOpsModelObj->feeBillPayment($key, $date,$billId);
                }
            } else {
                 $resultData = $this->stdFeeOpsModelObj->feeBillPayment($SFRID, $date,$billId);
            }
            $SFRIDString = implode(',', $SFRID);
            $feeData = $this->stdFeeOpsModelObj->std_fee_regDataFetch($SFRIDString);
            $data['items'] = [
                0 => [
                    'name' => $name,
                    'date' => $date,
                    'admissionNo' => $admissionNo,
                    'stdProgram' => $program,
                    'billId' => $billId],
                1 => [
                    'fee'=>$feeData
                ]
            ];
            if (!empty($date)) {
                echo view('bill', $data);
            }
        }
    }

    public function bill()
    {
        //student fee payment bill

        echo view('bill');
        $timestamp = time();
        echo $timestamp;
    }
}

?>
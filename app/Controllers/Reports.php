<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\reportModel;

class Reports extends BaseController
{
    public function __construct()
    {
        helper(['form']);
        $this->reportModelObj = new reportModel();
        // $reportModelObj=$this->
    }
    public function index()
    {
        echo view('reportIndex');
    }
    public function feeReport()
    {
        if ($this->request->getMethod() === 'post') {
            $reportModelObj = new reportModel();
            $accadamicYear = $this->request->getPost('accadamicYear');
            $program = $this->request->getPost('program');
            $section = $this->request->getPost('section');

            if ($this->request->getPost('status') == '1') {
                //paid reports
                //paid firsrt half report
                $data['items'] = $reportModelObj->feePaidReport($accadamicYear, $program);
                if (!empty($data)) {
                    echo view('feeReports', $data);
                }
            } else {
                echo "due";
            }
        }
        // echo view('feeReports');
    }
    public function yearlyDueReport()
    {
        //yaerly report
        if ($this->request->getMethod() == 'post') {
            $reportModelObj = new reportModel();
            $acdY = $this->request->getPost('accadamicYear');
            $data['items'] = $reportModelObj->yearlyDueReport($acdY);
            echo view('yearlyDueReport', $data);
        } else {
            echo view('yearlyDueReport');
        }
    }
}
?>
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
        //session and user management
        if (!session()->has("logged_user")) {
            return redirect()->to(base_url() . "login");
        }
        $des = session()->get('who');
        if ($des != 'admin' && $des != 'staff') {
            return redirect()->to(base_url() . "login");
        }
        //session and user management end
        echo view('reportIndex');
    }
    public function feeReport()
    {
        //session checking deeply checking ,take a meditation its good for health  (apelling mistake unde)
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
        }
        //user checking in session  -- dont worry man god is with you 
        $des = session()->get('who');
        if ($des != 'admin' && $des != 'staff') {
            return redirect()->to(base_url() . "login");

        }

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
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
        }
        $des = session()->get('who');
        if ($des != 'admin' && $des != 'staff') {
            return redirect()->to(base_url() . "login");

        }
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

    public function studentList()
    {
        //student list
        //session and user management
        if (!session()->has("logged_user")) {
            return redirect()->to(base_url() . "login");
        }
        $des = session()->get('who');
        if ($des != 'admin' && $des != 'staff') {
            return redirect()->to(base_url() . "login");
        }
        //session and user management end
        $reportModelObj = new reportModel();
        if ($this->request->getMethod() === 'post') {
            $acdY = $this->request->getPost('accadamicYear');
            $program = $this->request->getPost('program');
            $data['students'] = $reportModelObj->studentList($acdY, $program);
            echo view('studentList', $data);
        } else {
            echo view('studentList');
        }
    }
}
?>
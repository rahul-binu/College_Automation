<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StudentFeeAlloModel;

class StudentFeeAlloController extends BaseController
{
    public function __construct()
    {
        helper(['form']);
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
        echo view('studentsFeeAlocation');
    }
    public function studentFeeAllocationFilter()
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
        $yearOfAdmission = $this->request->getPost("yearOfAdmission");
        $accadamicYear = $this->request->getPost("accadamicYear");
        $program = $this->request->getPost("program");

        //echo($yearOfAdmission  );

        $modelObj = new StudentFeeAlloModel();
        $feeAlloData['items'] = $modelObj->stdFeeAlloFilter($yearOfAdmission, $accadamicYear, $program);
        return $this->response->setJSON($feeAlloData);
    }

    public function studentFeeAllocation()
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
        echo view('studentFeeAlocation');
    }
    public function test()
    {

    }

}
?>
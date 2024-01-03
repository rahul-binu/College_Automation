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
        echo view('studentsFeeAlocation');
    }
    public function studentFeeAllocationFilter()
    {
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
        echo view('studentFeeAlocation');
    }
    public function test()
    {

    }

}
?>
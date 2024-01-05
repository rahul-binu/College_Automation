<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\feeAutoModel;

class feeAutoController extends Controller
{

    public $obj;
    public function __construct()
    {
        $this->obj = new feeAutoModel();
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

        if ($this->request->getMethod() == 'post') {
            $fee_group = $this->request->getVar('fee_group');
            $fee_group_acro = $this->request->getVar('fee_group_acro');
            $fee_head = $this->request->getVar('fee_head');
            $fee_head_acro = $this->request->getVar('fee_head_acro');
            $inputData = [
                'fee_group' => $fee_group,
                'fee_group_acro' => $fee_group_acro,
                'fee_head' => $fee_head,
                'fee_head_acro' => $fee_head_acro
            ];
            //  print_r($inputData);
            $this->obj->saveFeeMaster($inputData);
        }

        //   $data['res'] = $this->obj->findAll();
        echo view('/layout/structure');
        echo view('feeHeadAdd');
        // echo' <pre>';
        // print_r($data);
    }

}
?>
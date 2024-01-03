<?php
namespace App\Controllers;

use CodeIgniter\Controller;
//model
use App\Models\FeeOpsModel;

//controller for full fee operations
class FeeOps extends BaseController
{
    public function __construct()
    {
        helper(["form"]);
        $this->modelObj = new FeeOpsModel();
    }
    public function index()
    {
        echo view("layout/structure");
        echo view('feeHeadOperations');
    }

    public function fetchFeeMasterData()
    {
        //function to fetch data from the fee master 
        $modelObj = new FeeOpsModel();
        $feeData['fee'] = $modelObj->findAll();
        return $this->response->setJSON($feeData);
    }
    public function editFeeMasterData()
    {
        //controller function edit the feemaster details
        $modelObj = new FeeOpsModel();
        $feeHead = $this->request->getPost('feeHead');
        $data['editFee'] = $modelObj->FetchFeeMasterDetails($feeHead);
        return $this->response->setJSON($data);
    }

    public function feeStatus($feeHead, $newStatus)
    {
        //controller function to chane the fee master status
        $feeModelObj = new FeeOPsModel();
        if ($this->request->getMethod() == 'get') {
            //  $feeHead=$this->request->getPost('feeHead');
            //  $newStatus=$this->request->getPost('status');
            $status = $feeModelObj->FeeStstusChange($feeHead, $newStatus);

            if ($status == '1') {
              // $this->index();
             return redirect()->to('feeOps');
             // echo $feeHead,$newStatus;
            } else {
                echo "somthing wrong";
                echo $feeHead,$newStatus;
            }
        }
    }

    public function feeSetupStatusChange($status,$feeHead,$course){
        //controller function to chane the ststus of the fee setting table 
        $modelObj=new FeeOpsModel();
        if($this->request->getMethod()=='get'){
            echo $status,$feeHead;
            $statusOfFeeDetailsStatus=$modelObj->feeDetailsStatusUpdate($feeHead,$status,$course);
            if($statusOfFeeDetailsStatus==1){
                return redirect()->to('FeeManController/feeDetailsView');
            }
            else{
                echo "pop a error message page";
            }
        }
    }

    public function FeeMasterDataEdit(){
        //function to catch fee master data and update the row
        $modelObj=new feeOpsModel();
        $feeHead=$this->request->getPost("feeHead");
        $data=[
            'fee_head'=>$this->request->getPost('feeHead'),
            'fee_head_acro'=>$this->request->getPost('feeHeadAcro'),
            'fee_group'=>$this->request->getPost('feeGroup'),
            'fee_group_acro'=>$this->request->getPost('feeGroupAcro')
        ];
        // print_r($data);
       $modelObj->update($feeHead,$data);
       $message=['status'=>'Updated successfully'];
       return $this->response->setJSON($message);
    }

}
?>
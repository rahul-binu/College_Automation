<?php

namespace App\Controllers;

use CodeIgniter\Controller;
//using my model
use App\Models\feeDetailsModel;
use App\Models\FeeOpsModel;
use App\Models\StudentFeeOpsModel;

class FeeManController extends BaseController
{
    public $Modelobj;


    //function for include form helper
    public function __construct()
    {
        //object of model
        $this->Modelobj = new feeDetailsModel();

        helper(['form', 'formHelper']);
    }
    public function index()
    {
        // echo view('/layout/structure');
        echo view('index');
    }
    public function feeHeadAdd()
    {
        //accessing the session
        // public $session=session();
        $session = \Codeigniter\Config\Services::session();
        $data = [];
        $feeDetailsModelobj = new feeDetailsModel();
        //      $data['validation'] = null;
        //      $rules = [
        //          'fee_group' => 'required',
        //          'fee_head' => 'required',
        //          'fee_group_acro' => 'required|max_length[5]',
        //          'fee_head_acro' => 'required|max_length[5]'
        //      ];
        if ($this->request->getMethod() == 'post') {
            //         if ($this->validate($rules)) {
            $data = [
                'fee_group' => $fee_group = $this->request->getVar('fee_group'),
                'fee_group_acro' => $fee_group_acro = $this->request->getVar('fee_group_acro'),
                'fee_head' => $fee_head = $this->request->getVar('fee_head'),
                'fee_head_acro' => $fee_head_acro = $this->request->getVar('fee_head_acro')
            ];
            // print_r ($data);    
            $insertStatus = $feeDetailsModelobj->feeMasterSave($data);
            //    if ($insertStatus) {
            //        $session->setTempData('true', 'successfully insertrd', 3);
            //        return redirect()->to('/feemanController/feeHeadAdd');
            //    } else {
            //        $session->setTempData('false', 'not insertrd', 3);
            //        return redirect()->to('/feemanController/feeHeadAdd');
            //    }
            //          } else {
            //              $data['validation'] = $this->validator;
            //          }
        }
        $Tdata['res'] = $feeDetailsModelobj->feeHeadFetch();
        echo view('/layout/structure');
        echo view('feeHeadAdd', $Tdata);
    }
    public function feeStatus($feeHead, $newStstus)
    {
        //change the fee master status
        $feeModelObj = new feeDetailsModel();
        if ($this->request->getMethod() == 'get') {
            $status = $feeModelObj->FeeStstusChange($feeHead, $newStstus);
            if ($status == '1') {
                $this->feeHeadAdd();
            } else {
                echo "somthing wrong";
            }
        }
    }
    public function feeAdd($feeHead)
    {
        //fee add
        $formInputData = [];
        if ($this->request->getMethod() == 'post') {

            //exemption fields
            $exeCategoryIP = $this->request->getVar('exeCategory');
            $exeSubCategoryIP = $this->request->getVar('exeSubCategory');
            $exeAmountIP = $this->request->getVar('exeAmount');
            $exePercentageIP = $this->request->getVar('exePercentage');
            $operatorIP = $this->request->getVar('oper');
            //    print_r( $exeCategoryIP);
            //    echo "====";
            //    print_r($exeSubCategoryIP);
            //    echo "====";
            //    print_r($exeAmountIP);
            //    echo "====";
            //    print_r($exePercentageIP);

            for ($i = 0; $i < count($exeCategoryIP); $i++) {
                $exeCategory = ($exeCategoryIP[$i]);
                $exeSubCategory = ($exeSubCategoryIP[$i]);
                $exeAmount = ($exeAmountIP[$i]);
                $exePercentage = ($exePercentageIP[$i]);
                $operater = ($operatorIP[$i]);
                $exp[$i] = $exeCategory . ':' . $operater . ':' . $exeSubCategory . ':' . $exeAmount . ':' . $exePercentage . ',';
            }
            //  $exemptions=array_merge($exp);
            //print_r($exemptions);
            $exemptions = ',';
            for ($i = 0; $i < count($exeCategoryIP); $i++) {
                $exemptions = $exemptions . $exp[$i];
            }

            $collectionType = $this->request->getVar('collectype');
            //collection type check
            if ($collectionType == 'halfYearly') {
                $fh = $this->request->getVar('firstHalf');
                $sh = $this->request->getVar('secondHalf');
                $firstHalfApplicableFrom = $this->request->getVar('firstHalfApplicableFrom');
                $firstHalfApplicableTill = $this->request->getVar('firstHalfApplicableTill');
                $secondHalfApplicableFrom = $this->request->getVar('secondHalfApplicableFrom');
                $seconHalfApplicableTill = $this->request->getVar('seconHalfApplicableTill');

                $remark = 'firstHalf:' . $fh . ',secondHalf:' . $sh;
                $applicableFrom = 'firsrHalf:' . $firstHalfApplicableFrom . ',secondHalf:' . $secondHalfApplicableFrom;
                $applicableTill = 'firsrHalf:' . $firstHalfApplicableTill . ',secondHalf:' . $seconHalfApplicableTill;
            } else if ($collectionType == 'monthly') {
                //collection remark concatination
                $jan = $this->request->getVar('jan');
                $feb = $this->request->getVar('feb');
                $mar = $this->request->getVar('mar');
                // $apr = $this->request->getVar('apr');
                // $may = $this->request->getVar('may');
                $jun = $this->request->getVar('jun');
                $jul = $this->request->getVar('jul');
                $aug = $this->request->getVar('aug');
                $sep = $this->request->getVar('sep');
                $oct = $this->request->getVar('oct');
                $nov = $this->request->getVar('nov');
                $dec = $this->request->getVar('dec');

                $remark = ',jun:' . $jun . ',jul:' . $jul . ',aug:' . $aug . ',sep:' . $sep . ',oct:' . $oct . ',nov:' . $nov . ',dec:' . $dec . ',jan:' . $jan . ',feb:' . $feb . ',mar:' . $mar;

                //  $remark = ',apr:' . $apr . ',may:' . $may . ',jun:' . $jun . ',jul:' . $jul . ',aug:' . $aug . ',sep:' . $sep . ',oct:' . $oct . ',nov:' . $nov . ',dec:' . $dec . ',jan:' . $jan . ',feb:' . $feb . ',mar:' . $mar;

                //applicable from and till concatination
                $aprApplicableFrom = $this->request->getVar('aprApplicableFrom');
                $aprApplicableTill = $this->request->getVar('aprApplicableTill');
                $mayApplicableFrom = $this->request->getVar('mayApplicableFrom');
                $mayApplicableTill = $this->request->getVar('mayApplicableTill');
                $junApplicableFrom = $this->request->getVar('junApplicableFrom');
                $junApplicableTill = $this->request->getVar('junApplicableTill');
                $julApplicableFrom = $this->request->getVar('julApplicableFrom');
                $julApplicableTill = $this->request->getVar('julApplicableTill');
                $augApplicableFrom = $this->request->getVar('augApplicableFrom');
                $augApplicableTill = $this->request->getVar('augApplicableTill');
                $sepApplicableFrom = $this->request->getVar('sepApplicableFrom');
                $sepApplicableTill = $this->request->getVar('sepApplicableTill');
                $octApplicableFrom = $this->request->getVar('octApplicableFrom');
                $octApplicableTill = $this->request->getVar('octApplicableTill');
                $novApplicableFrom = $this->request->getVar('novApplicableFrom');
                $novApplicableTill = $this->request->getVar('novApplicableTill');
                $decApplicableFrom = $this->request->getVar('decApplicableFrom');
                $decApplicableTill = $this->request->getVar('decApplicableTill');
                $janApplicableFrom = $this->request->getVar('janApplicableFrom');
                $janApplicableTill = $this->request->getVar('janApplicableTill');
                $febApplicableFrom = $this->request->getVar('febApplicableFrom');
                $febApplicableTill = $this->request->getVar('febApplicableTill');
                $marApplicableFrom = $this->request->getVar('marApplicableFrom');
                $marApplicableTill = $this->request->getVar('marApplicableTill');

                //  $applicableFrom = ',apr:' . $aprApplicableFrom . ',may:' . $mayApplicableFrom . ',jun:' . $junApplicableFrom . ',jul:' . $julApplicableFrom . ',aug:' . $augApplicableFrom . ',sep:' . $sepApplicableFrom . ',oct:' . $octApplicableFrom . ',nov:' . $novApplicableFrom . ',dec:' . $decApplicableFrom . ',jan:' . $janApplicableFrom . ',feb:' . $febApplicableFrom . ',mar:' . $marApplicableFrom;
                //  $applicableTill = ',apr:' . $aprApplicableTill . ',may:' . $mayApplicableTill . ',jun:' . $junApplicableTill . ',jul:' . $julApplicableTill . ',aug:' . $augApplicableTill . ',sep:' . $sepApplicableTill . ',oct:' . $octApplicableTill . ',nov:' . $novApplicableTill . ',dec:' . $decApplicableTill . ',jan:' . $janApplicableTill . ',feb:' . $febApplicableTill . ',mar:' . $marApplicableTill;
                $applicableFrom = ',jun:' . $junApplicableFrom . ',jul:' . $julApplicableFrom . ',aug:' . $augApplicableFrom . ',sep:' . $sepApplicableFrom . ',oct:' . $octApplicableFrom . ',nov:' . $novApplicableFrom . ',dec:' . $decApplicableFrom . ',jan:' . $janApplicableFrom . ',feb:' . $febApplicableFrom . ',mar:' . $marApplicableFrom;
                $applicableTill = ',jun:' . $junApplicableTill . ',jul:' . $julApplicableTill . ',aug:' . $augApplicableTill . ',sep:' . $sepApplicableTill . ',oct:' . $octApplicableTill . ',nov:' . $novApplicableTill . ',dec:' . $decApplicableTill . ',jan:' . $janApplicableTill . ',feb:' . $febApplicableTill . ',mar:' . $marApplicableTill;
            } else {
                $totalAmount = $this->request->getVar('totalAmount');
                $remark = 'yearly:' . $totalAmount;
                $yearApplicableFrom = $this->request->getVar('yearApplicableFrom');
                $yearApplicableTill = $this->request->getVar('yearApplicableTill');
                $applicableFrom = 'Yearly:' . $yearApplicableFrom;
                $applicableTill = 'Yearly:' . $yearApplicableTill;
            }

            $formInputData = [
                'yearOfAdmission' => $yearOfAsmission = $this->request->getVar('yearOfAsmission'),
                'fee_head' => $fee_head = $this->request->getVar('fee_head'),
                'programme' => $programme = $this->request->getVar('programme'),
                'accadamicYear' => $accadamicYearStart = $this->request->getVar('accadamicYearStart'),
                //'accadamicYearEnd' => $accadamicYearEnd = $this->request->getVar('accadamicYearEnd'),
                'collectionType' => $collectionType = $this->request->getVar('collectype'),
                'collectionRemark' => $remark,
                'totalAmount' => $totalAmount = $this->request->getVar('totalAmount'),
                'applicableFrom' => $applicableFrom,
                'applicableTill' => $applicableTill,
                'exemption' => $exemptions
            ];
            //   print_r($formInputData);
            $feeDetailsModelObj = new feeDetailsModel();
            $status = $feeDetailsModelObj->feeAdd($formInputData);
            if ($status == true) {
                return redirect()->to('feemancontroller/feedetailsview');
            }
            //  echo '<br>';
            //  print_r($formInputData);
        }
        //display code of fee heads in the form
        $feeDetailsmodelobj = new feeDetailsModel();
        $data['fee'] = $feeDetailsmodelobj->feeDataFetch();
        $feeHeadArray = [
            'feeHead' => $feeHead
        ];
        echo view('/layout/structure');
        echo view('feeAdd', $feeHeadArray);
    }
    public function editFee($id = null)
    {
        //function to edit the fee details in the fee master table
        $formUpdData = [];
        $data['items'] = $this->Modelobj->feeEditModel($id, null);
        // print_r($data);
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('collectype') == 'monthly') {
                //collection remark concatination
                $jan = $this->request->getVar('jan');
                $feb = $this->request->getVar('feb');
                $mar = $this->request->getVar('mar');
                // $apr = $this->request->getVar('apr');
                // $may = $this->request->getVar('may');
                $jun = $this->request->getVar('jun');
                $jul = $this->request->getVar('jul');
                $aug = $this->request->getVar('aug');
                $sep = $this->request->getVar('sep');
                $oct = $this->request->getVar('oct');
                $nov = $this->request->getVar('nov');
                $dec = $this->request->getVar('dec');

                $remark = ',jun:' . $jun . ',jul:' . $jul . ',aug:' . $aug . ',sep:' . $sep . ',oct:' . $oct . ',nov:' . $nov . ',dec:' . $dec . ',jan:' . $jan . ',feb:' . $feb . ',mar:' . $mar;

                //  $remark = ',apr:' . $apr . ',may:' . $may . ',jun:' . $jun . ',jul:' . $jul . ',aug:' . $aug . ',sep:' . $sep . ',oct:' . $oct . ',nov:' . $nov . ',dec:' . $dec . ',jan:' . $jan . ',feb:' . $feb . ',mar:' . $mar;

                //applicable from and till concatination
                $aprApplicableFrom = $this->request->getVar('aprApplicableFrom');
                $aprApplicableTill = $this->request->getVar('aprApplicableTill');
                $mayApplicableFrom = $this->request->getVar('mayApplicableFrom');
                $mayApplicableTill = $this->request->getVar('mayApplicableTill');
                $junApplicableFrom = $this->request->getVar('junApplicableFrom');
                $junApplicableTill = $this->request->getVar('junApplicableTill');
                $julApplicableFrom = $this->request->getVar('julApplicableFrom');
                $julApplicableTill = $this->request->getVar('julApplicableTill');
                $augApplicableFrom = $this->request->getVar('augApplicableFrom');
                $augApplicableTill = $this->request->getVar('augApplicableTill');
                $sepApplicableFrom = $this->request->getVar('sepApplicableFrom');
                $sepApplicableTill = $this->request->getVar('sepApplicableTill');
                $octApplicableFrom = $this->request->getVar('octApplicableFrom');
                $octApplicableTill = $this->request->getVar('octApplicableTill');
                $novApplicableFrom = $this->request->getVar('novApplicableFrom');
                $novApplicableTill = $this->request->getVar('novApplicableTill');
                $decApplicableFrom = $this->request->getVar('decApplicableFrom');
                $decApplicableTill = $this->request->getVar('decApplicableTill');
                $janApplicableFrom = $this->request->getVar('janApplicableFrom');
                $janApplicableTill = $this->request->getVar('janApplicableTill');
                $febApplicableFrom = $this->request->getVar('febApplicableFrom');
                $febApplicableTill = $this->request->getVar('febApplicableTill');
                $marApplicableFrom = $this->request->getVar('marApplicableFrom');
                $marApplicableTill = $this->request->getVar('marApplicableTill');

                //  $applicableFrom = ',apr:' . $aprApplicableFrom . ',may:' . $mayApplicableFrom . ',jun:' . $junApplicableFrom . ',jul:' . $julApplicableFrom . ',aug:' . $augApplicableFrom . ',sep:' . $sepApplicableFrom . ',oct:' . $octApplicableFrom . ',nov:' . $novApplicableFrom . ',dec:' . $decApplicableFrom . ',jan:' . $janApplicableFrom . ',feb:' . $febApplicableFrom . ',mar:' . $marApplicableFrom;
                //  $applicableTill = ',apr:' . $aprApplicableTill . ',may:' . $mayApplicableTill . ',jun:' . $junApplicableTill . ',jul:' . $julApplicableTill . ',aug:' . $augApplicableTill . ',sep:' . $sepApplicableTill . ',oct:' . $octApplicableTill . ',nov:' . $novApplicableTill . ',dec:' . $decApplicableTill . ',jan:' . $janApplicableTill . ',feb:' . $febApplicableTill . ',mar:' . $marApplicableTill;
                $applicableFrom = ',jun:' . $junApplicableFrom . ',jul:' . $julApplicableFrom . ',aug:' . $augApplicableFrom . ',sep:' . $sepApplicableFrom . ',oct:' . $octApplicableFrom . ',nov:' . $novApplicableFrom . ',dec:' . $decApplicableFrom . ',jan:' . $janApplicableFrom . ',feb:' . $febApplicableFrom . ',mar:' . $marApplicableFrom;
                $applicableTill = ',jun:' . $junApplicableTill . ',jul:' . $julApplicableTill . ',aug:' . $augApplicableTill . ',sep:' . $sepApplicableTill . ',oct:' . $octApplicableTill . ',nov:' . $novApplicableTill . ',dec:' . $decApplicableTill . ',jan:' . $janApplicableTill . ',feb:' . $febApplicableTill . ',mar:' . $marApplicableTill;
                $formUpdData = [
                    'yearOfAdmission' => $yearOfAsmission = $this->request->getVar('yearOfAsmission'),
                    'fee_head' => $fee_head = $this->request->getVar('fee_head'),
                    'programme' => $programme = $this->request->getVar('programme'),
                    'accadamicYear' => $accadamicYearStart = $this->request->getVar('newAccadamicYear'),
                    'collectionType' => $collectionType = $this->request->getVar('collectype'),
                    'collectionRemark' => $remark,
                    'totalAmount' => $totalAmount = $this->request->getVar('totalAmount'),
                    'applicableFrom' => $applicableFrom,
                    'applicableTill' => $applicableTill,
                ];
                $res = $this->Modelobj->feeEditModel($id, $formUpdData);
                if (!empty($res)) {
                    // redirect()->to(base_url());
                    // $response='Success fully updated the fee';
                    return redirect()->to('feemancontroller/feedetailsview');
                } else {
                    echo 'somthing went wrong';
                }

            } else if ($this->request->getPost('collectype') == 'halfYearly') {

                $fh = $this->request->getVar('firstHalf');
                $sh = $this->request->getVar('secondHalf');
                $firstHalfApplicableFrom = $this->request->getVar('firstHalfApplicableFrom');
                $firstHalfApplicableTill = $this->request->getVar('firstHalfApplicableTill');
                $secondHalfApplicableFrom = $this->request->getVar('secondHalfApplicableFrom');
                $seconHalfApplicableTill = $this->request->getVar('seconHalfApplicableTill');

                $remark = 'firstHalf:' . $fh . ',secondHalf:' . $sh;
                $applicableFrom = 'firsrHalf:' . $firstHalfApplicableFrom . ',secondHalf:' . $secondHalfApplicableFrom;
                $applicableTill = 'firsrHalf:' . $firstHalfApplicableTill . ',secondHalf:' . $seconHalfApplicableTill;

                $formUpdData = [
                    'yearOfAdmission' => $yearOfAsmission = $this->request->getVar('yearOfAsmission'),
                    'fee_head' => $fee_head = $this->request->getVar('fee_head'),
                    'programme' => $programme = $this->request->getVar('programme'),
                    'accadamicYear' => $accadamicYearStart = $this->request->getVar('newAccadamicYear'),
                    'collectionType' => $collectionType = $this->request->getVar('collectype'),
                    'collectionRemark' => $remark,
                    'totalAmount' => $totalAmount = $this->request->getVar('totalAmount'),
                    'applicableFrom' => $applicableFrom,
                    'applicableTill' => $applicableTill,
                ];
                $res = $this->Modelobj->feeEditModel($id, $formUpdData);
                if (!empty($res)) {
                    // redirect()->to(base_url());
                    // $response='Success fully updated the fee';
                    return redirect()->to('feemancontroller/feedetailsview');
                } else {
                    echo 'somthing went wrong';
                }

            } else {
                $totalAmount = $this->request->getVar('totalAmount');
                $applicableFrom = $this->request->getVar('yearApplicableFrom');
                $applicableTill = $this->request->getVar('yearApplicableTill');
                $remark = 'yeraly:' . $totalAmount;
                $applicableFrom = 'Yearly:' . $applicableFrom;
                $applicableTill = 'Yearly:' . $applicableTill;
                $formUpdData = [
                    'yearOfAdmission' => $yearOfAsmission = $this->request->getVar('yearOfAsmission'),
                    'fee_head' => $fee_head = $this->request->getVar('fee_head'),
                    'programme' => $programme = $this->request->getVar('programme'),
                    'accadamicYear' => $accadamicYearStart = $this->request->getVar('newAccadamicYear'),
                    'collectionType' => $collectionType = $this->request->getVar('collectype'),
                    'collectionRemark' => $remark,
                    'totalAmount' => $totalAmount = $this->request->getVar('totalAmount'),
                    'applicableFrom' => $applicableFrom,
                    'applicableTill' => $applicableTill,
                ];
                $res = $this->Modelobj->feeEditModel($id, $formUpdData);
                if (!empty($res)) {
                    // redirect()->to(base_url());
                    // $response='Success fully updated the fee';
                    return redirect()->to('feemancontroller/feedetailsview');
                } else {
                    echo 'somthing went wrong';
                }
            }


            //  $res = $this->Modelobj->feeEditModel($id, $formUpdData);
            //  if (!empty($res)) {
            //      // redirect()->to(base_url());
            //      // $response='Success fully updated the fee';
            //      return redirect()->to('feemancontroller/feedetailsview');
            //  } else {
            //      echo 'somthing went wrong';
            //  }
        }
        // $temp[]=$this->$data->items['collectionRemark'];
        //   echo '<pre>';
        //   print_r($data);
        //   foreach ($data as $item) {
        //   }
        //   print_r($data->$item['exemption']);
        echo view('\layout\structure');
        echo view('editFee', $data);

    }
    public function studentFeeAdd()
    {
        //save data to the std_fee_reg table
        //function to fetch students and provide support for allocate fee
        $feeDetailsModelobj = new feeDetailsModel();

        if ($this->request->getMethod() == 'post') {
            //filter data
            $program = $this->request->getVar('studentProgram');
            $yearofadm = $this->request->getVar('yearOfAdmission');
            $accadamicYear = $this->request->getVar('accadamicYear');
            $admno = $this->request->getVar('admissionNo');
            if (isset($program)) {
                $stdData['data'] = $feeDetailsModelobj->studentFilter($program, $yearofadm, $accadamicYear);
                echo view('/layout/structure');
                echo view('ZstudentFeeAdd', $stdData);
            } elseif (isset($admno)) {
                //data for save the student fee data
                $feeHead = $this->request->getVar('feeHead');
                $feeAmout = $this->request->getVar('collectionAmount');
                $applicableTill = $this->request->getVar('dueDate');
                $studentUniqeID = $this->request->getVar('studentUniqeID');
                $accadamicYearData = $this->request->getVar('studentAccadamicYear');
                $collectionRemark = $this->request->getVar('collectionRemark');

                //check the student with the fee exist or not
                // for ($j = 0; $j < count($admno); $j++) { this model is not working well 
                //     for ($i = 0; $i < count($feeHead); $i++) {
                //         $feeDetailsModelobj->studetnFeeAlloCrossCheck($admno[$j], $feeHead[$i], $accadamicYearData);
                //     }
                // }
                // echo '<pre>';
                // print_r($feeHead);
                // print_r($feeHead);
                // print_r($feeAmout);
                // print_r($applicableTill);
                // print_r($studentUniqeID);
                //  print_r($collectionRemark);
                // echo '<hr>';

                $studentFeeData = array();

                for ($i = 0; $i < count($admno); $i++) {

                    for ($j = 0; $j < count($feeHead); $j++) {


                        for ($k = 0; $k < count($applicableTill); $k++) {

                            // if ($collectionRemark[$k] == 'Y') {
                            //     $collectionType = "Yearly";
                            // } else if (($collectionRemark[$j] == 'firstHalf') || ($collectionRemark[$j] == 'secondHalf')) {
                            //     $collectionType = "HalfYearly";
                            // } else {
                            //     $collectionType = "Monthly";
                            // }
                            $studentFeeData[] = [
                                'admissionNo' => $admno[$i],
                                'fee_head' => $feeHead[$j],
                                'collectionRemark' => $collectionRemark[$k],
                                'dueDate' => $applicableTill[$k],
                                'Amount' => $feeAmout[$k],
                                'feeAllocationYear' => $accadamicYearData,
                            ];
                            $collectionType = "";
                        }
                    }
                }

                // Remove duplicates based on admissionNo and fee_head
                $uniqueStudentFeeData = [];
                foreach ($studentFeeData as $data) {
                    // Check this condition with all boundary values
                    if ($data['collectionRemark'] == 'Yearly') {
                        $key = $data['Amount'] . $data['collectionRemark'];
                        $key1 = $data['dueDate'] . $data['fee_head'];
                        if (!isset($uniqueStudentFeeData[$key]) || !isset($uniqueStudentFeeData[$key1])) {
                            $uniqueStudentFeeData[$key] = $data;
                        }
                    } else {
                        $key2 = $data['admissionNo'] . $data['dueDate'];
                        if (!isset($uniqueStudentFeeData[$key2])) {
                            $uniqueStudentFeeData[$key2] = $data;
                        }
                    }
                }

                $uniqueStudentFeeData = array_values($uniqueStudentFeeData);

                // echo "<pre>";
                // print_r($uniqueStudentFeeData);
                $status = $feeDetailsModelobj->studentFeeRegistration($uniqueStudentFeeData);
                if ($status == true) {
                    return redirect()->To('/feemancontroller/studentFeeView');
                }
                //call a model to save the data 
            } else {
                echo 'admission number is not selected add validation to pop a message to select an admission number';
            }
        } else {
            $acdData['year'] = $feeDetailsModelobj->accadamicYearFetch();
            echo view('/layout/structure');
            echo view('ZstudentFeeAdd', $acdData);
            // print_r($acdData);
        }

    }

    public function studentFeeView()
    {
        //display students and their fee details
        $feeDetailsModelobj = new feeDetailsModel();
        //changed the model function to studentFeeDetailsFetch form studentfeepay
        $data['stdinfo'] = $feeDetailsModelobj->studentFeeDetailsFetch();
        return view('studentFeeView', $data);
    }
    public function feeDetailsView()
    {
        //controller for display fee details
        $FeeDetailsModelobj = new feeDetailsModel();
        $data['fees'] = $FeeDetailsModelobj->feedetailsdb();
        echo view('/layout/structure');
        echo view('feeDetailsView', $data);

    }

    public function zfeeAdd()
    {
        echo view('/layout/structure');
        echo view('zfeeAdd');
    }
    public function stdFeeBill($admno = null)
    {
        //geting the admno from the studentfeeView and used for pay(create bill) fees of the admno
        $feeDetailsModelobj = new feeDetailsModel();
        $data['fees'] = $feeDetailsModelobj->feeDataBill($admno);
        //echo view('/layout/structure');
        echo view('stdFeeBill', $data);
        // if($this->request->getMethod()==='post'){
        //     echo "done";
        // }
    }
    public function feeAllocation($admno, $yearOfAdm, $programme)
    {
        //function to allocate fee for students studentfee alocation
        $feeDetailsModelobj = new feeDetailsModel();
        if (isset($admno)) {
            $RData['Data'] = $feeDetailsModelobj->feeAllocationStdFetch($admno, $yearOfAdm, $programme);

            echo view('layout/structure');
            echo view('studentFeeAlocation', $RData);
            if ($this->request->getMethod() == 'post') {
                echo "please wait we didnt write the code yet";
            }
            // echo '<pre>';
            // print_r($RData);
            //use the arrsy_mearg or array_combine function incase ypu want to pass two array to a view

        }

    }
    public function studenntFeeDueFilter()
    {
        //student fee filter 
        if ($this->request->getMethod() == 'post') {
            $yearOfAdmission = $this->request->getVar('yearOfAdmission');
            $accadamicYear = $this->request->getVar('accadamicYear');
            $program = $this->request->getVar('programFilterData');
            $status = $this->request->getVar('statusFilterData');
            if ($status == '0') {
                $status = true;
            } else {
                $status = null;
            }
            $stdFeeOpsModelObj = new feeDetailsModel();
            $resultData['stdinfo'] = $stdFeeOpsModelObj->findData($yearOfAdmission, $accadamicYear, $program, $status);
            if (!empty($resultData)) {
                echo view('studentFeeView', $resultData);
            }
        }
    }

    //  public function test(){
    //      echo 'Test';
    //     $Status= $this->Modelobj->test();
    //     if(isset($Status)){
    //      echo 'Done';
    //     }
    //     else{
    //      echo 'no';
    //     }
    //     // $res=$this->Modelobj->feeEditModel();
    //  }
    public function test()
    {
        // echo view("layout/structure");
        echo view("test");
    }
}
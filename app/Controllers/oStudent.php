<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\Regform_model;
use App\Models\dashboard_model;
use view;

class oStudent extends Controller
{
   public $dmodel;
   public $Regform_model;

    public function __construct()
    {
  
        
       $this->Regform_model = new Regform_model();
        $this->dmodel = new dashboard_model();
    
    }
   public function in()
   {

   if(!session()->has("logged_user")){
    return redirect()->to(base_url()."login");
   }
        $id = session()->get('logged_user');

       $data['userdata'] = $this->dmodel->getLoggedUserData($id);


       
       
      
       return view('student_view',$data);
   }

   public function index(){

    $id = session()->get('logged_user');

    $data['userdata'] = $this->dmodel->getLoggedUserData($id);

    return view('home',$data);
   }

//    public function student()
//    {

//        return view('student_view');
//    }

   public function editprof()
   {
    
   if(!session()->has("logged_user")){
    return redirect()->to(base_url()."login");
   }

    $id = session()->get('logged_user');

    $data['userdata'] = $this->dmodel->getLoggedUserData($id);

    if ($this->request->getMethod() == 'post') {

      $password = $this->request->getVar('password');
   $newdata = [

        'username' => $this->request->getVar('username', FILTER_SANITIZE_STRING),
        
        'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        if($this->dmodel->upadateprof($newdata,$id))
        {
            echo "<script>alert('eidted items updated');</script>";
        }else{
            echo "<script>alert('a problem occured');</script>";
       }
  
     }

    
       return view('editprof_view',$data);
   }



   public function exams()
   {

       return view('editprof_view');
   }


   public function dataview()
   {
    
   if(!session()->has("logged_user")){
    
     session()->remove('logged_user');
    return redirect()->to(base_url()."login");
   }
       $id = session()->get('logged_user');
       
      
     
       if ($this->dmodel->getLoggedUserData2($id)) {
        $data['userdata'] = $this->dmodel->getLoggedUserData2($id);
    } else {
        echo "<script>alert('your accademic data is not found'); window.location.href = '" . base_url() . "ostudent';</script>";
        exit; // Ensure that the script stops execution after the redirect
    }


    $user =  $data['userdata'];
$checkapproved = $user->approval;

if ($checkapproved != 'approved') {
    echo "<script>alert('Your academic data is not approved by the office'); window.location.href = '" . base_url() . "ostudent';</script>";
    exit;
}


    $idofparent = $user->parent_phn;
    $data['userdata1'] = $this->dmodel->getLoggedUserData($id);
    $data['userdata2'] = $this->dmodel->getLoggedUserfam($idofparent);
   
     // Combine arrays to handle overlapping keys
$mergedData = (array)$data['userdata'] + (array)$data['userdata1'] + (array)$data['userdata2'];
// Convert array back to object if needed

   
       // Pass the merged data to the view
       $data['userdata'] = (object)$mergedData; // Convert array back to object if needed
   //print_r($data);
//   echo $idofparent;
   
 return view('stddata_view', $data);
   }
   
   


   public function register()
   {

    
    if(!session()->has("logged_user")){
    
        session()->remove('logged_user');
       return redirect()->to(base_url()."login");
      }
          $id = session()->get('logged_user');
          
        $check1['user'] = $this->dmodel->getLoggedUserData($id);
        $des = $check1['user'];
        $dess = $des->designation;
         if($dess == "student" || $dess == "parent")
         {
        //checking the student is registerd allready
          if ($this->dmodel->getLoggedUserData2($id)) {
            echo "<script>alert('you are already registerd'); window.location.href = '" . base_url() . "ostudent';</script>";
            exit; 
          
       } 
    }



      $data = [];
      $data['validation'] = null;

       if ($this->request->getMethod() == 'post') {

           $rules = [
               'email' => 'required|valid_email',
               'adno' => 'is_unique[student.admission_no]',
   
           ];

           if ($this->validate($rules)) {



               $hs_name = $this->request->getVar('hsnm');
               $hs_mark = $this->request->getVar('hsmrk');
               $hs_percentage = $this->request->getVar('hsperce');
               $hs_sylabus = $this->request->getVar('hssyl');
               $hs_passout = $this->request->getVar('hsyr');

               $hss_name = $this->request->getVar('hssnm');
               $hss_mark = $this->request->getVar('hssmrk');
               $hss_percentage = $this->request->getVar('hssperce');
               $hss_sylabus = $this->request->getVar('hsssyl');
               $hss_passout = $this->request->getVar('hssyr');

               $act1 = $this->request->getVar('act1');
               $act2 = $this->request->getVar('act2');
               $act3 = $this->request->getVar('act3');
               $act4 = $this->request->getVar('act4');

               $hs = "hs_name:" . $hs_name . ",hs_mark:" . $hs_mark . ",hs_percentage:" . $hs_percentage . ",hs_sylabus:" . $hs_sylabus . ",hs_passout:" . $hs_passout;
               $hss = "hss_name:" . $hss_name . ",hss_mark:" . $hss_mark . ",hss_percentage:" . $hss_percentage . ",hss_sylabus:" . $hss_sylabus . ",hss_passout:" . $hss_passout;
               $caricular_activity = "act1:" . $act1 . ",act2:" . $act2 . ",act3:" . $act3 . ",act4:" . $act4;

               $student_data = [

                   'student_name' => $this->request->getVar('sname'),
                   'admission_no' => $this->request->getVar('adno'),
                   'register_no' => $this->request->getVar('regno'),
                   'gender' => $this->request->getVar('gender'),
                   'dob' => $this->request->getVar('dob'),
                   'yearOfAdmission' => $this->request->getVar('yearofad'),
                   'program' => $this->request->getVar('program'),
                   'adress' => $this->request->getVar('adress'),
                   'nation' => $this->request->getVar('nation'),
                   'state1' => $this->request->getVar('state'),
                   'district' => $this->request->getVar('district'),
                   'pincode' => $this->request->getVar('pincode'),
                   'adhaar' => $this->request->getVar('adhar'),
                   'cast' => $this->request->getVar('cast'),
                   'religion' => $this->request->getVar('reli'),
                   'income' => $this->request->getVar('anincome'),
                   'guardian' => $this->request->getVar('guard'),
                   'guardian_rel' => $this->request->getVar('guardrel'),
                   'guardian_con' => $this->request->getVar('guardcon'),
                   'email1' => $this->request->getVar('email'),
                   'phno' => $this->request->getVar('phone'),
                   'blood' => $this->request->getVar('blood'),


                   'hs' => $hs,
                   'hss' => $hss,

                   'co_caricular' => $caricular_activity,

                   'distance_to_clg' => $this->request->getVar('clgtoresdis'),
                   'parent_phn' => $this->request->getVar('pcontact'),
               ];



               $parent_data = [
                   
                   'student_father' => $this->request->getVar('sfather'),
                   'student_mother' => $this->request->getVar('smother'),
                   'parent_adres' => $this->request->getVar('padres'),
                   'father_state' => $this->request->getVar('fstate'),
                   'mother_state' => $this->request->getVar('mstate'),
                   'parent_phn' => $this->request->getVar('pcontact'),



               ];


               $check = $this->request->getVar('sfather');

               if(isset($check) && !empty($check))
               {
               if ($this->Regform_model->createUserFam($student_data, $parent_data)) {
                   // echo "data inserted";
                   echo "<script>alert('student added');</script>";

               } else {
                   echo "ERROR";
               }
           }else{
               if ($this->Regform_model->createUser($student_data)) {
                   // echo "data inserted";
                   echo "<script>alert('student added');</script>";
                   //return redirect()->To('/feemancontroller/studentFeeView');

               } else {
                   echo "ERROR";
               }
           }

           }else{
               $data['validation'] = $this->validator;
           }
       }
       return view('Regform_view',$data);
   }


   public function Tc() {
    $phn = null;
    $ad = $this->request->getPost('admission_number');
    // $stddata = $this->dmodel->getTcDataSts($ad);

    // if ($stddata->resultID->num_rows > 0) {
    //     $phn = $stddata->getFirstRow()->parent_phn;
    // }

   
    // $pardata = $this->dmodel->getTcDataPar($phn);
   
    $data['stddata'] = $this->dmodel->getTcDataSts($ad);
    //  $data = [
    //      'stddata' => $stddata->getResult(),
    //      'pardata' => $pardata->getResult(),
    //  ];
     // Load the view and pass the data
     return view('TC_view', $data);
}



   
}






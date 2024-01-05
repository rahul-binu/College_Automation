<?php

namespace App\Controllers;

use App\Models\stdview_model;
use App\Models\usrreg_model;
use CodeIgniter\Controller;
use App\Models\dashboard_model;
use view;

class oStaff extends Controller
{
    public $email;
    public $registermodel;
    public $studentview;
    public $session;
    public $dmodel;
    public function __construct()
    {
        helper('form');
        helper('date');

        $this->studentview = new stdview_model();
        $this->registermodel = new usrreg_model();
        $this->dmodel = new dashboard_model();
        $this->session = \Config\Services::session();
        $this->email = \config\Services::email();
    }


    public function index()
    {
        if (!session()->has("logged_user")) {

          return redirect()->to(base_url() . "login");
        }
        $des = session()->get('who');
        if($des!='admin' && $des!='staff'){
            return redirect()->to(base_url() . "login");
            
        }

        $stdview_model = new stdview_model();
        $data['std'] = $stdview_model->stdmodel2();
        return view("stdview_view", $data);
    }

    public function register()
    {

        if (!session()->has("logged_user")) {


            return redirect()->to(base_url() . "login");
        }
        $des = session()->get('who');
        if($des!='admin' && $des!='staff'){
            return redirect()->to(base_url() . "login");
            
        }

        $data = [];
        $data['validation'] = null;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[4]',
                'email' => 'required|valid_email|is_unique[users.email]',
                // 'password' => 'required|min_length[6]|max_length[16]',
                // 'conpass' => 'required|matches[password]',
            ];
            if ($this->validate($rules)) {
                $length = 8;
                $characters = 'abcdefghijklmnopqrstuvwxyz';

                $password = substr(md5(str_shuffle($characters . time())), 0, $length);

                $userdata = [

                    'username' => $this->request->getVar('username', FILTER_SANITIZE_STRING),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'designation' => $this->request->getVar('designation'),
                    // 'uniid' => $uniid,
                    'activation' => date("y-m-d h:i:s"),

                ];

                $email = $this->request->getVar('email');
                $desig = $this->request->getVar('designation');




                if ($this->registermodel->Createuser($userdata)) {

                    $to = $this->request->getVar('email');
                    $subject = 'Account activation link - NSS college';
                    $message = 'Hi ' . $this->request->getVar('username', FILTER_SANITIZE_STRING) . "<br><br>your account created at NSS college "
                        . " succesfully.  email is your username and password is given below <br><br> you can chenge your password after login <br><br> Password : " . $password . "<br><br>Thank You<br>NSS college";

                    $this->email->setTO($to);
                    $this->email->setFrom('ajanpj32@gmail.com', 'info');
                    $this->email->setSubject($subject);
                    $this->email->setMessage($message);
                    if ($this->email->send()) {

                        $this->session->setTempdata('success', 'Account created succesfully', 3);
                        return redirect()->to(current_url());
                    } else {
                        $this->session->setTempdata('error', 'Account created succesfully. sorry! unable to send an email , contact admin', 3);
                        return redirect()->to(current_url());
                        //    $data = $this->email->printDebugger(['header']);
                        //    print_r($data);

                    }

                } else {

                    $this->session->setTempdata('error', 'sorry unable to create an account', 3);
                    return redirect()->to(current_url());
                }







            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('usrreg_view', $data);
    }




    public function update($admno)
    {
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin' && $des!='staff'){
              return redirect()->to(base_url() . "login");
              
          }
    
        $stdview_model = new stdview_model();
        $data['std'] = $stdview_model->stdupdatemodel($admno);

        if ($this->request->getMethod() == 'post') {
            // ... (your existing code for handling form submission)
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

            $id = $this->request->getVar('adno');

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


            // Corrected line
            if ($stdview_model->updateUser($student_data, $id)) {
                echo "<script>alert('student data is updated'); window.location.href = '" . base_url() . "ostaff';</script>";
                exit;

       
        }
    }else{
        echo "cant find admission number";
    }
        return view("stdupdate_view", $data);
    }

    public function Stview()
    {

        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin' && $des!='staff'){
              return redirect()->to(base_url() . "login");
              
          }
        return view("Stview_view");

    }

    public function approve()
    {
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin' && $des!='staff'){
              return redirect()->to(base_url() . "login");
              
          }
        $data['std'] = $this->studentview->listUnapprovedStd();
        if ($this->request->getMethod() == 'post') {

            $appr = $this->request->getVar('check');
            if (!empty($appr)) {


                $msg = $this->studentview->updateApproval($appr);
                if ($msg) {
                    echo "<script>alert('selected students are approved');</script>";
                } else {


                }
            } else {
                echo "<script>alert('an Error occured');</script>";
            }
        }
        return view("apprstd_view", $data);
    }


    public function delNonApprovedData($id)
    {

        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin' && $des!='staff'){
              return redirect()->to(base_url() . "login");
              
          }
        $data = $this->studentview->delete1($id);

        if ($data) {

            echo "<script>alert('data is deleted');</script>";
            redirect()->to('ostaff/approve');

        } else {
            echo "<script>alert('an Error occured');</script>";
        }

    }


    public function adminpanel()
    {
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin'){
              return redirect()->to(base_url() . "login");
              
          }
        return view("adminpanel_view");
    }



    public function addstaff()
    {
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin'){
              return redirect()->to(base_url() . "login");
              
          }

        if (!session()->has("logged_user")) {


            return redirect()->to(base_url() . "login");
        }

        $data = [];
        $data['validation'] = null;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[4]',
                'email' => 'required|valid_email|is_unique[users.email]',
                // 'password' => 'required|min_length[6]|max_length[16]',
                // 'conpass' => 'required|matches[password]',
            ];
            if ($this->validate($rules)) {
                $length = 8;
                $characters = 'abcdefghijklmnopqrstuvwxyz';
                $des = "staff";
                $password = substr(md5(str_shuffle($characters . time())), 0, $length);

                $userdata = [

                    'username' => $this->request->getVar('username', FILTER_SANITIZE_STRING),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'designation' => $des,
                    // 'uniid' => $uniid,
                    'activation' => date("y-m-d h:i:s"),

                ];

                $email = $this->request->getVar('email');
                $desig = $this->request->getVar('designation');




                if ($this->registermodel->Createuser($userdata)) {

                    $to = $this->request->getVar('email');
                    $subject = 'Account activation link - NSS college';
                    $message = 'Hi ' . $this->request->getVar('username', FILTER_SANITIZE_STRING) . "<br><br>your account created at NSS college "
                        . " succesfully.  email is your username and password is given below <br><br> you can chenge your password after login <br><br> Password : " . $password . "<br><br>Thank You<br>NSS college";

                    $this->email->setTO($to);
                    $this->email->setFrom('ajanpj32@gmail.com', 'info');
                    $this->email->setSubject($subject);
                    $this->email->setMessage($message);
                    if ($this->email->send()) {

                        $this->session->setTempdata('success', 'Account created succesfully', 3);
                        return redirect()->to(current_url());
                    } else {
                        $this->session->setTempdata('error', 'Account created succesfully. sorry! unable to send an email , contact admin', 3);
                        return redirect()->to(current_url());
                        //    $data = $this->email->printDebugger(['header']);
                        //    print_r($data);

                    }

                } else {

                    $this->session->setTempdata('error', 'sorry unable to create an account', 3);
                    return redirect()->to(current_url());
                }







            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('addstaff_view', $data);
    }


    public function updateparent($phn)
    {
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin' && $des!='staff'){
              return redirect()->to(base_url() . "login");
              
          }
        $data['parent'] = $this->dmodel->getParentdata($phn);


        if ($this->request->getMethod() == 'post') {


            $phn1 = $this->request->getVar('phone');

            $parent_data = [

                'student_father' => $this->request->getVar('father'),
                'student_mother' => $this->request->getVar('mother'),
                'parent_phn' => $this->request->getVar('phone'),
                'parent_adres' => $this->request->getVar('adress'),
                'father_state' => $this->request->getVar('fstate'),
                'mother_state' => $this->request->getVar('mstate'),




            ];
            $tostd_data = [


                'parent_phn' => $this->request->getVar('phone'),


            ];


            // checks the parent phone number is changed 
            if ($phn1 == $phn) {


                if ($this->dmodel->updateParent($parent_data, $phn)) {
                    echo "<script>alert('parent data is updated'); window.location.href = '" . base_url() . "ostaff';</script>";
                    exit;

                } else {
                    echo "<script>alert('an error occured')</script>";
                }
            } else {

                if ($this->dmodel->updateParent($parent_data, $phn)) {

                    if ($this->dmodel->updateParentandStudent($tostd_data, $phn)) {
                        echo "<script>alert('parent data is updated also change affected in student'); window.location.href = '" . base_url() . "ostaff';</script>";

                        exit;

                    } else {
                        echo "<script>alert('an error occured')</script>";
                    }
                } else {

                    echo "<script>alert('an error occured in student data updation')</script>";
                }
            }
        }


        return view('updateParentView', $data);

    }


    public function addparent()
    {
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin' && $des!='staff'){
              return redirect()->to(base_url() . "login");
              
          }

        if ($this->request->getMethod() == 'post') {




            $parent_data = [

                'student_father' => $this->request->getVar('father'),
                'student_mother' => $this->request->getVar('mother'),
                'parent_phn' => $this->request->getVar('phone'),
                'parent_adres' => $this->request->getVar('adress'),
                'father_state' => $this->request->getVar('fstate'),
                'mother_state' => $this->request->getVar('mstate'),


            ];



            if ($this->registermodel->Addparent($parent_data)) {
                echo "<script>alert('parent data is added'); window.location.href = '" . base_url() . "ostaff';</script>";
                exit;

            } else {
                echo "<script>alert('an error occured')</script>";
            }



        }
        return view('AddParent_view');

    }

    public function usersview()
    {
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin'){
              return redirect()->to(base_url() . "login");
              
          }

        $data['user'] = $this->registermodel->GetUsers();
        return view('usersview_view', $data);
    }

    public function delUser($email)
    {
        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $des = session()->get('who');
          if($des!='admin'){
              return redirect()->to(base_url() . "login");
              
          }
        if ($this->studentview->deleteUser($email)) {
          
            echo "<script>alert('selected user has been deleted'); window.location.href = '" . base_url() . "ostaff/usersview';</script>";
            exit;
        } else {
            echo "<script>alert('an error occured')</script>";
        }
    }

    public function staffprofile(){ 

        if (!session()->has("logged_user")) {

            return redirect()->to(base_url() . "login");
          }
          $id = session()->get('logged_user');

          $data['userdata'] = $this->dmodel->getLoggedUserData($id);

        return view('staffprof',$data);

    }
    public function staffeditprof()
    {

        if (!session()->has("logged_user")) {
            return redirect()->to(base_url() . "login");
        }

        $id = session()->get('logged_user');

        $data['userdata'] = $this->dmodel->getLoggedUserData($id);

        if ($this->request->getMethod() == 'post') {

            $password = $this->request->getVar('password');
            $newdata = [

                'username' => $this->request->getVar('username', FILTER_SANITIZE_STRING),

                'password' => password_hash($password, PASSWORD_DEFAULT),
            ];

            if ($this->dmodel->upadateprof($newdata, $id)) {
                echo "<script>alert('edited items are updated'); window.location.href = '" . base_url() . "ostaff/staffprofile';</script>";
                exit;

            } else {
                echo "<script>alert('a problem occured');</script>";
            }

        }


        return view('editprofstaff_view', $data);
    }
}



















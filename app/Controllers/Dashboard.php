<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\dashboard_model;
use view;

class Dashboard extends Controller
{
   public $dmodel;

    public function __construct()
    {
  
        $this->dmodel = new dashboard_model();
    
    }
   public function index()
   {

   if(!session()->has("logged_user")){
    return redirect()->to(base_url()."/cc");
   }
        $id = session()->get('logged_user');

       $data['userdata'] = $this->dmodel->getLoggedUserData($id);
      
       return view('student_view',$data);
   }

//    public function student()
//    {

//        return view('student_view');
//    }

   public function editprof()
   {

    $id = session()->get('logged_user');

       $data['userdata'] = $this->dmodel->getLoggedUserData($id);

       
       return view('editprof_view',$data);
   }
   public function exams()
   {

       return view('editprof_view');
   }
   public function data()
   {

       return view('editprof_view');
   }
}

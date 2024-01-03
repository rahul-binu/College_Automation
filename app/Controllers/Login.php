<?php

namespace App\Controllers;

use App\Models\usrreg_model;
use CodeIgniter\Controller;
use view;

class Login extends Controller
{

    public $email;
    public $registermodel;
    public $session;
    public function __construct()
    {
        helper('form');
        helper('date');
        $this->registermodel = new usrreg_model();
        $this->session = \Config\Services::session();
        $this->email = \config\Services::email();
    }

public function index()
    {
        $data = [];
        $data['validation'] = null;
    
        if ($this->request->getMethod() == 'post') {
            $rules = [
                
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]|max_length[8]',

            ];

            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $deig = $this->request->getVar('designation');

                $userdata = $this->registermodel->verifyEmail($email);
                if($userdata)
                {

                  if(password_verify($password, $userdata['password']))
                  {

                   
                        if($userdata['designation']==$deig){

                            if($deig=="student"){
                                
                                $this->session->set('logged_user',$userdata['email']);
                                $this->session->set('who',$userdata['designation']);
                                return redirect()->to(base_url().'oStudent/');

                            }else if($deig=="parent"){

                                $this->session->set('logged_user',$userdata['email']);
                                $this->session->set('who',$userdata['designation']);
                                return redirect()->to(base_url().'dashboard/parent');

                            }else if($deig=="staff"){

                                $this->session->set('logged_user',$userdata['email']);
                                $this->session->set('who',$userdata['designation']);
                                return redirect()->to(base_url().'ostaff');

                            }else if($deig=="admin"){

                                $this->session->set('logged_user',$userdata['email']);
                                $this->session->set('who',$userdata['designation']);
                                return redirect()->to(base_url().'ostaff');

                            }
                        }
                        else{

                            $this->session->setTempdata('error', 'Sorry! selected designation is not matching',3);
 
                        }

                       
                  

                  }else{
                    $this->session->setTempdata('error', 'Sorry! Password enterd is wrong',3);

                  }
                }else{
                    
                    $this->session->setTempdata('error', 'Sorry! Enterd wrong email adress',3);
                }

                
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('login', $data);
    }
}
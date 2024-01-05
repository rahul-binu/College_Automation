<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class usersController extends Controller
{

    public function __construct()
    {
        helper(['form']);
    }
    public function login()
    {
        echo view('layout/structure');
        echo view('login');
    }

    public function registration()
    {

        if ($this->request->getMethod() == 'POST') {

        }
        echo view('layout/structure');
        echo view('registration');
    }
}
?>
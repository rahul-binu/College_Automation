<?php

namespace App\Models;
use CodeIgniter\Model;


class Usersmodel extends Model{

    public function getData()
    {

    $subjects = [
        ['subject'=>'html', 'php' => 'hyper text markup language'],
        ['subject'=>'css', 'php' => 'hyper text markup language'],
        ['subject'=>'java', 'php' => 'hyper text markup language'],
        ['subject'=>'', 'php' => 'hyper text markup language'],
        ['subject'=>'html', 'php' => 'hyper text markup language'],
                ];
                return $subjects;
            }
}
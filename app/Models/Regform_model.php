<?php

namespace App\Models;

use \CodeIgniter\Model;


class Regform_model extends Model
{


    public function createUserFam($data1, $data2)
    {
        $db = \Config\Database::connect();

        $builder1 = $this->db->table('student');
        $builder2 = $this->db->table('parent');
        $res1 = $builder1->insert($data1);
        $res2 = $builder2->insert($data2);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }

    }

    public function createUser($data1)
    {
        $db = \Config\Database::connect();

        $builder1 = $this->db->table('student');

        $res1 = $builder1->insert($data1);

        if($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }

    }

    // public function Addparent($data)
    // {
    //     $db = \Config\Database::connect();

    //     $builder1 = $this->$db->table('parent_data');

    //     $builder1->set($data);
    //      $builder1->insert($data);

    //     if ($this->db->affectedRows() == 1) {
    //         return true;
    //     } else {
    //         return false;
    //     }  
    // }
}
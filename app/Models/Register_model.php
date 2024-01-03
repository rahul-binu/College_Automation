<?php

namespace App\Models;
use \CodeIgniter\Model;


class Register_model extends Model{


    public function createUser($data)
    {
        $db = \Config\Database::connect();

$builder = $this->db->table('users');
$res = $builder->insert($data);
if($this->db->affectedRows()==1){
    return true;
}else{
    return false;
}

}
}
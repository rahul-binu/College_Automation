<?php

namespace App\Models;

use CodeIgniter\Model;


class Userdatabase extends Model
{

    public function getUsersList()
    {

        $db = \Config\Database::connect();
        $query = $db->query('SELECT  id, email, phone FROM logs');
        $result = $query->getResult();
        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
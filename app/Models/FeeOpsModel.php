<?php namespace App\Models;

use CodeIgniter\Model;
//model to perform fee operations
class FeeOpsModel extends Model{
    protected $table="fee_master";
    protected $primaryKey="fee_head";
    protected $allowedFields=[
        'fee_head',
        'fee_head_acro',
        'fee_group',
        'fee_group_acro'
    ];

    public function FetchFeeMasterDetails($id=null){
        //function to fetch fee master data fro editing porpus
        $con=\Config\Database::connect();
        $query=$con->query("SELECT * FROM fee_master WHERE(`fee_head`='$id')");
        $result=$query->getResult();
        return $result;
    }

    public function FeeStstusChange($feeHead,$newStatus){
        //function for change ststus of fee status
        $con=\Config\Database::connect();
        //  echo $feeHead,$newStatus;
        $changeQuery=$con->query("UPDATE `fee_master` SET `status`='$newStatus'WHERE (`fee_head`='$feeHead')");
        if(!empty($changeQuery)){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function feeDetailsStatusUpdate($feeHead,$status,$course){
        //model to update the status of the fee setting table 
        $con=\Config\Database::connect();
        $query=$con->query("UPDATE fee_settings SET `status`='$status' WHERE(`fee_head`='$feeHead'AND `programme`='$course')");
        if(!empty($query)){
            return 1;
        }
        else{
            return 0;
        }
    }

}

?>
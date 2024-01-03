<?php
namespace App\Models;

use CodeIgniter\Model;

class feeAutoModel extends Model{
    protected $table = "fee_master1";
    protected $primaryKey="fee_head";
    protected $returnType="object";
    protected $allowedFields=['fee_head','fee_head_acro','fee_group','fee_group_acro'];
    protected $UseTimeStamps=true;
    protected $createdField='cerated_at';
    protected $updatedField='updated_at';
    protected $deletedField='deleted_at';
    
    protected $modelObj;
    public function __construct(){
  //      $this->modelObj =new feeAutoModel();
    }
    public function saveFeeMaster($data){
        $db= \Config\Database::connect();
        $builder=$db->table('fee_master1');
        $builder->insert($data);
    }
}
?>
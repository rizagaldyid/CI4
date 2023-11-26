<?php

namespace App\Models;

use CodeIgniter\Model;

class SimpanModel extends Model
{
  
    protected $table            = 'epo';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    public function getData($id= false)
    {
        if($id === false){
            return $this->where('status','D')->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }
    }

    public function delData($data,$id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id'=> $id]);
         
    }
}

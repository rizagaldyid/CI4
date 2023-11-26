<?php

namespace App\Models;

use CodeIgniter\Model;

class LimbahModel extends Model
{

    protected $table            = 'epo';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    public function getData($id= false)
    {
        if($id === false){
            return $this->where('status','A')->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveData($data)
    {
        $builder = $this->db->table($this->table);
         return $builder->insert($data);
    }
    public function upData($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id',$id);
         return $builder->update($data);
    }
    public function delData($data,$id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id'=> $id]);
         
    }

    
   


}

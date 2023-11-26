<?php

namespace App\Controllers;

use App\Models\LimbahModel;
use CodeIgniter\RESTful\ResourceController;

class Limbah extends ResourceController
{
    public function index()
    {
        $P = new LimbahModel();
        $data['dtlimbah'] = $P->getData();
        return view ('Limbah', $data);
    }

    public function new()
    {
        return view ('form');
 
    }

    public function create()
    {
       $p = new LimbahModel();
       $data = array(
        'nama' => $this->request->getPost('nama'),
        'departemen' => $this->request->getPost('departemen'),
        'no_hp' => $this->request->getPost('no_hp'),
        'jenis_limbah' => $this->request->getPost('jenis_limbah'),
        'tgl' => $this->request->getPost('tgl'),
        'user' => $this->request->getPost('user'),
       );

       $p->saveData($data);
       session()->setFlashdata('success',"Data berhasil di tambahkan");
       return redirect()->to(base_url('/limbah'));
    }

    public function delete($id=null)
    {
        $p = new LimbahModel();
        $getData =$p->getData($id)->getRow();
        if(isset($getData)){
            $data = array(
                'status' => 'D'
                
            );
            $p->upData($data, $id);

        };

        return redirect()->to(base_url('/limbah'))->with ('succes','Data Updated Succesfully');
    }
}

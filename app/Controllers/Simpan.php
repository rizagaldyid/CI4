<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SimpanModel;

class Simpan extends BaseController
{
    public function index()
    {
        $s = new SimpanModel();
        $data['dtlimbah'] = $s->getData();
        return view('simpan',$data);
    }

    public function export()
    {
        echo"export simpan";
    }
}

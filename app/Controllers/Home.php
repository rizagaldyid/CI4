<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HistoryModel;

class History extends BaseController
{
    public function riwayat()
    {
        $h = new HistoryModel();
        $data['dtlimbah'] = $h->getData();
        return view('history',$data);
    }

    public function delete($id=null)
    {
        $p = new HistoryModel();
        $getData =$p->getData($id)->getRow();
        if(isset($getData)){
            $data = array(
                'status' => 'B'
            );
            $p->upData($data, $id);

        };

        return redirect()->to(base_url('/limbah'))->with ('succes','Data Updated Succesfully');
    }
}

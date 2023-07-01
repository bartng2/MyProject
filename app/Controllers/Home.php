<?php

namespace App\Controllers;
use App\Controllers\BaseController;
class Home extends BaseController
{
    public function index()
    {
        $show = [];
        $data = [];
        $show = $this->LoadView($show, 'Trang chủ', 'admin/user/pages/trang_chu', $data);
        return view('admin/main',$show);
    }
}

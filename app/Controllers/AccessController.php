<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccessController extends BaseController
{
    public function list_access()
    {
        $show = [];
        $data = [];
        $show = $this->LoadView($show, 'Kiểm soát truy cập', 'admin/user/pages/truy_cap', $data);
        return view('admin/main', $show);
    }
}

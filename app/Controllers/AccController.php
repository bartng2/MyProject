<?php

namespace App\Controllers;
use App\Models\AccModel;
use App\Controllers\BaseController;

class AccController extends BaseController
{
    public function list_acc()
    {
        $show = [];
        $acc_model = new AccModel();
        $userAcc = $acc_model->whereIn('QuyenHan', ['USER1', 'USER2'])->findAll();        $data['userAcc'] = $userAcc;
        $show = $this->LoadView($show, 'Quản lí tài khoản', 'admin/user/pages/list_acc', $data);
        return view('admin/main', $show);
    }
}

<?php

namespace App\Controllers\Export;
use App\Controllers\BaseController;
use App\Models\StudentModel;
use App\Models\TotnghiepModel;
use App\Models\UutienModel;
class RController extends BaseController
{
    public function index()
    {
        $show = [];
        $data = [];
        $show = $this->LoadView($show, 'Thống kê - báo cáo', 'admin/user/pages/action/Export/RView', $data);
        return view('admin/main',$show);
    }

    public function list()
    {
        $show = [];
        $student_model = new StudentModel();
        $allstudent = $student_model->findAll();
        $data['allstudent'] = $allstudent;
        $show = $this->LoadView($show, 'Thống kê hồ sơ sinh viên', 'admin/user/pages/action/Export/RStudentList', $data);
        return view('admin/main', $show);
    }

    public function show($id = '')
    {
        $model = new StudentModel();
        $show = [];
        $data['show'] = $model->find($id);
        $show = $this->LoadView($show, 'Thông tin chi tiết', 'admin/user/pages/action/Export/RShowView', $data);
        return view('admin/main',$show);
    }

    public function list_tn()
    {
        $show = [];
        $student_model = new TotnghiepModel();
        $allstudent = $student_model->findAll();
        $data['allstudent'] = $allstudent;
        $show = $this->LoadView($show, 'Thống kê hồ sơ sinh viên', 'admin/user/pages/action/Export/totnghiepview', $data);
        return view('admin/main', $show);
    }

    public function list_ut()
    {
        $show = [];
        $student_model = new UutienModel();
        $allstudent = $student_model->findAll();
        $data['allstudent'] = $allstudent;
        $show = $this->LoadView($show, 'Thống kê hồ sơ sinh viên', 'admin/user/pages/action/Export/uutienview', $data);
        return view('admin/main', $show);
    }
}

<?php

namespace App\Controllers;
use App\Models\StudentModel;
use App\Controllers\BaseController;

class StudentController extends BaseController
{
    public function list_student()
    {
        $show = [];
        $student_model = new StudentModel();
        $allstudent = $student_model->findAll();
        $data['allstudent'] = $allstudent;
        $show = $this->LoadView($show, 'Quản lí hồ sơ sinh viên', 'admin/user/pages/liststudent', $data);
        return view('admin/main', $show);
    }

    public function search_student()
    {
        $keyword = $this->request->getVar('keyword');
        
        // Xử lý tìm kiếm theo mã sinh viên và họ tên trong cơ sở dữ liệu
        $model = new StudentModel();
        $result = $model->search($keyword);
        
        // Gửi kết quả tìm kiếm đến view
        $show = [];
        $data['result'] = $result;
        $show = $this->LoadView($show, 'Quản lí hồ sơ sinh viên', 'admin/user/pages/liststudent', $data);
        return view('admin/main', $show);
    }

    public function index_contact()
    {
        $show = [];
        $data = [];
        $show = $this->LoadView($show, 'Quản lí thông tin liên hệ', 'admin/user/pages/home/infostudent', $data);
        return view('admin/main',$show);
    }
}

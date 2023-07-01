<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\TotnghiepModel;

class TotnghiepController extends BaseController
{
    public function view_totnghiep()
    {
        $show = [];
        $contact_model = new TotnghiepModel();
        $allcontact = $contact_model->findAll();
        $data['allcontact'] = $allcontact;
        $show = $this->LoadView($show, 'Thông tin liên hệ sinh viên', 'admin/user/pages/action/Totnghiep/totnghiepview', $data);
        return view('admin/main',$show);
    }

    public function search_totnghiep()
    {
        $keyword = $this->request->getVar('keyword');
        
        // Xử lý tìm kiếm theo mã sinh viên và họ tên trong cơ sở dữ liệu
        $model = new TotnghiepModel();
        $result = $model->search_tn($keyword);
        
        // Gửi kết quả tìm kiếm đến view
        $show = [];
        $data['result'] = $result;
        $show = $this->LoadView($show, 'Quản lí thông tin tốt nghiệp', 'admin/user/pages/action/Totnghiep/totnghiepview', $data);
        return view('admin/main', $show);
    }

    public function edit($id = '')
        {
            $model = new TotnghiepModel();
            $data['edit'] = $model->find($id);
            $show = [];
            $show = $this->LoadView($show, 'Thông tin chi tiết', 'admin/user/pages/action/Totnghiep/edittotnghiep', $data);
            return view ('admin/main', $show);
        }

        public function update()
        {
            $id = $this->request->getPost('id');
            $MaSV = $this->request->getPost('MaSV');
            $Hoten = $this->request->getPost('Hoten');
            $Lop = $this->request->getPost('Lop');
            $Khoa = $this->request->getPost('Khoa');
            $Nganh = $this->request->getPost('Nganh');
            $NamTotNghiep = $this->request->getPost('NamTotNghiep');
            $XepLoaiTotNghiep = $this->request->getPost('XepLoaiTotNghiep');

                //lấy dữ liệu từ form
                $data = [
                        'id' => $id,
                        'MaSV' => $MaSV,
                        'Hoten' => $Hoten,
                        'Lop' => $Lop,
                        'Khoa' => $Khoa,
                        'Nganh' => $Nganh,
                        'NamTotNghiep' => $NamTotNghiep,
                        'XepLoaiTotNghiep' => $XepLoaiTotNghiep,
                ];
                $model = new TotnghiepModel();
                if ($model -> save($data)) {
                  echo '<script type="text/javascript">';
                  echo 'alert("Cập nhật thành công")';
                  echo '</script>';
              }  else {
                echo '<script type="text/javascript">';
                echo 'alert("Cập nhật thất bại")';
                echo '</script>';
              }

            return redirect()->to('info_tn');
        }
}

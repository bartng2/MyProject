<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UutienModel;

class UutienController extends BaseController
{
    public function view_uutien()
    {
        $show = [];
        $uutien_model = new UutienModel();
        $model = $uutien_model->findAll();
        $data['model'] = $model;
        $show = $this->LoadView($show, 'Thông tin ưu tiên sinh viên', 'admin/user/pages/action/UuTien/Uutienview', $data);
        return view('admin/main',$show);
    }

    public function search_uutien()
    {
        $keyword = $this->request->getVar('keyword');
        
        // Xử lý tìm kiếm theo mã sinh viên và họ tên trong cơ sở dữ liệu
        $model = new UutienModel();
        $result = $model->search($keyword);
        
        // Gửi kết quả tìm kiếm đến view
        $show = [];
        $data['result'] = $result;
        $show = $this->LoadView($show, 'Quản lí thông tin ưu tiên', 'admin/user/pages/action/UuTien/Uutienview', $data);
        return view('admin/main', $show);
    }

    public function edit($id = '')
        {
            $model = new UutienModel();
            $data['edit'] = $model->find($id);
            $show = [];
            $show = $this->LoadView($show, 'Thông tin chi tiết', 'admin/user/pages/action/UuTien/edituutien', $data);
            return view ('admin/main', $show);
        }

        public function update()
        {
            $id = $this->request->getPost('id');
            $MaSV = $this->request->getPost('MaSV');
            $Hoten = $this->request->getPost('Hoten');
            $Lop = $this->request->getPost('Lop');
            $CheDoUuTien = $this->request->getPost('CheDoUuTien');

                //lấy dữ liệu từ form
                $data = [
                        'id' => $id,
                        'MaSV' => $MaSV,
                        'Hoten' => $Hoten,
                        'Lop' => $Lop,
                        'CheDoUuTien' => $CheDoUuTien,
                ];
                $model = new UutienModel();
                if ($model -> save($data)) {
                  echo '<script type="text/javascript">';
                  echo 'alert("Cập nhật thành công")';
                  echo '</script>';
              }  else {
                echo '<script type="text/javascript">';
                echo 'alert("Cập nhật thất bại")';
                echo '</script>';
              }

            return redirect()->to('info_ut');
        }
}

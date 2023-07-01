<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\HoctapModel;

class HoctapController extends BaseController
{
    public function view_ht()
    {
        $show = [];
        $hoctap_model = new HoctapModel();
        $model = $hoctap_model->findAll();
        $data['model'] = $model;
        $show = $this->LoadView($show, 'Thông tin tình trạng học tập', 'admin/user/pages/action/hoctap/hoctapview', $data);
        return view('admin/main',$show);
    }

    public function search_ht()
    {
        $keyword = $this->request->getVar('keyword');
        
        // Xử lý tìm kiếm theo mã sinh viên và họ tên trong cơ sở dữ liệu
        $model = new HoctapModel();
        $result = $model->search($keyword);
        
        // Gửi kết quả tìm kiếm đến view
        $show = [];
        $data['result'] = $result;
        $show = $this->LoadView($show, 'Quản lí thông tin', 'admin/user/pages/action/hoctap/hoctapview', $data);
        return view('admin/main', $show);
    }

    public function edit($id = '')
        {
            $model = new HoctapModel();
            $data['edit'] = $model->find($id);
            $show = [];
            $show = $this->LoadView($show, 'Thông tin chi tiết', 'admin/user/pages/action/hoctap/edithoctap', $data);
            return view ('admin/main', $show);
        }

        public function update()
        {
            $id = $this->request->getPost('id');
            $MaSV = $this->request->getPost('MaSV');
            $Hoten = $this->request->getPost('Hoten');
            $Lop = $this->request->getPost('Lop');
            $SoTinChi = $this->request->getPost('SoTinChi');
            $TinhTrangHocTap = $this->request->getPost('TinhTrangHocTap');
                //lấy dữ liệu từ form
                $data = [
                        'id' => $id,
                        'MaSV' => $MaSV,
                        'Hoten' => $Hoten,
                        'Lop' => $Lop,
                        'SoTinChi' => $SoTinChi,
                        'TinhTrangHocTap' => $TinhTrangHocTap,
                ];
                $model = new HoctapModel();
                if ($model -> save($data)) {
                  echo '<script type="text/javascript">';
                  echo 'alert("Cập nhật thành công")';
                  echo '</script>';
              }  else {
                echo '<script type="text/javascript">';
                echo 'alert("Cập nhật thất bại")';
                echo '</script>';
              }

            return redirect()->to('info_ht');
        }
}

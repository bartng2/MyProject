<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ContactModel;

class InforController extends BaseController
{
    public function view_contact()
    {
        $show = [];
        $contact_model = new ContactModel();
        $allcontact = $contact_model->findAll();
        $data['allcontact'] = $allcontact;
        $show = $this->LoadView($show, 'Thông tin liên hệ sinh viên', 'admin/user/pages/action/contact/contactstudent', $data);
        return view('admin/main',$show);
    }

    public function search_contact()
    {
        $keyword = $this->request->getVar('keyword');
        
        // Xử lý tìm kiếm theo mã sinh viên và họ tên trong cơ sở dữ liệu
        $model = new ContactModel();
        $result = $model->search_contact($keyword);
        
        // Gửi kết quả tìm kiếm đến view
        $show = [];
        $data['result'] = $result;
        $show = $this->LoadView($show, 'Quản lí thông tin liên hệ', 'admin/user/pages/action/contact/contactstudent', $data);
        return view('admin/main', $show);
    }

    public function edit($id = '')
        {
            $model = new ContactModel();
            $data['edit'] = $model->find($id);
            $show = [];
            $show = $this->LoadView($show, 'Thông tin chi tiết', 'admin/user/pages/action/contact/editcontact', $data);
            return view ('admin/main', $show);
        }

        public function update()
        {
            $id = $this->request->getPost('id');
            $MaSV = $this->request->getPost('MaSV');
            $Hoten = $this->request->getPost('Hoten');
            $NgaySinh = $this->request->getPost('NgaySinh');
            $QueQuan = $this->request->getPost('QueQuan');
            $Email = $this->request->getPost('Email');
            $Sdt = $this->request->getPost('Sdt');

                //lấy dữ liệu từ form
                $data = [
                        'id' => $id,
                        'MaSV' => $MaSV,
                        'Hoten' => $Hoten,
                        'NgaySinh' => $NgaySinh,
                        'QueQuan' => $QueQuan,
                        'Email' => $Email,
                        'Sdt' => $Sdt,
                ];
                $model = new ContactModel();
                if ($model -> save($data)) {
                  echo '<script type="text/javascript">';
                  echo 'alert("Cập nhật thành công")';
                  echo '</script>';
              }  else {
                echo '<script type="text/javascript">';
                echo 'alert("Cập nhật thất bại")';
                echo '</script>';
              }

            return redirect()->to('info');
        }
}

<?php

namespace App\Controllers\Action;
use App\Controllers\BaseController;
use App\Models\StudentModel;
class AddstudentController extends BaseController
{
    public function add_student()
    {
        $show = [];
        $data = [];
        $show = $this->LoadView($show, 'Thêm sinh viên', 'admin/user/pages/action/student/addstudent', $data);
        return view('admin/main',$show);
    }

    public function store()
    {
        $model = new StudentModel();

        $MaSV = $this->request->getPost('MaSV');
        $Hoten = $this->request->getPost('Hoten');
        $Lop= $this->request->getPost('Lop');
        $NamNhapHoc = $this->request->getPost('NamNhapHoc');
        $Khoas = $this->request->getPost('Khoas');
        $Gioitinh = $this->request->getPost('Gioitinh');
        $Nganh = $this->request->getPost('Nganh');
        $Khoa = $this->request->getPost('Khoa');
        $NamTotNghiep = $this->request->getPost('NamTotNghiep');
        $TinhTrangHocTap = $this->request->getPost('TinhTrangHocTap');
        $Anh = $this->request->getFile('Anh');

        if ($Anh && $Anh->isValid() && !$Anh->hasMoved()) {
            $Anh->move(ROOTPATH . 'public/images', $Anh->getName());
            $Path = 'images/' . $Anh->getName();
        }

            $data = [
                    'MaSV' => $MaSV,
                    'Hoten' => $Hoten,
                    'Lop' => $Lop,
                    'NamNhapHoc' => $NamNhapHoc,
                    'Khoas' => $Khoas,
                    'Gioitinh' => $Gioitinh,
                    'Nganh' => $Nganh,
                    'Khoa' => $Khoa,
                    'NamTotNghiep' => $NamTotNghiep,
                    'TinhTrangHocTap' => $TinhTrangHocTap,
                    'Anh' => '' . $Anh->getName(),
                    ];
              if ($model -> insert($data)) {
                echo '<script type="text/javascript">';
                echo 'alert("Thêm thành công")';
                echo '</script>';
             }else{
                echo '<script type="text/javascript">';
                echo 'alert("Thêm thất bại")';
                echo '</script>';
         }
         return redirect()->to('st');
        }

        public function show($id = '')
        {
            $model = new StudentModel();
            $show = [];
            $data['show'] = $model->find($id);
            $show = $this->LoadView($show, 'Thông tin chi tiết', 'admin/user/pages/action/student/showstudent', $data);
        return view('admin/main',$show);
        }

        public function delete($id = '')
        {
            $model = new StudentModel();
    
            // Kiểm tra xem người dùng có tồn tại hay không
            $user = $model->find($id);
            if (!$user) {
                echo '<script type="text/javascript">';
                echo 'alert("Người dùng không tồn tại")';
                echo '</script>';
            return redirect()->to('st');
            }
            
            // Lấy thông tin về ảnh cũ của người dùng
            $oldImage = $user['Anh'];
            
            // Xóa người dùng từ cơ sở dữ liệu
            if ($model->delete($id)) {
                // Nếu người dùng có ảnh cũ, xóa tệp tin ảnh
                if (!empty($oldImage)) {
                    $Path = FCPATH . 'public/images/' . $oldImage;
                    if (file_exists($Path)) {
                        unlink($Path);
                    }
                }
                echo '<script type="text/javascript">';
                echo 'alert("Xóa thông tin thành công")';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Xóa thất bại")';
                echo '</script>';
            }
            
            return redirect()->to('st');
        }

        public function edit($id = '')
        {
            $model = new StudentModel();
            $data['edit'] = $model->find($id);
            $show = [];
            $show = $this->LoadView($show, 'Thông tin chi tiết', 'admin/user/pages/action/student/editstudent', $data);
            return view ('admin/main', $show);
        }

        public function update()
        {
            $id = $this->request->getPost('id');
            $MaSV = $this->request->getPost('MaSV');
            $Hoten = $this->request->getPost('Hoten');
            $Lop= $this->request->getPost('Lop');
            $NamNhapHoc = $this->request->getPost('NamNhapHoc');
            $Khoas = $this->request->getPost('Khoas');
            $Gioitinh = $this->request->getPost('Gioitinh');
            $Nganh = $this->request->getPost('Nganh');
            $Khoa = $this->request->getPost('Khoa');
            $NamTotNghiep = $this->request->getPost('NamTotNghiep');
            $TinhTrangHocTap = $this->request->getPost('TinhTrangHocTap');
            $Anh = $this->request->getFile('Anh');

            $data = [
                'MaSV' => $MaSV,
                'Hoten' => $Hoten,
                'Lop' => $Lop,
                'NamNhapHoc' => $NamNhapHoc,
                'Khoas' => $Khoas,
                'Gioitinh' => $Gioitinh,
                'Nganh' => $Nganh,
                'Khoa' => $Khoa,
                'NamTotNghiep' => $NamTotNghiep,
                'TinhTrangHocTap' => $TinhTrangHocTap,
            ];

            // Kiểm tra xem người dùng đã chọn ảnh mới hay chưa
            if ($Anh && $Anh->isValid() && !$Anh->hasMoved()) {
                $Anh->move(ROOTPATH . 'public/images', $Anh->getName());
                $path = '' . $Anh->getName();
                $data['Anh'] = $path;

                // Xóa ảnh cũ nếu có
                $model = new StudentModel();
                $user = $model->find($id);
                if (!empty($user['Anh'])) {
                    $oldImagePath = ROOTPATH . 'public/' . $user['Anh'];
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }

            $model = new StudentModel();
            if ($model->update($id, $data)) {
                echo '<script type="text/javascript">';
                echo 'alert("Cập nhật thành công")';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Cập nhật thất bại")';
                echo '</script>';
            }

            return redirect()->to('st');
            }
        }
    
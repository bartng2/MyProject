<?php

namespace App\Controllers\Action;
use App\Controllers\BaseController;
use App\Models\AccModel;
class AddAccController extends BaseController
{
    public function add_acc()
    {
        $show = [];
        $data = [];
        $show = $this->LoadView($show, 'Thêm tài khoản', 'admin/user/pages/action/Auth/addacc', $data);
        return view('admin/main',$show);
    }

    public function store()
    {
        $model = new AccModel();

        $MaUsers = $this->request->getPost('MaUsers');
        $Hoten = $this->request->getPost('Hoten');
        $ChucVu = $this->request->getPost('ChucVu');
        $QuyenHan = $this->request->getPost('QuyenHan');
        $Sdt = $this->request->getPost('Sdt');
        $Email = $this->request->getPost('Email');
        $Gioitinh = $this->request->getPost('Gioitinh');
        $Anh = $this->request->getFile('Anh');

        if ($Anh && $Anh->isValid() && !$Anh->hasMoved()) {
            $Anh->move(ROOTPATH . 'public/Avatar', $Anh->getName());
            $Path = 'Avatar/' . $Anh->getName();
        }

            $data = [
                    'MaUsers' => $MaUsers,
                    'Hoten' => $Hoten,
                    'ChucVu' => $ChucVu,
                    'QuyenHan' => $QuyenHan,
                    'Sdt' => $Sdt,
                    'Email' => $Email,
                    'Gioitinh' => $Gioitinh,
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
         return redirect()->to('acc');
        }

        public function show($id = '')
        {
            $model = new AccModel();
            $show = [];
            $data['show'] = $model->find($id);
            $show = $this->LoadView($show, 'Thông tin chi tiết tài khoản', 'admin/user/pages/action/Auth/showacc', $data);
            return view('admin/main',$show);
        }

        public function delete($id = '')
        {
            $model = new AccModel();
    
            // Kiểm tra xem người dùng có tồn tại hay không
            $user = $model->find($id);
            if (!$user) {
                echo '<script type="text/javascript">';
                echo 'alert("Người dùng không tồn tại")';
                echo '</script>';
            return redirect()->to('acc');
            }
            
            // Lấy thông tin về ảnh cũ của người dùng
            $oldImage = $user['Anh'];
            
            // Xóa người dùng từ cơ sở dữ liệu
            if ($model->delete($id)) {
                // Nếu người dùng có ảnh cũ, xóa tệp tin ảnh
                if (!empty($oldImage)) {
                    $Path = FCPATH . 'public/Avatar/' . $oldImage;
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
            
            return redirect()->to('acc');
        }

        public function edit($id = '')
        {
            $model = new AccModel();
            $data['edit'] = $model->find($id);
            $show = [];
            $show = $this->LoadView($show, 'Thông tin chi tiết', 'admin/user/pages/action/Auth/editacc', $data);
            return view ('admin/main', $show);
        }

        public function update()
        {
            $id = $this->request->getPost('id');
            $MaUsers = $this->request->getPost('MaUsers');
            $Hoten = $this->request->getPost('Hoten');
            $ChucVu = $this->request->getPost('ChucVu');
            $QuyenHan = $this->request->getPost('QuyenHan');
            $Sdt = $this->request->getPost('Sdt');
            $Email = $this->request->getPost('Email');
            $MatKhauDangNhap = $this->request->getPost('MatKhauDangNhap');
            $Gioitinh = $this->request->getPost('Gioitinh');
            $Anh = $this->request->getFile('Anh');

            $data = [
                'MaUsers' => $MaUsers,
                'Hoten' => $Hoten,
                'ChucVu' => $ChucVu,
                'QuyenHan' => $QuyenHan,
                'Sdt' => $Sdt,
                'Email' => $Email,
                'MatKhauDangNhap' => $MatKhauDangNhap,
                'Gioitinh' => $Gioitinh,
            ];

            // Kiểm tra xem người dùng đã chọn ảnh mới hay chưa
            if ($Anh && $Anh->isValid() && !$Anh->hasMoved()) {
                $Anh->move(ROOTPATH . 'public/Avatar', $Anh->getName());
                $path = '' . $Anh->getName();
                $data['Anh'] = $path;

                // Xóa ảnh cũ nếu có
                $model = new AccModel();
                $user = $model->find($id);
                if (!empty($user['Anh'])) {
                    $oldImagePath = ROOTPATH . 'public/' . $user['Anh'];
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }

            $model = new AccModel();
            if ($model->update($id, $data)) {
                echo '<script type="text/javascript">';
                echo 'alert("Cập nhật thành công")';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Cập nhật thất bại")';
                echo '</script>';
            }

            return redirect()->to('acc');
            }
       } 
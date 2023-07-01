<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\AccModel;
use Config\Services;

class LoginController extends BaseController
{
    public function index()
    {
        return view('admin/user/pages/action/Auth/login');
    }

    public function login_post()
    {
        $nguoiDungModel = new AccModel();

        $maUsers = $this->request->getPost('MaUsers');
        $matKhauDangNhap = $this->request->getPost('MatKhauDangNhap');

        // Kiểm tra thông tin đăng nhập
        $nguoiDung = $nguoiDungModel->where('MaUsers', $maUsers)->first();
        if ($nguoiDung && $nguoiDung['MatKhauDangNhap'] == $matKhauDangNhap) {
            // Lưu thông tin người dùng vào session
            $userData = [
                'maUsers' => $nguoiDung['MaUsers'],
                'Hoten' => $nguoiDung['Hoten'],
                'QuyenHan' => $nguoiDung['QuyenHan'],
                'Sdt' => $nguoiDung['Sdt'],
                'ChucVu' => $nguoiDung['ChucVu'],
                'Email' => $nguoiDung['Email'],
                'Anh' => $nguoiDung['Anh'],
                'Gioitinh' => $nguoiDung['Gioitinh'],
                'MatKhauDangNhap' => $nguoiDung['MatKhauDangNhap']
            ];
            session()->set('user', $userData);

            return redirect()->to(site_url('home')); // Điều hướng đến trang chủ sau khi đăng nhập thành công
        } else {
            session()->setFlashdata('message', 'Thông tin đăng nhập không chính xác.');
            return redirect()->to(site_url('/'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}

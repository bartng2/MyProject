<?php

namespace App\Models;

use CodeIgniter\Model;

class AccModel extends Model
{
    protected $table            = 'nguoidung';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['MaUsers', 'Hoten', 'ChucVu', 'QuyenHan', 'Sdt', 'Email', 'Anh', 'Gioitinh', 'MatKhauDangNhap'];

}

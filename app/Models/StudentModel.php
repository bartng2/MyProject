<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table            = 'sinhvien';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['MaSV', 'Hoten', 'Lop', 'NamNhapHoc', 'Khoas', 'Nganh', 'Khoa', 'NamTotNghiep', 'TinhTrangHocTap', 'Anh', 'Gioitinh'];

    public function search($keyword)
    {
        $this->like('MaSV', $keyword);
        $this->orLike('Hoten', $keyword);
        $this->orlike('Lop', $keyword);
        $this->orLike('Khoas', $keyword);
        $this->orlike('Nganh', $keyword);
        $this->orLike('Khoa', $keyword);
        return $this->findAll();
    }
}

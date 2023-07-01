<?php

namespace App\Models;

use CodeIgniter\Model;

class TotnghiepModel extends Model
{
    protected $table            = 'totnghiep';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['MaSV', 'Hoten', 'Khoa', 'Nganh', 'NamTotNghiep', 'XepLoaiTotNghiep', 'id_student'];

    public function search_tn($keyword)
    {
        $this->like('MaSV', $keyword);
        $this->orLike('Hoten', $keyword);
        $this->orLike('Lop', $keyword);
        $this->orLike('Khoa', $keyword);
        $this->orLike('Nganh', $keyword);
        $this->orLike('NamTotNghiep', $keyword);
        $this->orLike('XepLoaiTotNghiep', $keyword);
        return $this->findAll();
    }
}

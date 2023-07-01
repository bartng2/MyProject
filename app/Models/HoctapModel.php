<?php

namespace App\Models;

use CodeIgniter\Model;

class HoctapModel extends Model
{
    protected $table            = 'tthoctap';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['MaSV', 'Hoten', 'Lop', 'SoTinChi', 'TinhTrangHocTap', 'id_student'];

    public function search($keyword)
    {
        $this->like('MaSV', $keyword);
        $this->orLike('Hoten', $keyword);
        $this->orLike('Lop', $keyword);
        $this->orLike('TinhTrangHocTap', $keyword);
        return $this->findAll();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class UutienModel extends Model
{
    protected $table            = 'chedouutien';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['MaSV', 'Hoten', 'Lop', 'CheDoUuTien'];

    public function search($keyword)
    {
        $this->like('MaSV', $keyword);
        $this->orLike('Hoten', $keyword);
        $this->orLike('Lop', $keyword);
        $this->orLike('CheDoUuTien', $keyword);
        return $this->findAll();
    }
}

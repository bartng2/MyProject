<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table            = 'lienhesv';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['MaSV', 'Hoten', 'NgaySinh', 'QueQuan', 'Email', 'Sdt', 'id_student'];

    public function search_contact($keyword)
    {
        $this->like('MaSV', $keyword);
        $this->orLike('Hoten', $keyword);
        $this->like('Email', $keyword);
        $this->orLike('Sdt', $keyword);
        return $this->findAll();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table = 'pesan';

    protected $primaryKey = 'id_pesan';

    protected $useTimestamps = true;

    protected $allowedFields = [
        'nama', 'email', 'subject', 'message'
    ];

    public function getPesan($id = false)
    {
        return $this->where(['id_pesan' => $id])->first();
    }
    
}
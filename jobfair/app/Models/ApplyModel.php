<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplyModel extends Model
{
    protected $table = 'apply';

    protected $primaryKey = 'id_apply';

    protected $useTimestamps = true;

    protected $allowedFields = [
        'namalengkap', 'alamatemail', 'programstudi', 'pendidikan_terakhir', 'portofolio', 'cv', 'id_job'
    ];

    public function getApply($id = false)
    {
    $query = $this->db->table('apply')
        ->select('apply.*, job.nama_job, job.nama_perusahaan')
        ->join('job', 'apply.id_job = job.id_job');
        
    if ($id == false) {
        return $query->get()->getResultArray();
    }
    
    return $query->where(['apply.id_apply' => $id])->get()->getRowArray();
    }

   

  
}
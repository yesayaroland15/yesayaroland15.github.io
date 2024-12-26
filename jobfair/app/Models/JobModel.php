<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
    protected $table = 'job';

    protected $primaryKey = 'id_job';

    protected $useTimestamps = true;

    protected $allowedFields = [
        'picture', 'nama_job', 'nama_perusahaan', 'syarat', 'Gaji', 'jenis_pekerjaan', 'batas_pendaftaran', 'id_category'
    ];

    public function getJob($id = false)
    {
        $query = $this->table('job')
        ->join('category_job', 'id_category')
        ->where('deleted_at is null');

        if ($id == false)
            return $query->get()->getResultArray();
        return $query->where(['id_job' => $id])->first();
    }

    protected $useSoftDeletes = true;
}
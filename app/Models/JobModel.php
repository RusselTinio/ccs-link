<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_jobs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'partnerId',
        'job_title', 
        'job_company', 
        'job_description', 
        'job_category', 
        'job_address', 
        'city', 
        'job_salary', 
        'job_email', 
        'job_contacts', 
        'job_website', 
        'job_cover', 
        'date',
        'approval',
        'status'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function jobAddressCount(){
        return $this->SELECT('city, COUNT(*) AS addressCount')
        ->where('approval','approved')
        ->groupBy('city')
        ->get()
        ->getResultArray();
    }
}

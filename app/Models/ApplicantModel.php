<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplicantModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'applicant';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'userId','jobId', 'status'
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

    public function getApplicantsWithInfo(){
        return $this->select('applicant.*,users.*, ,applicant.id AS id,users.id AS userId,  applicant.status AS approval')
        ->join('users', 'users.id = applicant.userid');
        // ->where('mentoring.status', 'approve') // Assuming there's a column indicating mentor status
        // ->findAll();
    }
    public function applicantProfile(){
        return $this->select('applicant.*,users.*, ,applicant.id AS id,users.id AS userId,  applicant.status AS approval')
        ->join('users', 'users.id = applicant.userid');
    }




}

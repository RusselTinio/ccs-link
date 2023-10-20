<?php

namespace App\Models\Profile;

use CodeIgniter\Model;

class Mentoring extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mentoring';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
     'userId',
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


    public function getMentorsWithInfo(){
        return $this->select('mentoring.*,users.*,mentoring.id AS id,users.id AS userId, mentoring.approval AS approval')
        ->join('users', 'users.id = mentoring.userid');
        // ->where('mentoring.status', 'approve') // Assuming there's a column indicating mentor status
        // ->findAll();
    }
    public function mentorProfile(){
        return $this->select('mentoring.*,users.*,mentoring.id AS id,users.id AS userId, mentoring.approval AS approval')
        ->join('users', 'users.id = mentoring.userid');
    }
}

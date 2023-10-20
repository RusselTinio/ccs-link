<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_news';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'news_title',
        'news_desc', 
        'date_posted', 
        'news_image', 
        'timestamp', 
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

    public function getRecentNews(){
        return $this->select('*')
        ->orderBy('timestamp','DESC')
        ->limit(5)
        ->get()
        ->getResultArray();
    }
}

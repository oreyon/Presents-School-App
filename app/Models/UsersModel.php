<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'tb_users';
    protected $primaryKey       = 'db_iduser';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['db_nisn','db_namauser','db_password'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_created';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_feedback extends Model
{
    protected $table = "feedback";
    protected $primaryKey = "id_feedback";
    protected $allowedFields = [
        "id_penduduk",
        "kategori",
        "isi",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}

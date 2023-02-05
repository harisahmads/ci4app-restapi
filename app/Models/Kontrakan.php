<?php

namespace App\Models;

use CodeIgniter\Model;

class Kontrakan extends Model
{
    protected $table            = 'kontrakan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['no_rumah', 'penghuni', 'pekerjaan', 'no_kk', 'telepon', 'tanggal_masuk', 'lama_sewa'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}

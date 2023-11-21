<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
protected $DBGroup          = 'default';
protected $table            = 'pendidikan_mahasiswa';
protected $primaryKey       = 'pendidikan_id';
protected $useAutoIncrement = true;
protected $returnType       = 'object';
protected $useSoftDeletes   = false;
protected $protectFields    = true;
protected $allowedFields    = ['kode_asal_sekolah','nama_sekolah_asal','nisn','tahun_lulus','jurusan','id_mahasiswa'];
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
protected $DBGroup          = 'default';
protected $table            = 'mahasiswa';
protected $primaryKey       = 'mahasiswa_id';
protected $useAutoIncrement = true;
protected $returnType       = 'object';
protected $useSoftDeletes   = false;
protected $protectFields    = true;
protected $allowedFields    = ['nama_mahasiswa', 'jenis_kelamin','agama','kota_lahir','tanggal_lahir','alamat','kode_pos','telepon_rumah','no_hp'];
}
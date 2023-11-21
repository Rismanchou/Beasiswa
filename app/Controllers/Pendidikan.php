<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use App\Models\PendidikanModel;

class Pendidikan extends BaseController
{
    protected $mahasiswa;
    protected $pendidikan;

    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
        $this->pendidikan = new PendidikanModel();
    }
    
    function tambah($id_mahasiswa =null)
    {
        $data = $this->request->getPost();
        if(isset($data["tambah"])){
            // dd($data);
            $this->pendidikan->insert($data);
            return redirect()->to(base_url('mahasiswa'));
        }else {
            $item = $this->mahasiswa->where('mahasiswa_id', $id_mahasiswa)->first();
            return view('tambah_pendidikan', ['mahasiswa_id'=>$id_mahasiswa, "data"=>$item]);
        }
    }
    function ubah($id=null)
    {
        $item = $this->request->getPost();
        if(isset($item['update'])){
            $this->pendidikan->update($id, $item);
            return redirect()->to(base_url('mahasiswa'));
        }else{
            $item['mahasiswa'] = $this->mahasiswa->where('mahasiswa_id', $id)->first();
            return view('ubah_pendidikan', $item);
        }
    }
    function hapus($id=null)
    {
        try {
            $this->pendidikan->delete($id);
            return redirect()->to(base_url('mahasiswa'));
        } catch (\Throwable $th) {
            return redirect()->to(base_url('mahasiswa'));
        }
    }
}

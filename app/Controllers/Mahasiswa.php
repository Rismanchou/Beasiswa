<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use App\Models\PendidikanModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswa;
    protected $pendidikan;

    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
        $this->pendidikan = new PendidikanModel();
    }
    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa->findAll();
        // dd($data['mahasiswa']);
        foreach ($data['mahasiswa'] as $key => $value) {
            $value->pendidikan =  $this->pendidikan->where('pendidikan_id', $value->mahasiswa_id)->findAll();
        }
        return view('mahasiswa', $data);
    }

    function tambah()
    {
        $data = $this->request->getPost();
        // dd($data);
        if(isset($data["tambah"])){
            $this->mahasiswa->insert($data);
            return redirect()->to(base_url('mahasiswa'));
        }else return view('tambah_mahasiswa');
    }
    function ubah($id=null)
    {
        $item = $this->request->getPost();
        if(isset($item['update'])){
            $this->mahasiswa->update($id, $item);
            return redirect()->to(base_url('mahasiswa'));
        }else{
            $item['mahasiswa'] = $this->mahasiswa->where('mahasiswa_id', $id)->first();
            return view('ubah_mahasiswa', $item);
        }
    }
    function hapus($id=null)
    {
        try {
            $this->mahasiswa->delete($id);
            return redirect()->to(base_url('mahasiswa'));
        } catch (\Throwable $th) {
            return redirect()->to(base_url('mahasiswa'));
        }
    }
}

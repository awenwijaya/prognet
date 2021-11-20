<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiModel;

class RegistrasiController extends Controller
{
    public function __construct() {
        $this->PegawaiModel = new PegawaiModel();
    }

    public function index() {
        return view('registrasi');
    }

    public function daftar() {
        
        Request()->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'foto' => 'required|max:1024'
        ],[
            'nama_pegawai.required' => 'Nama lengkap belum terisi',
            'alamat.required' => 'Alamat belum terisi',
            'foto.required' => 'Foto pegawai belum terisi'
        ]);

        $file = Request()->foto;
        $filename = $file->getClientOriginalName();
        $file->move(public_path('profile_picture'), $filename);

        $data_pegawai = [
            'nama_pegawai' => Request()->nama_pegawai,
            'alamat' => Request()->alamat,
            'foto' => $filename
        ];

        $this->PegawaiModel->Insert($data_pegawai);

        return redirect()->route('success');

    }

    public function success() {
        return view('success');
    }
}

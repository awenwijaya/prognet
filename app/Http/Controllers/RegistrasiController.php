<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiModel;
use App\Models\AdminModel;

class RegistrasiController extends Controller
{
    public function __construct() {
        $this->PegawaiModel = new PegawaiModel();
        $this->AdminModel = new AdminModel();
    }

    public function index() {
        return view('registrasi');
    }

    public function daftar() {
        
        Request()->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'foto' => 'required|max:1024',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ],[
            'nama_pegawai.required' => 'Nama lengkap belum terisi',
            'alamat.required' => 'Alamat belum terisi',
            'foto.required' => 'Foto pegawai belum terisi',
            'username.required' => 'Username belum terisi',
            'password.required' => 'Password belum terisi'
        ]);

        $file = Request()->foto;
        $filename = $file->getClientOriginalName();
        $file->move(public_path('profile_picture'), $filename);

        $data_pegawai = [
            'nama_pegawai' => Request()->nama_pegawai,
            'alamat' => Request()->alamat,
            'foto' => $filename
        ];

        $data_admin = [
            'username' => Request()->username,
            'password' => Request()->password,
            'status' => '0',
            'role' => Request()->role
        ];

        $this->PegawaiModel->Insert($data_pegawai);

        $this->AdminModel->Insert($data_admin);

        return redirect()->route('success');

    }

    public function success() {
        return view('success');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use Illuminate\Support\Facades\Hash;
use App\Models\dosen;
use App\Models\jurusan;
use Illuminate\Support\Facades\DB;
use Session;

class MahasiswaController extends Controller
{
   
    public function index()
    {
        $mhs = mahasiswa::all();
        $jurusan = jurusan::all();
       
        return view('input-mahasiswa', compact('mhs','jurusan'));
    }

   
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:20',
        'username' => 'required',
        'password' => 'required|max:8',
        'jk' => 'required',
        'jurusan' => 'required',
        'angkatan' => 'required|max:4',
        'no_tlp' => 'required|max:12',
        'ket' => 'required',
        'set' => 'required'
    ]);

     

      $data = new mahasiswa;
      $data->name =  $request->name;
      $data->username = $request->username;
      $data->password = Hash::make($request->password);
      $data->jk = $request->jk;
      $data->jurusan = $request->jurusan;
      $data->angkatan = $request->angkatan;
      $data->no_tlp = $request->no_tlp;
      $data->ket = $request->ket;
      $data->set = $request->set;

      $data->save();

      return redirect('data-mahasiswa')->with('success', 'Data Berhasil Di Tambahkan');

  }

   
    public function show($id)
    {
        $hapus = mahasiswa::findorfail($id);
        $hapus->delete();
        return redirect('data-mahasiswa')->with('success', 'Data Berhasil Dihapus');
    }

 
    public function update(Request $request, $id)
    {
        $ubah = mahasiswa::findorfail($id);
        
        $ubah->name =  $request->name;
        $ubah->username = $request->username;
        $ubah->password = Hash::make($request->password);
        $ubah->jk = $request->jk;
        $ubah->jurusan = $request->jurusan;
        $ubah->angkatan = $request->angkatan;
        $ubah->no_tlp = $request->no_tlp;
        $ubah->ket = $request->ket;
        $ubah->set = $request->set;
        $ubah->update();
        return redirect('data-mahasiswa')->with('success', 'Anda Berhasil Di Ubah');
    }

   
   
}

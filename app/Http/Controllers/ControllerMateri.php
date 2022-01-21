<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materi;
use App\Models\jurusan;
use App\Models\matkul;
use App\Models\dosen;
use App\Models\mahasiswa;
use App\Models\komentar;
use Auth;


class ControllerMateri extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $mt = materi::all();
       $jurusan = jurusan::all();
       $ml = matkul::all();
       $coment = komentar::all();


       return view('f-materi.materi', compact('mt','jurusan','ml','coment'));
   }


   public function store(Request $request)
   {
     $request->validate([

       'matkul_id' => 'required|max:50',
       'dosen_id' => 'required|max:50',
       'mahasiswa_id' => 'required|max:50',
       'judul_materi' => 'required',
       'materi' => 'mimes:pdf|max:5000',
       'deskripsi' => 'required|max:255',


   ]);


     $materi           = $request->file('materi');
     $nama_file      = $materi->getClientOriginalName();
     $materi->move('materi',$materi->getClientOriginalName());


     $upload = new materi;
     $upload->matkul_id = $request->input('matkul_id');
     $upload->dosen_id = $request->input('dosen_id');
     $upload->mahasiswa_id = $request->input('mahasiswa_id');
     $upload->judul_materi = $request->input('judul_materi');
     $upload->materi       = $nama_file;
     $upload->deskripsi = $request->input('deskripsi');



        //menyimpan data ke database
     $upload->save();

        //kembali ke halaman sebelumnya
     return back()->with('success','upload materi berhasil');
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hapus = materi::find($id);
        $file = public_path('/materi/').$hapus->materi;

        if (file_exists($file)) {
            @unlink($file);
        }

        $hapus->delete();
        return back()->with('success','materi berhasil dihapus');
    }

    
 //    public function update(Request $request, $id)
 //    {

 //    //    $request->validate([
 //    //     'judul_materi' => 'required|max:50',
 //    //     'materi' => 'required',
 //    //     'link' => 'required|max:100',
 //    //     'jurusan' => 'required'

 //    // ]);

 //       $ubah = materi::find($id);
 //       $awal = $ubah->materi;

 //       $dt =[
 //         'matkul' =>$request['judul_materi'],
 //         'deskripsi' =>$request['deskripsi'],
 //         'judul_materi' =>$request['judul_materi'],
 //         'materi' => $awal,
 //         'jurusan' => $request['jurusan']

 //     ];




 //     $request->materi->move(public_path().'/materi', $awal);
 //     $ubah->update($dt);
 //     return redirect('input-materi')->with('success','materi berhasil diubah');
 // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function theory($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $coment = komentar::all();
        return view('belajar', compact('mahasiswa','coment'));
    }

    public function materi($id)
    {
        $dosen = dosen::find($id);
        $dsn = dosen::all();
        $mhs = mahasiswa::all();
        $coment = komentar::all();
        return view('f-materi.materi', compact('dosen','dsn','mhs','coment'));
    }


    public function komentar(Request $request)
    {
        //dd($request->all());
        $komentar = new komentar;
        $komentar->komentar = $request->komentar;
        $komentar->save();
        return back();
    }
}

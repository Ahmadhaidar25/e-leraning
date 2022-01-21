<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tugas_mahasiswa;
use App\Models\dosen;
use Session;


class ControllerTugas extends Controller
{
    
    public function index()
    {
      $tugas = tugas_mahasiswa::all();
     return view('kirim-tugas',compact('tugas'));   
    }

    public function send(Request $request)
    {

      //dd($request->all());
        $request->validate([
        'file' => 'mimes:pdf|max:5000',
        

    ]);


      $nm = $request->file;
      $namafile = $nm->getClientOriginalName();

        $upload = new tugas_mahasiswa;
        $upload->file = $namafile;
        //$post->user_id = Auth::user()->id;
        

        $nm->move(public_path().'/tugas', $namafile);
        $upload->save();

        //kembali ke halaman sebelumnya
       return redirect('home')->with('success','tugas berhasil di upload');
    }



      public function show($id)
    {
        $hapus = tugas_mahasiswa::find($id);
        $file = public_path('/tugas/').$hapus->file;

        if (file_exists($file)) {
            @unlink($file);
        }

        $hapus->delete();
        return back()->with('success','tugas berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matkul;
//use App\Models\materi;
use App\Models\jurusan;
use App\Models\dosen;
class ControllerMatkul extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $mk = matkul::all();
       $jurusan = jurusan::all();
       return view('f-matkul.matkul', compact('mk','jurusan')); 
   }

    public function mengajar()
    {
       $mk = matkul::all();
       $jurusan = jurusan::all();
       return view('mengajar', compact('mk','jurusan')); 
   }

 
    public function store(Request $request)
    {
        //dd($request->all());

        $data = new matkul;
        // $data->materi_id = $request->materi_id;
        $data->dosen_id = $request->dosen_id;
         $data->mahasiswa_id = $request->mahasiswa_id;
        $data->matkul = $request->matkul;
        $data->jurusan = $request->jurusan;
        
        $data->save();
        return redirect('input-matkul')->with('success','data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $del = matkul::find($id);
        $del->delete();
        return redirect('input-matkul')->with('success','data berhasil di hapus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {   
        $data = matkul::find($id);
        $data->matkul = $request->matkul;
        $data->jurusan = $request->jurusan;
        $data->update();
        return redirect('input-matkul')->with('success','data berhasil di ubah'); 
    }

   

    public function belajar()
   {
        $data = matkul::all();
       return view('pembelajaran', compact('data'));
   }
}

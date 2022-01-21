<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;

class ControllerJurusan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jurusan::all();
        return view('f-jurusan.jurusan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama_jurusan' => 'required', 
        
    ]);

       $data = new jurusan;
       $data->nama_jurusan = $request->nama_jurusan;
       
       $data->save();
       return redirect('input-jurusan')->with('success', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $del = jurusan::findorfail($id);
        $del->delete();
        return redirect('input-jurusan')->with('success', 'Data Berhasil Di Hapus');
    }

  
    public function update(Request $request, $id)
    {
        $data = jurusan::findorfail($id);
       $data->nama_jurusan = $request->nama_jurusan;
       
       $data->update();
       return redirect('input-jurusan')->with('success', 'Data Berhasil Di Ubah');
    }

   
   
}

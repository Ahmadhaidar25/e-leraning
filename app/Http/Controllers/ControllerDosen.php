<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\dosen;

use Illuminate\Support\Facades\DB;
use Session;

class ControllerDosen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = dosen::all();
        return view('input-dosen', ['dosen'=>$dosen]);
    }

    public function store(Request $request)
    {

     $validated = $request->validate([
        'name' => 'required',
        'username' => 'required|max:10',
        'password' => 'required|max:8',
        'no_tlp' => 'required|max:12',
        'jk' => 'required',
        'ket' => 'required',
        'set' => 'required'

        
    ]);

     $data = new dosen;
     $data->name = $request->name;
     $data->username = $request->username;
     $data->password = Hash::make($request->password);
     $data->no_tlp = $request->no_tlp;
     $data->jk = $request->jk;
     $data->ket = $request->ket;
     $data->set = $request->set;


     $data->save();
     return redirect('data-dosen')->with('success', 'Data Brhasil Di Tambahkan');
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hapus = dosen::findorfail($id);
        $hapus->delete();
        return back()->with('success', 'Anda Berhasil Terhapus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //      $edit = dosen::findorfail($id);
    //     return view('edit-dosen', ['edit'=>$edit]); 
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    
     $ubah = dosen::findorfail($id);
     $ubah->name = $request->name;
     $ubah->username = $request->username;
     $ubah->password = Hash::make($request->password);
     $ubah->no_tlp = $request->no_tlp;
     $ubah->jk = $request->jk;
     $ubah->ket = $request->ket;
     $ubah->set = $request->set;
     $ubah->update();
     return redirect('data-dosen')->with('success', 'Data Berhasil Di Ubah');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}

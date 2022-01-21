<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peresensi;
use App\Models\jurusan;
use App\Exports\presensi;
use Maatwebsite\Excel\Facades\Excel;

class ControllerPresensi extends Controller
{
    public function index()
    {
        $pr = peresensi::all();
        $jr = jurusan::all();
        return view('kirim-peresensi', compact('pr','jr'));
    }

    public function send(Request $request)
    {
        $pr = new peresensi;
        $pr->npm = $request->npm;
        $pr->nama = $request->nama;
        $pr->jurusan = $request->jurusan;
        $pr->semester = $request->semester;
       

        $pr->save();
        return redirect('home')->with('success','presensi berhasil di kirim');
    }

    public function export()
    {
        return Excel::download(new presensi, 'rekap-presensi.xlsx');
    }
}

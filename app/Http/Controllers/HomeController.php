<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\peresensi;
use App\Models\tugas_mahasiswa;



class HomeController extends Controller
{

     // public function __construct()
     // {
     //     $this->middleware('guard');
     // }
    public function home()
    {
         $dosen = DB::table('dosen')->count();
         $mhs = DB::table('mahasiswa')->count();
         $per = peresensi::all();
         $tgs = tugas_mahasiswa::all();



         return view('home',compact('dosen','mhs','per','tgs'));
    }




}

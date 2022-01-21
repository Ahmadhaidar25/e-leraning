<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\baak;
use App\Models\dosen;

class ControllerProfil extends Controller
{
     public function setting()
    {
        return view('profil');
    }

   


    public function profil_dosen()
    {

        return view('profil');
    }

     public function profil_mahasiswa()
    {

        return view('profil');
    }
}

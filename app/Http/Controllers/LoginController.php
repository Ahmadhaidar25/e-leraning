<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\baak;

class LoginController extends Controller
{
  // public function page()
  //   {
  //       return view('landing-page');
  //   }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        if (Auth::guard('baak')->attempt(['username'=> $request->username, 
            'password'=> $request->password])) 
        {
            alert()->success('SuccessAlert','Login Berhasil');
            return redirect('home');

        }

        elseif (Auth::guard('mahasiswa')->attempt(['username'=> $request->username, 
            'password'=> $request->password, 'set'=> 1])) 
        {
            alert()->success('SuccessAlert','Login Berhasil');
            return redirect('home');
        }

        elseif (Auth::guard('mahasiswa')->attempt(['username'=> $request->username, 'password'=> $request->password,'set'=> 0]))
        {
        alert()->error('Error','akun anda telah di disable');
        return redirect('/');
        }



        elseif (Auth::guard('dosen')->attempt(['username'=> $request->username, 'password'=> $request->password,'set'=> 1]))
        {
            alert()->success('SuccessAlert','Login Berhasil');
            return redirect('home');
        } 
        elseif (Auth::guard('dosen')->attempt(['username'=> $request->username, 'password'=> $request->password,'set'=> 0]))
        {
        alert()->error('Error','akun anda telah di disable');
        return redirect('/');
        }

        alert()->error('Error','Login Gagal');
        return redirect('/');
    }

    public function logout()
    {
     if (Auth::guard('baak')->check()) {
         Auth::guard('baak')->logout();
     }elseif(Auth::guard('mahasiswa')->check()){
       Auth::guard('mahasiswa')->logout();
   }elseif(Auth::guard('dosen')->check()){
       Auth::guard('dosen')->logout();
   }

   return redirect('/')->with('success', 'Berhasil Silahkan Login Kembali');
}

}

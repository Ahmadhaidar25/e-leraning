<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControllerDosen;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ControllerMatkulIf;
use App\Http\Controllers\ControllerMatkulSi;
use App\Http\Controllers\ControllerMatkulSiak;
use App\Http\Controllers\ControllerMengajar;
use App\Http\Controllers\ControllerKuliah;
use App\Http\Controllers\ControllerMateri;
use App\Http\Controllers\ControllerJurusan;
use App\Http\Controllers\ControllerMatkul;
use App\Http\Controllers\ControllerProfil;
use App\Http\Controllers\ControllerTugas;
use App\Http\Controllers\ControllerPresensi;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', [LoginController::class, 'page']);
Route::get('/', [LoginController::class, 'index']);
Route::post('login-post', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);
Route::get('home', [HomeController::class, 'home']);
Route::get('coba', [HomeController::class, 'coba']);




Route::get('data-dosen', [ControllerDosen::class, 'index']);
//Route::get('cari-data-dosen', [ControllerDosen::class, 'cari']);
Route::post('post-dosen', [ControllerDosen::class, 'store']);
Route::get('/hapus-dosen/{id}', [ControllerDosen::class, 'show']);
Route::post('/update-dosen/{id}', [ControllerDosen::class, 'update']);
//Route::get('mengajar', [ControllerDosen::class, 'mengajar']);




Route::get('data-mahasiswa', [MahasiswaController::class, 'index']);
//Route::get('cari-data-mhs', [MahasiswaController::class, 'cari']);
Route::post('post-mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/hapus-mahasiswa/{id}', [MahasiswaController::class, 'show']);

Route::post('/update-mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::get('belajar', [ControllerMatkul::class, 'belajar']);

Route::get('input-jurusan', [ControllerJurusan::class, 'index']);
Route::post('post-jurusan', [ControllerJurusan::class, 'store']);
Route::get('/del-jurusan/{id}', [ControllerJurusan::class, 'show']);
Route::post('/update-jurusan/{id}', [ControllerJurusan::class, 'update']);

Route::get('input-matkul', [ControllerMatkul::class, 'index']);
Route::post('post-matkul', [ControllerMatkul::class, 'store']);
Route::get('/del-matkul/{id}', [ControllerMatkul::class, 'show']);
Route::post('/update-matkul/{id}', [ControllerMatkul::class, 'update']);

Route::get('mengajar', [ControllerMatkul::class, 'mengajar']);

Route::get('input-materi', [ControllerMateri::class, 'index']);

Route::post('post-materi', [ControllerMateri::class, 'store']);
Route::post('/update-materi/{id}', [ControllerMateri::class, 'update']);
Route::get('/del-materi/{id}', [ControllerMateri::class, 'show']);
Route::get('setting', [ControllerProfil::class, 'setting']);
Route::post('update-baak', [ControllerProfil::class, 'store']);
Route::get('/materi/{id}/belajar', [ControllerMateri::class, 'theory']);
Route::get('/input/{id}/materi', [ControllerMateri::class, 'materi']);
Route::post('komentar', [ControllerMateri::class, 'komentar']);

Route::post('kirim-tugas', [ControllerTugas::class, 'send']);
Route::get('/matkul/kirim-tugas', [ControllerTugas::class, 'index']);
Route::get('/del-tugas/{id}', [ControllerTugas::class, 'show']);

Route::get('/matkul/kirim-presensi', [ControllerPresensi::class, 'index']);
Route::post('kirim-peresensi', [ControllerPresensi::class, 'send']);
Route::get('export-excel', [ControllerPresensi::class, 'export']);






Route::get('profil-dosen', [ControllerProfil::class, 'profil_dosen']);
Route::get('profil-mahasiswa', [ControllerProfil::class, 'profil_mahasiswa']);






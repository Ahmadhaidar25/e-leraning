<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    use HasFactory;

    protected $table = "matkul";

    protected $fillable = ['mahasiswa_id','nama_matkul','jurusan'];

   //  public function dosen()
   // {
   //     return $this->belongsTo(dosen::class);
   // }

    public function materi()
   {
       return $this->hasMany(materi::class);
   }

    public function jurusan()
   {
       return $this->belongsTo(jurusan::class);
   }

   //  public function jurusan()
   // {
   //     return $this->belongsTo(jurusan::class);
   // }
  
     public function mahasiswa()
   {
       return $this->belongsTo(mahasiswa::class);
   }

    public function dosen()
   {
       return $this->belongsTo(dosen::class);
   }

   
}

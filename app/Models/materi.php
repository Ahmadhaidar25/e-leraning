<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;

    protected $table = "materi";
    protected $fillable = ['matkul_id','dosen_id','mahasiswa_id','judul_materi','materi','deskripsi'];
    //protected $guarded = [];


   public function matkul()
   {
       return $this->belongsTo(matkul::class);
   }

    public function dosen()
   {
       return $this->belongsTo(dosen::class);
   }
   

   public function mahasiswa()
   {
       return $this->belongsTo(mahasiswa::class);
   }

   

  

   
    
}

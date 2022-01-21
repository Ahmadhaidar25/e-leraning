<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peresensi extends Model
{
    use HasFactory;

     protected $table = "presensi";
    protected $fillable = ['npm','nama','jurusan','semester'];

     public function dosen()
    {
        return $this->belongsTo(dosen::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;
    protected $table = "jurusan";
    protected $fillable = ['nama_jurusan'];

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);
    }

    public function materi()
    {
        return $this->hasMany(materi::class);
    }

     public function matkul()
    {
        return $this->hasMany(matkul::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas_mahasiswa extends Model
{
    use HasFactory;

    protected $table = "tugas";
    protected $fillable = ['file','created_at'];

    public function dosen()
    {
        return $this->belongsTo(dosen::class);
    }

    
}

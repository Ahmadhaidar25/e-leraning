<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class mahasiswa extends Authenticatable
{
    use HasFactory;

     protected $table="mahasiswa";
    //protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'username',
        'password',
        'jk',
        'jurusan',
        'angkatan',
        'no_tlp',
        'ket'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }

     public function matkul()
    {
        return $this->hasMany(matkul::class);
    }

     public function materi()
    {
        return $this->hasMany(materi::class);
    }
}

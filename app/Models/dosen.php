<?php

namespace App\Models;



use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class dosen extends Authenticatable
{
    use HasFactory;

     protected $table="dosen";
    //protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'name',
        'nidn',
        'password',
        'no_tlp',
        'jk',
        'ket',
        'status'
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

   //  public function matkul()
   // {
   //     return $this->hasMany(matkul::class);
   // }

   public function tugas_mahasiswa()
   {
       return $this->hasMany(tugas_mahasiswa::class);
   }

   public function matkul()
   {
       return $this->hasMany(matkul::class);
   }

    public function peresensi()
   {
       return $this->hasMany(peresensi::class);
   }

     public function materi()
   {
       return $this->hasMany(materi::class);
   }

  

}
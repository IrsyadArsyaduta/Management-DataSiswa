<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable; //  Implementasi default untuk otentifikasi pengguna.
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'user_role_id',
        'nisn',       // Menambahkan nisn
        'kelas',      // Menambahkan kelas
        'keterangan', // Menambahkan keterangan
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        // Mendefinisikan relasi antara User dan UserRole
        return $this->belongsTo(UserRole::class, 'user_role_id');
    }
}

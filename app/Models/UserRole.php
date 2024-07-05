<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = ['role'];

    public function users()
    {
        // Mendefinisikan relasi antara User dan UserRole
        return $this->hasMany(User::class, 'user_role_id');
    }
}
